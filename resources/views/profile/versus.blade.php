<x-profile :user="$user">
    @foreach ($user->questionsReceived as $question)
        
    @endforeach
</x-profile>