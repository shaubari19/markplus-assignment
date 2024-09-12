@extends('books.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2> Detail Buku</h2>
        </div>
        <div class="col-lg-6 text-right m-auto">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Buku</strong>
                {{ $book->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun</strong>
                {{ $book->years }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penulis</strong>
                {{ $book->author }}
            </div>
        </div>
    </div>
@endsection