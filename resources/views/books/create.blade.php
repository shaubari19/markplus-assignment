@extends('books.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h2>Tambah Buku</h2>
        </div>
        <div class="col-lg-6 text-right m-auto">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Buku </strong>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nama Buku">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun </strong>
                    <input type="text" id="datepicker" name="years" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penulis </strong>
                    <input type="text" id="author" name="author" class="form-control" placeholder="Penulis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(function() {
            $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years", 
                minViewMode: "years"
            });
        });
    </script>
@endpush