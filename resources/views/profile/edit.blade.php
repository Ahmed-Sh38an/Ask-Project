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
        <x-navbar :user="$user" />
        <div class="container mt-5" style="max-width: 900px;">
            <form action="#" method="POST" enctype="multipart/form-data">
            @csrf 
                <div class="d-md-flex">
                    <div class="me-2">
                        <img src="https://i.pravatar.cc/100?u={{$user->id}}" alt=""
                            class="rounded-circle border-5 border border-light mb-3 ms-3">
                        <p><input type="file" accept="image/*" name="photo" id="photo" hidden>
                            <label for="photo" class="btn btn-danger rounded-3">Change Photo <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                            <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/></svg>
                            </label>
                        </p>
                    </div>
                    <div class="text-white d-flex flex-column fw-bold pb-3 px-4 text-white">
                        <label for="username">Username: </label>
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="{{$user->username}}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        @error('username')
                            <p class="text-danger mb-0">{{$message}}</p>
                        @enderror
                        <label for="name" class="mt-2">Name:</label>
                        <input type="text" name="name" id="name" required value="{{$user->name}}" class="w-75">
                        @error('name')
                            <p class="text-danger mb-0">{{$message}}</p>
                        @enderror
                        <div class="my-2 ">
                                <h6 class="pt-5">About {{ucwords($user->name)}}:</h6>
                                <textarea name="about" id="about" cols="40" rows="5" 
                                placeholder=""
                                class="px-2 py-2 rounded-3 mb-3" 
                                style="width: 95%;"></textarea>
                                
                                <h6 class="pt-5">{{ucwords($user->name)}} photo gallery: </h6>
                                <p class="text-muted mx-4 my-3">Nothing at the moment
                                <input type="file" accept="image/*" name="photo" id="photo" hidden>
                            <label for="photo" class="btn btn-danger rounded-3">Upload Photos <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                            <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/></svg>
                            </label>
                                </p>
                                
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer class="pt-5 mt-auto">
        <div class="text-center fw-bold">
            <a href="#" class="text-decoration-none fs-6 text-muted my-1">About Ask </a>

            <a href="#" class="text-decoration-none fs-6 text-muted my-1">Cookies Policy </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Terms of use </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Privacy Policy </a>




            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Safety Center </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Contact us </a>

            <a href="#" class="text-decoration-none  fs-6 text-muted my-1">Support</a>
            <p class="pt-3 text-muted">© Ask.fm 2022</p>
        </div>
    </footer>
</x-layout>