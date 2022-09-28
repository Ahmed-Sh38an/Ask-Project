<form action="/question" method="post" class="border border-dark rounded-3 px-3 py-4 pe-0"
      style="background-color: #141111;">
    @csrf
    <p class="text-white fw-bold">Ask {{ucwords($user->name)}}</p>
    <input type="text" hidden value="{{$user->id}}" name="recipient_id" id="recipient_id">
    <textarea name="question" id="question" cols="30" rows="1" 
              placeholder="What,when,why... ask"
              class="px-2 py-2 rounded-3 mb-3" 
              style="width: 95%;" maxlength="300"></textarea>
    @error('question')
        <p class="text-danger fw-bold">{{$message}}</p>
    @enderror
    <div class="d-flex">
        <div class="col-7 me-4 fw-bold form-check form-switch">
        @if (auth()->check())
            <input type="text" value="{{auth()->user()->id}}" name="asker_id" hidden>
            <input class="form-check-input" type="checkbox" role="switch" name="asker_id" id="check" value="">
        @endif
        @if (!auth()->check())
        <input class="form-check-input" type="checkbox" role="switch" id="check" checked disabled>
        @endif
            <label class="form-check-label text-white" for="check">Ask Anonymously</label>
        </div>
        <div class="mx-auto text-white">
            <button type="submit" class="btn btn-danger fw-bold ms-3 px-5 rounded-3 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-send" viewBox="0 0 16 16">
                    <path
                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                </svg>
            </button>
        </div>
    </div>
</form>