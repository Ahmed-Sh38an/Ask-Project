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
        background-image: url('/images/profilebg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }
    </style>
    <nav style="background-color: #141111;">
        <div class="container d-flex justify-content-between mx-auto py-2 align-items-center" style="max-width: 900px;">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="" width="80" class="py-2">
            </a>
        </div>
        <div>
            <a href="/me">Profile</a>
        </div>
        </div>
    </nav>
    <div class="container mt-5" style="max-width: 900px;">
        <div class="d-md-flex">
            <div class="pe-4">
                <img src="https://i.pravatar.cc/100" alt="" class="rounded-circle border-5 border border-light">
            </div>
            <div class="text-white">
                <p class="text-muted fw-bold fs-6">@dereck</p>
                <h2 class="pb-3">Dereck</h2>
                <div>
                    <button class="btn text-white rounded-3 fw-bold btn-danger">Ask me anything</button>
                    <button class="btn text-white rounded-3 fw-bold border mx-3">Follow</button>
                    <a href="#" class="text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="my-5 row">
            <section class="col-md-7 me-3" >
                <form action="#" method="post" class="border border-dark rounded-3 px-3 py-4" style="background-color: #141111;">
                    @csrf 
                    <p class="text-white fw-bold">Ask @dereck</p>
                    <textarea name="question" id="question" cols="30" rows="1" placeholder="What,when,why... ask" class="px-2 py-2 rounded-3 mb-3" style="width: 98%;"></textarea>
                    <div class="row">

                        <div class="col-7 me-4">
                            <input type="file" name="image" id="image" >
                            <input type="checkbox" name="check" id="check" >
                            <label for="check">Ask Anonymously</label>
                        </div>
                        <div class="col ">
                            300
                            <button type="submit" class="btn text-white rounded-3 fw-bold btn-danger px-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
                
                <nav class="my-3 fw-bold" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-decoration-none text-white">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="/me" class="text-decoration-none text-white">@dereck</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#" class="text-decoration-none text-muted">Latest</a>
                        </li>
                    </ol>
                </nav>
                
                <div class="border d-flex justify-content-evenly my-4 rounded-3 text-center" style="background-color: #141111;">
                    <a href="#" class="bg-white rounded-1 text-dark p-1 w-100" style="text-decoration: none;">Answers</a>
                    <a href="#" class="p-1 rounded-1 text-white w-100" style="text-decoration: none;">Questions</a>
                    <a href="#" class="p-1 rounded-1 text-white w-100" style="text-decoration: none;">Versus</a>
                </div>
                <div class="bg-white rounded-3 p-3 pb-2 my-3">
                    <p class="fw-bold">Question one</p>
                    <p class="text-muted">February 2 2024</p>
                    <p class="border-bottom pb-2">answer here</p>
                    <p>
                            <!-- Heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart me-3" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                            <!-- fire -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
                        </svg>
                            <!-- Dots -->
                        <a href="#" class="text-muted float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        </a>
                    </p>
                    
                </div>
                <div class="bg-white rounded-3 p-3 pb-2 my-3">
                    <p class="fw-bold">Question one</p>
                    <p class="text-muted">February 2 2024</p>
                    <p class="border-bottom pb-2">answer here</p>
                    <p>
                            <!-- Heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart me-3" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                            <!-- fire -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
                        </svg>
                            <!-- Dots -->
                        <a href="#" class="text-muted float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        </a>
                    </p>
                    
                </div>
                <div class="bg-white rounded-3 p-3 pb-2 my-3">
                    <p class="fw-bold">Question one</p>
                    <p class="text-muted">February 2 2024</p>
                    <p class="border-bottom pb-2">answer here</p>
                    <p>
                            <!-- Heart -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart me-3" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                            <!-- fire -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
                        </svg>
                            <!-- Dots -->
                        <a href="#" class="text-muted float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        </svg>
                        </a>
                    </p>
                    
                </div>
            </section>

            <section class="col-md-4 text-white">
                <div class="d-md-flex justify-content-between">
                    <div class="d-flex">
                        <div class="bg-dark d-flex justify-content-center py-2 rounded-circle" style="width: 41px;height: 41px;">
                            💬
                        </div>
                        <div class="mx-3 text-white">
                        
                            <p class="fw-bold">3 <br> Posts</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="bg-dark d-flex justify-content-center py-2 rounded-circle" style="width: 41px;height: 41px;">
                            ❤️
                        </div>
                        <div class="mx-3 text-white">

                            
                            <p class="fw-bold"> 9 <br> Likes </p>
                        </div>
                    </div>
                    
                </div>
                <h6  class="pt-5">About {{$user->name}}:</h6>
                <p class="fs-6 mx-4 my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
                    </svg>
                    SC: dl_snap
                </p>
                <h6 class="pt-5">Dereck photo gallery:</h6>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>