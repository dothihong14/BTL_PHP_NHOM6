<div>
    <div class="bg-light vh-100 d-flex justify-content-center align-items-center">
        <div class="container mt-5 mb-5">
            <div class="card shadow-lg p-4" style="max-width: 500px; margin: auto;">
                <h2 class="text-center mb-4">Quên mật khẩu</h2>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form wire:submit.prevent="sendResetLink">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" wire:model="email" class="form-control" placeholder="Nhập email" required>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Gửi link đặt lại mật khẩu</button>
                </form>
            </div>
        </div>
    </div>
    
</div>
