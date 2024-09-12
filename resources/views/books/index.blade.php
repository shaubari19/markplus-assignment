@extends('books.layout')

@section('content')

    <div class="row">
        <div class="col-lg-6 ">
            <h2>Assignment Web Developer</h2>
        </div>
        <div class="col-lg-6 text-right m-auto">
            <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Product</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="5%">No</th>
            <th>Book Name</th>
            <th>Details</th>
            <th width="22%">Action</th>
        </tr>

        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $book->name }}</td>
            <td>
                <p>Tahun : {{ $book->years }}</p>
                <p><strong>Penulis : {{ $book->author }}</strong></p>
            </td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $books->links() !!}

@endsection