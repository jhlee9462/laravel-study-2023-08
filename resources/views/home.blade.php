@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img
                src="/jpeg/doori.jpeg"
                alt="프로필 사진"
                class="rounded-circle w-75 ">
        </div>
        <div class="col-9 pt-5">
            <div><h1>jhlee9462</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">github.com/jhlee9462</div>
            <div>Hi! I'm passionate developer Jinho.</div>
            <div><a href="#">github.com/jhlee9462</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/jpeg/doori.jpeg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/jpeg/doori.jpeg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/jpeg/doori.jpeg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
