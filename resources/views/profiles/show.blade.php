@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img
            src="/images/birdy.png"
            alt=""
            class="mb-2">

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

        <div>
            <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-balck text-sm mr-2">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow Me</a>
        </div>
    </div>
        <p class="text-sm">
            My description is the following A tweeter or treble speaker is a special type of loudspeaker
            (usually dome or horn-type) that is designed to produce high audio frequencies, typically from around
            2,000 Hz to 20,000 Hz (generally considered to be the upper limit of human hearing).
            Specialty tweeters can deliver high frequencies up to 100 kHz.
        </p>
        <img
            src="{{$user->avatar}}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width:150px; left:calc(50% - 75px); top:178px">

    </header>

    @include('_timeline',[
    'tweets'=>$user->tweets
])
@endsection
