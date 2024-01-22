<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to Foogrubber!</title>
</head>
<body>
    <table class="email-body" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <table class="hero-section" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <img src="{{ asset('images/logo.png') }}" alt="Foogrubber" width="100">
                            {{-- <h1>Welcome to Foogrubber, {{ $subscriberName }}!</h1> --}}
                            <h1>Welcome to Foogrubber,</h1>
                            <p>We're so excited to have you on board.</p>
                        </td>
                    </tr>
                </table>

                <table class="body-section" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            {{-- <p>You're now subscribed to receive {{ $contentDescription }}. Here's a sneak peek of what you can expect:</p> --}}
                            <p>You're now subscribed to receive. Here's a sneak peek of what you can expect:</p>
                            <ul>
                                <li>Benefit 1</li>
                                <li>Benefit 2</li>
                                <li>Benefit 3</li>
                            </ul>
                        </td>
                    </tr>
                </table>

                <table class="cta-section" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            {{-- <a href="{{ $ctaLink }}" class="btn">Ready to dive in?</a> --}}
                            <a href="#" class="btn">Ready to dive in?</a>
                        </td>
                    </tr>
                </table>

                <table class="footer-section" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <p>Thanks for joining us!</p>
                            <p>Foogrubber Team</p>
                            {{-- <p>Contact us: {{ $contactEmail }}</p> --}}
                            <p>Contact us: </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
