@extends("layouts.php")
@section("content")
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1>
            <form action="/submit" method="POST">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has("title") ? " has-error" : "" }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old("title") }}">
                    @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has("url") ? " has-error" : "" }}">
                    @if($errors->has("url"))
                        <span class="help-block">{{ $errors->first("url") }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection