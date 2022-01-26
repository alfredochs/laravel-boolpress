<div class="container w-25 bg-dark text-light">
    <h1>Sidebar</h1>
    <div class="d-flex">
        <ul class="list-unstyled">
            <div class="p-2">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item "><a class="unstyled"
                            href="{{ route('admin.home') }}">Dashboard</a>
                    </li>
                    <li class="list-group-item"><a href='{{ route('admin.posts.index') }}'>Posts</a></li>
                    <li><a href="{{ route('admin.posts.create') }}" class=" list-group-item text-light bg-success">Crea
                            Post</a></li>
                </ul>
            </div>
        </ul>
    </div>
</div>
