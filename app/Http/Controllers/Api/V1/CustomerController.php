<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\People\Customer;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class CustomerController extends Controller
{
    public function signup(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        if ($user) {
            event(new Registered($user));
            $token = $user->createToken('myapptoken')->plainTextToken;
            $response = [
                'status' => 201,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email
                ],
                'token' => $token,
                'Message' => 'Registration was successful. Check your email to verify'
            ];
            return response()->json($response);
        } else {
            $response = [
                'status' => 500,
                'Message' => 'Error registering customer, Please try again.'
            ];
            return response()->json($response);
        }
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response()->json([
                'status' => 401,
                'message' => 'Bad Credentials'
            ]);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'status' => 201,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ],
            'token' => $token,
        ];
        return response()->json($response);
    }

    public function forgot_password(Request $request)
    {
        // Validate email input
        $request->validate(['email' => 'required|email']);

        try {
            // Attempt to send the password reset link
            $response = $this->broker()->sendResetLink(
                $request->only('email')
            );

            // Return appropriate response based on the outcome
            if ($response == Password::RESET_LINK_SENT) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Password reset link sent to your email.'
                ], 200);
            } else {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Failed to send password reset link.'
                ], 400);
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            // Log::error('Error sending password reset link: ' . $e->getMessage());

            // Return a generic error response to avoid revealing sensitive details
            return response()->json([
                'status' => 'failed',
                'message' => 'An error occurred. Please try again later.'
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        if (Auth::user()) {
            auth()->user()->tokens()->delete();
            $response = [
                'status' => 201,
                'message' => 'Logged Out'
            ];
            return response()->json($response);
        } else {
            $response = [
                'status' => 500,
                'message' => 'Error logging out'
            ];
            return response()->json($response);
        }
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return response()->json(['message' => 'verification email sent']);
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return response()->json(['message' => 'user verified successfully']);
    }

    public function check()
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            return response()->json([
                'Success' => true,
                'Message' => 'Email address is verified'
            ]);
        } else {
            return response()->json([
                'Success' => false,
                'Message' => 'Email address is not verified'
            ]);
        }
    }

    public function profile(Request $request)
    {
        // fixme - check if user is authorize for all auth endpoint
        if (Auth::user()) {
            return auth()->user()->only([
                'id', 'name', 'phone', 'email', 'billing_address', 'billing_city', 'billing_state', 'billing_country', 'billing_postcode', 'shipping_address', 'shipping_city', 'shipping_state', 'shipping_country', 'shipping_postcode'
            ]);
        } else {
            return 'No user authenticated';
        }
    }

    public function updateProfile(Request $request)
    {
        // Validate request data
        $fields = $request->validate([
            'name' => 'string',
            'phone' => 'required|string',

            'billing_address' => 'string',
            'billing_city' => 'string',
            'billing_state' => 'string',
            'billing_country' => 'string',
            'billing_postcode' => 'string',

            'shipping_address' => 'string',
            'shipping_city' => 'string',
            'shipping_state' => 'string',
            'shipping_country' => 'string',
            'shipping_postcode' => 'string',
        ]);

        // Update the user's profile
        $updated = Auth::user()->update($fields);

        // Return an appropriate response based on the update status
        if ($updated) {
            return response()->json([
                'status' => 200,  // Use 200 for successful update
                'message' => 'User details updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 422,  // Use 422 for unprocessable entity
                'message' => 'Error updating user',
                // Optionally include more specific error details if available
            ], 422);
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed',
        ]);

        $updated = Auth::user()->update(['password' => bcrypt($request->password)]);

        if ($updated) {
            $response = [
                'status' => 201,
                'Message' => 'Password Updated.'
            ];
            return response()->json($response);
        } else {
            $response = [
                'status' => 400,
                'Message' => 'Error Updating Password.'
            ];
            return response()->json($response);
        }
    }

    // ecommerce apis | cart, wishlist, checkout, orders
}
