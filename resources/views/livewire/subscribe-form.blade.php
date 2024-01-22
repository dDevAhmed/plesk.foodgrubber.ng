<form wire:submit.prevent="submitForm">
    @csrf
    <input type="email" class="form-control" placeholder="Email goes here" wire:model="email">
    @error('email')
        <span class="error" style="color: #ff0500;">{{ $message }}</span>
    @enderror

    <button type="submit" class="btn custom-btn"
            wire:loading.attr="disabled"
            wire:loading.class="spinner-button">
        {{ $submitting ? 'Submitting...' : 'Submit' }}
    </button>

    @if ($successMessage)
        <div class="success-message" style="color: #01c324;">
            {{ $successMessage }}
        </div>
    @endif

    @if ($errorMessage)
        <div class="error-message" style="color: #ff0500;">
            {{ $errorMessage }}
        </div>
    @endif
</form>
