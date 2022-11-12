<x-profile :user="$user">
    <div class="border d-flex justify-content-evenly my-4 rounded-3 text-center" style="background-color: #141111;">
        <button id="answersButton" class="bg-white text-dark rounded-3 p-1 w-100 border-0" onclick="document.getElementById('answersBox').style.display = '' ; document.getElementById('questionsBox').style.display = 'none'; document.getElementById('answersButton').className = 'bg-white text-dark rounded-3 p-1 w-100 border-0'; document.getElementById('questionsButton').className = 'p-1 rounded-3 text-white w-100 bg-dark border-0'">Answers</button>
        <button id="questionsButton" class="bg-dark text-white rounded-3 p-1 w-100 border-0" onclick="document.getElementById('questionsBox').style.display = ''; document.getElementById('answersBox').style.display = 'none'; document.getElementById('questionsButton').className = 'bg-white text-dark rounded-3 p-1 w-100 border-0'; document.getElementById('answersButton').className = 'p-1 rounded-3 text-white w-100 bg-dark border-0'">Questions</button>
    </div>

    <div>
        <div id="answersBox">
            @foreach ($user->questionsAnswered as $question)
            <div class="bg-white rounded-3 p-3 pb-2 my-3 question-{{$question->id}}">
                <p class="fw-bold">{{$question->question}}</p>
                <p class="text-muted">{{$question->created_at}} @if ($question->asker_id) By <a href="/{{$question->asker->username}}" class="text-decoration-none text-dark">{{ucwords($question->asker->name)}}</a>@endif</p>
                <p class="border-bottom pb-2">{{$question->answer->body}}</p>


                <!-- Heart -->
                <div>

                    <button id="btn1" class="btnn" onclick="toggle1({{$question->id}}, '{{csrf_token()}}')"><i class="fa-solid fa-heart fs-3"></i></button>
                    <!-- fire -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fire mb-2" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                    <!-- Dots -->
                    <a href="#" class="text-muted float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </a>
                </div>

            </div>
            @endforeach
        </div>
        <div id="questionsBox" style="display: none;">
            @foreach ($user->questionsAsked as $question)
            <div class="bg-white rounded-3 p-3 pb-2 my-3 question-{{$question->id}}">
                <p class="fw-bold">{{$question->question}}</p>
                <p class="text-muted">{{$question->created_at}} @if ($question->asker_id) Asking <a href="/{{$question->asker->username}}" class="text-decoration-none text-dark">{{ucwords($question->asker->name)}}</a>
                    @endif</p>
                <p class="border-bottom pb-2">{{$question->answer->body}}</p>

                <!-- Heart -->
                <button id="btn2" class="btnn" onclick="toggle2({{$question->id}}), '{{csrf_token()}}'><i class=" fa-solid fa-heart fs-3"></i></button>

                <!-- fire -->
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-fire mb-2" viewBox="0 0 16 16">
                    <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                </svg>
                <!-- Dots -->
                <a href="#" class="text-muted float-end">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    </svg>
                </a>
            </div>
            @endforeach
            <script>
                function toggle1(question_id, token) {
                    const xmlhttp = new XMLHttpRequest();
                    xmlhttp.onload = function() {
                        if (this.status == 200) {
                            let btnvar = document.querySelector(`.question-${question_id} #btn1`);
                            let result = JSON.parse(this.responseText);
                            if (result.status == 'like') {
                                btnvar.style.color = "red"
                            } else {
                                btnvar.style.color = "black"
                            }
                        }
                    }
                    xmlhttp.open("POST", "{{$user->username}}/questions/{{$question->id}}/like");
                    xmlhttp.setRequestHeader("X-CSRF-TOKEN", token);
                    xmlhttp.send();
                }

                function toggle2(question_id) {
                    const xmlhttp = new XMLHttpRequest();
                    xmlhttp.onload = function() {
                        if (this.status == 200) {
                            let btnvar = document.querySelector(`.question-${question_id} #btn2`);
                            let result = JSON.parse(this.responseText);
                            if (result.status == 'like') {
                                btnvar.style.color = "red"
                            } else {
                                btnvar.style.color = "black"
                            }
                        }
                    }
                    xmlhttp.open("POST", "{{$user->username}}/questions/{{$question->id}}/like");
                    xmlhttp.setRequestHeader("X-CSRF-TOKEN", token);
                    xmlhttp.send();
                }
            </script>
        </div>
    </div>
</x-profile>