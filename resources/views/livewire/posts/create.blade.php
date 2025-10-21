<div class="card">
    <x-flash-message/>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="title" wire:model="form.title" class="form-control" id="title" />
                    @error('form.title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">Body</label>
                    <textarea wire:model="form.body" class="form-control" id="body" rows="3"></textarea>
                    @error('form.body')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
