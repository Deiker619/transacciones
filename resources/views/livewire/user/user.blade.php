<div>
    {{-- Success is as dangerous as failure. --}}

    @foreach ($users as $user)
        <ul>
            <li>{{ $user->name }}</li>
        </ul>
    @endforeach
</div>
