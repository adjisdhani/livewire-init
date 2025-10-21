<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Joined</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr wire:key={{ $item->id }}>
                    <th>{{ $loop->index + $users->firstItem() }}</th>
                    <th>{{ $item->name }}</th>
                    <th>{{ $item->email }}</th>
                    <th>{{ $item->created_at->format('d M Y')}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-pagination :items="$users"/>
</div>
