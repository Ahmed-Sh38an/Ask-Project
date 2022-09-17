@props(['users'])
<footer class="bg-white text-center mt-auto">
    <div class="my-4">
        @foreach ($users as $user)
        @if($loop->iteration > 15)
        @break
        @endif
        <a href="/{{ $user->username }}"><img src="https://i.pravatar.cc/40?={{$user->id}}" alt=""
                class="rounded-circle mx-1"></a>
        @endforeach
    </div>
    <div class="mx-auto text-center d-flex justify-content-center">
        <a href="#" class="text-decoration-none mx-3 fs-6 text-dark">About Ask </a>
        -
        <a href="#" class="text-decoration-none mx-3 fs-6 text-dark">Contact us </a>
        -
        <a href="#" class="text-decoration-none mx-3 fs-6 text-dark">Support</a>
    </div>
    <p class="pt-3 mb-0">© Ask.fm 2022</p>
</footer>