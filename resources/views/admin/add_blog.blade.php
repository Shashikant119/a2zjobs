@extends('admin.master')
@section('content')
<div class="panel">
    <div class="boxed">
        <div id="content-container">
          	<div id="page-content">
                <form method="post">
                  @csrf
                  {{$errors->first('title')}}
                  <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title"/><br />
                  {{$errors->first('body')}}
                  <textarea type="text" name="body" class="form-control" value="{{ old('body') }}" placeholder="Body" style="height: 200px;" ></textarea><br />
                  <button type="submit" class="btn btn-success">Submit</button>
                </form>
              </div>
        </div>
    </div>
</div>
@endsection