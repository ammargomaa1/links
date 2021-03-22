@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">
                        Edit the link
                    </h2>
                    <form action="/dashboard/links/{{$link->id}}" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name" class="formcontrol {{ $errors->first('name') ? 'is-invalid':''}}" placeholder="Your link name" value="{{$link->name}}">
                                    @if ($errors->first('name'))
                                    <div class="invalid-feedback ">{{$errors->first('name')}}</div>
                                        
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="link">Link URL</label>
                                    <input type="text" id="link" name="link" class="formcontrol {{ $errors->first('link') ? 'is-invalid':''}}" placeholder="Your URL" value="{{$link->link}}">
                                    @if ($errors->first('link'))
                                    <div class="invalid-feedback ">{{$errors->first('link')}}</div>
                                        
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                @csrf
                                <button type="submit" class="btn btn-primary">Save link</button>
                                <button type="button" class="btn btn-secondary" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete link</button>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="/dashboard/links/{{$link->id}}" id="delete-form">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection