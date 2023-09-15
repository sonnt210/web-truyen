@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thống kê danh mục</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Slug danh mục</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($list_genres as $key => $genre)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $genre->genre_name }}</td>
                                    <td>{{ $genre->genre_slug }}</td>
                                    <td>{{ $genre->genre_description }}</td>
                                    <td>
                                        @if($genre->is_active == 0)
                                            <span class="text text-success">Activated</span>
                                        @else
                                            <span class="text text-danger">Inactived</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit-genre', $genre->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('delete-genre', $genre->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Có muốn xoá danh mục này không?')"
                                                    class="btn btn-danger">Delete
                                            </button>
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
    </div>
@endsection
