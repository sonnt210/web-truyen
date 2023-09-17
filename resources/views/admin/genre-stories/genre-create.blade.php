@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thêm danh mục</div>

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

                        <form method="POST" action="{{ route('store-genre') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input type="text" class="form-control"
                                       name="genre_name" value="{{old('genre_name')}}"
                                       id="slug"
                                       onkeyup="ChangeToSlug()"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug danh mục</label>
                                <input type="text" class="form-control" name="genre_slug" value="{{old('genre_slug')}}" id="convert_slug">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <input type="text" class="form-control"  name="genre_description" value="{{old('genre_description')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích hoạt</label>
                                <select name="is_active" class="custom-select">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" name="add-genre" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
