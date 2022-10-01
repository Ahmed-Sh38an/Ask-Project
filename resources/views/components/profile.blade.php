<x-layout>
    <main>
        <style>
        body {
            background-image: url('/images/profilebg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        </style>
        <x-navbar :user="$user"/>
        <div class="container mt-5" style="max-width: 900px;">
            <div class="d-md-flex">
                <div class="pe-4">
                    <img src="{{asset('storage/' . $user->photo)}}" alt=""
                        class="rounded-circle border-5 border border-light" style="width: 100px; height: 100px;">
                </div>
                <div class="text-white">
                    <p class="text-muted fw-bold fs-6">{{'@' . $user->username}}</p>
                    <h2 class="pb-3">{{$user->name}}</h2>
                    <div>
                        <label for="question" class="btn text-white rounded-3 fw-bold btn-danger">Ask me anything</label>
                        <button class="btn text-white rounded-3 fw-bold border mx-3">Follow</button>
                        <a href="#" class="text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor"
                                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path
                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="my-5 row">
                <section class="col-md-7 me-3">
                    <x-askbox :user="$user" />
                    <nav class="my-3 fw-bold" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="text-decoration-none text-white">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="/me" class="text-decoration-none text-white">{{'@' . $user->username}}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="text-decoration-none text-muted">Latest</a>
                            </li>
                        </ol>
                    </nav>

                    <div class="border d-flex justify-content-evenly my-4 rounded-3 text-center"
                        style="background-color: #141111;">
                        <a href="/{{$user->username}}" class="{{request()->is($user->username)? 'bg-white text-dark rounded-1 p-1 w-100' : 'p-1 rounded-1 text-white w-100'}}"
                            style="text-decoration: none;">Answers</a>
                        <a href="/{{$user->username}}/questions" class="{{request()->is($user->username . '/questions')? 'bg-white text-dark rounded-1 p-1 w-100' : 'p-1 rounded-1 text-white w-100'}}" style="text-decoration: none;">Questions</a>
                    </div>

                    {{$slot}}


                    
                </section>

<section class="col-md-4 text-white">
    <div class="d-md-flex justify-content-between">
        <div class="d-flex">
            <div class="bg-dark d-flex justify-content-center py-2 rounded-circle"
                style="width: 41px;height: 41px;">
                💬
            </div>
            <div class="mx-3 text-white">

                <p class="fw-bold">{{$user->postsCount() }} <br> Posts</p>
            </div>
        </div>
        <div class="d-flex">
            <div class="bg-dark d-flex justify-content-center py-2 rounded-circle"
                style="width: 41px;height: 41px;">
                ❤️
            </div>
            <div class="mx-3 text-white">


                <p class="fw-bold"> 9 <br> Likes </p>
            </div>
        </div>

    </div>
    <h6 class="pt-5">About {{ucwords($user->name)}}:</h6>
    <p class="fs-6 mx-4 my-3 fw-bold">
        {{$user->about}}
    </p>
    <h6 class="pt-5">{{ucwords($user->name)}} photo gallery:</h6>
    <p class="text-muted mx-4 my-3">Nothing at the moment</p>
    <footer class="pt-5">
        <div class="row row-cols-2 fw-bold">
            <a href="#" class="text-decoration-none fs-6 text-muted my-1">About Ask </a>

            <a href="#" class="text-decoration-none fs-6 text-muted my-1">Cookies Policy </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Terms of use </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Privacy Policy </a>




            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Safety Center </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Contact us </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Support</a>
        </div>

        <p class="pt-3 text-muted">© Ask.fm 2022</p>
    </footer>
</section>
</div>
</div>
</main>
</x-layout>