@extends('layouts.app')

@section('title', 'Product Index Page')

@section('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
@endsection

@section('content')

    <a type="button" class="btn btn-primary" href="{{ route('category.index') }}">kembali</a>

    <div class="input-form">
        <label for="">Nama kategori</label>
        <input type="text" value="{{ $category->name }}" class="form-control" disabled>
    </div>

    <table id="exampleTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stocks</th>
                <th>Unit</th>
                <th>Brand</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->fkProduct as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stocks }}</td>
                    @if ($item->fkProductDetail != null )
                        <td>{{ $item->fkProductDetail->unit }}</td>
                        <td>{{ $item->fkProductDetail->brand }}</td>
                    @else
                        <td> - </td>
                        <td> - </td>
                    @endif
                    <td>
                        @if ($item->photo != null)
                            <div style="width:200px">
                                <img src="{{ asset('storage/' . $item->photo) }}" class="img-fluid" alt="...">
                            </div>
                        @else
                            <p class="text-info">tidak ada foto</p>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#exampleTable').DataTable();
        });
    </script>
@endsection
