@props(['user'])
<nav style="background-color: #141111;">
    <div class="container d-flex justify-content-between mx-auto py-2 align-items-center" style="max-width: 900px;">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="" width="80" class="py-2">
            </a>
        </div>
        @auth
            <div class="border border-dark btn-dark rounded-pill text-white hovp">
                <a href="/{{auth()->user()->username}}" class="text-white fw-bold text-decoration-none ">
                    <img src="https://i.pravatar.cc/40?u={{auth()->user()->id}}" alt="" class="rounded-circle  border-light">
                    <a href="/{{auth()->user()->username}}" class="text-white fw-bold text-decoration-none px-2">{{auth()->user()->name}}</a>
                </a>
                <button type="button" class="border border-dark btn-dark rounded-pill hovp dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-dark text-white">
                    <li><a class="dropdown-item text-white" href="/{{auth()->user()->username}}/received">Received Questions</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-white" href="/logout">Log Out</a></li>
                </ul>
            </div>
        @endauth
        @guest
        <div>
            <a href="/register" class="btn fw-bold hovb mx-3 rounded-3">Sign Up</a>
            <a href="/login" class="btn fw-bold hovb mx-3 rounded-3">Log In</a>
        </div>
        @endguest
    </div>
</nav>