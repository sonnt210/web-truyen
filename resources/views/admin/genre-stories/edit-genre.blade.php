@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sửa danh mục</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('update-genre', $genre->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control"
                                       id="slug"
                                       name="genre_name"
                                       onkeyup="ChangeToSlug()"
                                       value="{{ $genre->genre_name }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug danh mục</label>
                                <input type="text" class="form-control"
                                       id="convert_slug"
                                       name="genre_slug"
                                       value="{{ $genre->genre_slug }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <input type="text" class="form-control"
                                       id="exampleInputPassword1"
                                       name="genre_description"
                                       value="{{ $genre->genre_description }}"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích hoạt</label>
                                <select name="is_active" class="custom-select">
                                    @if($genre->is_active == 0)
                                        <option selected value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    @else
                                        <option value="0">Active</option>
                                        <option selected value="1">Inactive</option>
                                    @endif
                                </select>
                            </div>

                            <button type="submit" name="add-genre" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
