<div class="bg-light vh-100 d-flex justify-content-center align-items-center">
    <div class="container mt-5 mb-5">
        <div class="card shadow-lg p-4" style="max-width: 500px; margin: auto;">
            <h2 class="text-center mb-4">Đặt lại mật khẩu</h2>
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @elseif (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form wire:submit.prevent="resetPassword">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" wire:model="email" class="form-control" required>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu mới</label>
                    <input type="password" id="password" wire:model="password" class="form-control" required>
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                    <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-3">Đặt lại mật khẩu</button>
            </form>
        </div>
    </div>
</div>
