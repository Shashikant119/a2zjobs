<!DOCTYPE html>
<html>
<head>
  <title>Blog</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><br />
        <div class="container">
            <form method="post">
              @csrf
              <input type="text" name="title" class="form-control" placeholder="Title" value="@if(!empty($data_base->title)) {{$data_base->title}}@else{{old('title')}}@endif"><div style="color: red;"><!-- {{ $errors->first('title') }} --></div><br />
              <input type="text" name="body" class="form-control" placeholder="Body" value="@if(!empty($data_base->body)) {{$data_base->body}}@else{{old('body')}}@endif"><!-- <div style="color: red;">{{ $errors->first('title') }}</div> --><br />
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
      </div>
</body>
</html>

