@extends('layouts.app')

@section('js')
    <script src="{{asset('js/link.js')}}" defer></script>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header h5">Create short link</div>
            <div class="card-body">
                <div class="col-auto">
                    <form action="/">
                        <label class="sr-only" for="url">Enter URL</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">URL</div>
                            </div>
                            <input type="text" class="form-control" id="url" placeholder="Enter URL">
                            <div class="input-group-prepend">
                                <button id="get-short-link" class="btn btn-success">Get short link</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="shortlink-block" class="col-auto d-none">
                    <label class="sr-only" for="shortlink">Your short link</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Your short link</div>
                        </div>
                        <input type="text" class="form-control" id="shortlink" placeholder="Your short link">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
