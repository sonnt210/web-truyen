@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thống kê truyện</div>
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
                                <th scope="col">Tên truyện</th>
                                <th scope="col">Slug truyện</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_stories as $key => $story)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $story->story_name }}</td>
                                    <td>{{ $story->story_slug }}</td>
                                    <td>
                                        <img src="{{ asset('storage/story_images/' . $story->image) }}" alt="" height="150" width="100">
                                    </td>
                                    <td>{{ $story->genreStory->genre_name }}</td>
                                    <td>
                                        @if($story->active == 0)
                                            <span class="text text-success">Activated</span>
                                        @else
                                            <span class="text text-danger">Inactived</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit-story', $story->id) }}" class="btn btn-primary">Edit</a>
                                        <form method="POST" action="{{ route('delete-story', $story->id) }}">
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
