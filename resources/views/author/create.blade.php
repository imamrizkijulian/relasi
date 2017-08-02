@extends ('layouts.app')
@section('content')
<div class="container">
<div class="row">
        <center><h1>Create Data Author</h1></center>
        <div class="panel panel-primary">
        <div class="panel-heading">Create Data Author
          <div class="panel-title pull-right">
          <a href="{{ URL::previous() }}">Kembali</a></div>
        </div>

        <div class="panel-body">
          <form action="{{ route('author.store') }}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label class="control-lable">Name</label>
            <input type="text" name="a" class="form-control" required=""><br>

          <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-success">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection