<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" wire:model="email" class="form-control" id="email" autocomplete="off" />
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Body</label>
                    <input type="password" wire:model="password" class="form-control" id="password" autocomplete="off" />
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
