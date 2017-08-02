@extends('layouts.app')
@section('content')
<div class="container">
<div class="row"> 
  <center><h1>Data Book</h1></center>
  <div class="panel panel-primary">
    <div class="panel-heading">Data Book
    <div class="panel-title pull-right"><a href="/book/create">Tambah Data</a></div>
  </div>

  <div class="panel-body">
  <table class="table">
    <thead>

      <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Amount</th>
              <th>Cover</th>
              <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
          @foreach($book as $data)
          <tr>
              <td>{{$data->title}}</td>
              <td>{{$data->authors->name}}</td>
              <td>{{$data->amount}}</td>
              <td><img src="{{asset('img/'.$data->cover.'')}}" height="80px" width="80px"></td>
              <td><a class="btn btn-primary" href="/book/{{$data->id}}/edit">Edit</a></td>
              <td><a class="btn btn-primary" href="/book/{{$data->id}}">Show</a></td>
              <td><form action="{{route('book.destroy',$data->id)}}" method="post">
              <input name ="_method" type="hidden" value="DELETE">
              <input name ="_token"  type="hidden" >
              <input class="btn btn-primary " type="submit" value="Delete">
              <!-- CSRF berfungsi setiap CRUD data harus dibutuhkan -->
              <!-- Perbedaan CSRF_TOKEN(mengubah inputan yang sudah ada) dengan CSRF_FIELD(membuat inputan baru)  -->
              {{csrf_field()}}
              </form>
          </td>
          </tr>
      @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
@endsection
      