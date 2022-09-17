<x-layout>
    <main>
        <div class="mx-auto text-center d-flex align-items-center flex-column justify-content-center"
            style="max-width: 400px; min-height:700px;">
            <img src="/images/logo.png" alt="" style="width: 40%;">
            <h1 class="text-white py-4 fs-2 fw-bold">Ask. Chat. Repeat. Anonymously!</h1>
            @guest
            <p class="text-white fs-5 py-3 fw-bold">Sign up or Log in to ask questions !</p>
            <div class="d-grid gap-2 col-12">
                <a href="/register" class="btn text-white border rounded-3 fw-bold fs-5 hovb">Sign Up</a>
                <a href="/login" class="btn text-white border rounded-3 fw-bold fs-5 mt-2 hovb">Log In</a>
            </div>
            @endguest
            
            @auth 
            <div class="d-grid gap-2 col-10">
                <p class="text-white fs-5 fw-bold">Welcome, {{auth()->user()->name }} !</p>
                <p class="text-white fs-5 pb-3 fw-bold">Want to go to your Profile ?</p>
                <a href="{{ request()->user()->username }}" class="border btn fs-5 fw-bold hovb rounded-3 text-white">
                    <img src="https://i.pravatar.cc/40?u={{request()->user()->id}}" alt=""
                    class="me-3 mx-1 my-1 rounded-circle">
                    {{ request()->user()->name }}
                </a>
                <p class="text-white fs-5 pt-2 fw-bold">Or</p>
                
                <form action="/logout" method="POST" class="d-grid">
                    @csrf 
                    <button type="submit" class="border btn fs-5 fw-bold hovb rounded-3 text-white">Log Out</button>
                </form>
            </div>
            @endauth
        </div>
    </main>
    <x-footer :users="$users"/>
</x-layout>