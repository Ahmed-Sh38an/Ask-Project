<x-layout>
    <main>
        <div class="mx-auto text-center d-flex align-items-center flex-column justify-content-center"
            style="max-width: 400px; min-height:700px;">
            <img src="/images/logo.png" alt="" style="width: 40%;">
            <h1 class="text-white py-4 fs-2 fw-bold">Ask. Chat. Repeat. Anonymously!</h1>
            <p class="text-white fs-5 py-3 fw-bold">Sign up or Log in to ask questions !</p>
            <div class="d-grid gap-2 col-12">
                <a href="/register" class="btn text-white border rounded-3 fw-bold fs-5 hovb">Sign Up</a>
                <a href="/login" class="btn text-white border rounded-3 fw-bold fs-5 mt-2 hovb">Log In</a>
            </div>
        </div>
    </main>
    <x-footer :users="$users"/>
</x-layout>