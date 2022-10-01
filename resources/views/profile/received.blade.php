<x-profile :user="$user">
    @if (auth()->check() && auth()->user()->id == $user->id)
    @foreach ($user->questionsReceived as $question)
        <div class="bg-white rounded-3 p-3 pb-2 my-3">
            <p class="fw-bold">{{$question->question}}</p>
            <p class="text-muted">{{$question->created_at}} @if ($question->asker_id) By <a href="/{{$question->asker->username}}" class="text-decoration-none text-dark">{{ucwords($question->asker->name)}}</a> @endif</p>
            <form action="/answer" method="POST">
                @csrf
                <input type="text" value="{{$question->id}}" hidden id="question_id" name="question_id">
                <textarea name="body" id="body" cols="30" rows="1" 
                        placeholder="Give an answer?"
                        class="px-2 py-2 rounded-3 mb-3" 
                        style="width: 95%;"></textarea>
                <p>
                    <!-- Heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-heart me-3" viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                    </svg>
                    <!-- fire -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-fire" viewBox="0 0 16 16">
                        <path
                            d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                    </svg>
                    <!-- Dots -->
                    <a href="#" class="text-muted float-end">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="40" fill="currentColor"
                            class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path
                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </a>
                    <button type="submit" class="btn text-white rounded-3 fw-bold btn-danger float-end mx-1">Answer</button>
                </p>
            </form>
        </div>
    @endforeach
    @else
    <div class="border border-dark rounded-3 px-3 py-4 pe-0" style="background-color: #141111;">
        <p class="fs-1 text-center text-white">Nothing to see here .</p>
    </div>
    @endif
</x-profile>