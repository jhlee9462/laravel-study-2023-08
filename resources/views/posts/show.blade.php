@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div style="padding-right: 10px">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-75 rounded-circle"
                                 style="max-width: 40px">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="fw-bold">
                                <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                    <span
                                        class="text-dark">
                                        {{ $post->user->username }}
                                    </span>
                                </a>
                                <a href="#" style="padding-left: 10px;">Follow</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p>
                        <span class="fw-bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                <span
                                    class="text-dark">
                                    {{ $post->user->username }}
                                </span>
                            </a>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
