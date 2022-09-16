<x-layout>
<main>
    <div>
        <form action="/register" method="post"
            class="d-flex flex-column mx-auto text-white justify-content-center fw-bold"
            style="max-width: 400px; min-height:700px;">
            @csrf
            <a href="/" class="d-flex justify-content-center"><img src="/images/logo.png" alt=""
                    style="width: 40%;"></a>
            <h1 class="text-white py-2 fs-2 fw-bold text-center">Ask. Chat. Repeat. Anonymously!</h1>
            <h2 class="text-white py-2 fs-3 fw-bold text-center">Sign Up</h2>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="username" class="mt-2">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="email" class="mt-2">E-mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="password" class="mt-2">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="repassword" class="mt-2">Re-type Password:</label>
            <input type="password" name="repassword" id="repassword" oninput="check(this)" required>

            <button type="submit" class="mt-3 btn btn-danger fw-bold">Register</button>
        </form>
    </div>
</main>
</x-layout>