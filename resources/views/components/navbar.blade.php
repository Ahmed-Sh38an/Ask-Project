@props(['user'])
<nav style="background-color: #141111;">
    <div class="container d-flex justify-content-between mx-auto py-2 align-items-center" style="max-width: 900px;">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="" width="80" class="py-2">
            </a>
        </div>
        <div class="border border-dark btn-dark rounded-pill text-white hovp">
            <a href="/{{$user->username}}" class="text-white fw-bold text-decoration-none ">
                <img src="https://i.pravatar.cc/40?u={{$user->id}}" alt="" class="rounded-circle  border-light">
                <a href="/{{$user->username}}" class="text-white fw-bold text-decoration-none">{{$user->name}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                        class="bi bi-caret-down-fill me-1" viewBox="0 0 16 16">
                        <path
                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg>
                </a>
        </div>
    </div>
</nav>