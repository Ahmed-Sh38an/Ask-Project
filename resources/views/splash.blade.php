<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Ask-fm</title>
</head>

<body class="d-md-flex flex-column min-vh-100">
    <main>
        <style>
        body {
            background-image: url('/images/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        </style>

        <div class="mx-auto text-center d-flex align-items-center flex-column justify-content-center"
            style="max-width: 400px; min-height:700px;">
            <img src="/images/logo.png" alt="" style="width: 40%;">
            <h1 class="text-white py-4 fs-2 fw-bold">Ask. Chat. Repeat. Anonymously!</h1>
            <p class="text-white fs-5 py-3 fw-bold">Sign up or Log in to ask questions !</p>
            <div class="d-grid gap-2 col-12">
                <button class="btn text-white border rounded-3 fw-bold fs-5 " type="button">Sign Up</button>
                <button class="btn text-white border rounded-3 fw-bold fs-5 mt-2" type="button">Log In</button>
            </div>
        </div>

    </main>
    <footer class="bg-white text-center mt-auto">
        <div class="my-4">
            @foreach ($users as $user)
                @if($loop->iteration > 15)
                @break
                @endif
                <a href="/{{ $user->username }}"><img src="https://i.pravatar.cc/40?={{$user->id}}" alt="" class="rounded-circle mx-1"></a>
            @endforeach
            
        </div>
        <div class="mx-auto text-center d-flex justify-content-center">
            <a href="#" class="text-decoration-none mx-3 fs-6 text-dark">About Ask </a>
            -
            <a href="#" class="text-decoration-none mx-3 fs-6 text-dark">Contact us </a>
            -
            <a href="#" class="text-decoration-none mx-3 fs-6 text-dark">Support</a>
        </div>
        <p class="pt-3">© Ask.fm 2022</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>