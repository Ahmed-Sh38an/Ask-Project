<x-layout>
<main>
    
    <div class="d-flex flex-column mx-auto text-white justify-content-center fw-bold"
         style="max-width: 400px; min-height:700px;">
        
            <a href="/" class="d-flex justify-content-center pt-5"><img src="/images/logo.png" alt=""
                    style="width: 40%;"></a>
            <h1 class="text-white py-3 fs-2 fw-bold text-center">Ask. Chat. Repeat. Anonymously!</h1>

            <form action="/register" method="post"
            class="bg-gradient border d-flex flex-column fw-bold justify-content-center pb-3 px-4 rounded-3 text-white"
            >
            @csrf
            <h2 class="text-white py-2 fs-3 fw-bold text-center">Sign Up</h2>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}">
            @error('name')
                <p class="text-danger mb-0">{{$message}}</p>
            @enderror

            <label for="username" class="mt-2">Username:</label>
            <input type="text" name="username" id="username" required value="{{ old('username') }}">
            @error('username')
                <p class="text-danger mb-0">{{$message}}</p>
            @enderror

            <label for="email" class="mt-2">E-mail:</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">
            @error('email')
                <p class="text-danger mb-0">{{$message}}</p>
            @enderror

            <label for="password" class="mt-2">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <p class="text-danger mb-0">{{$message}}</p>
            @enderror

            <label for="repassword" class="mt-2">Re-type Password:</label>
            <input type="password" name="repassword" id="repassword" oninput="check(this)" required>

            <label for="photo" class="mt-2">Profile Picture: (Optional)</label>
            <input type="file" name="photo" id="photo">

            <button type="submit" class="mt-3 btn btn-danger fw-bold">Register</button>
        </form>
    </div>
    
</main>
</x-layout>