@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thêm truyện</div>

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

                        <form method="POST" action="{{ route('update-story', [$story->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên truyện</label>
                                <input type="text" class="form-control"
                                       name="story_name" value="{{ $story->story_name }}"
                                       id="slug"
                                       onkeyup="ChangeToSlug()"
                                >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug truyện</label>
                                <input type="text" class="form-control" name="story_slug" value="{{ $story->story_slug }}" id="convert_slug">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Tóm tắt</label>
                                <textarea name="summary" class="form-control" rows="4" style="resize: none" >
                                    {{ $story->summary }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Danh mục</label>
                                <select name="genre_id" class="custom-select">
                                    @foreach($list_genres as $genre)
                                        <option {{ $genre->id == $story->genre_id ? 'selected' : '' }} value="{{ $genre->id }}">
                                            {{ $genre->genre_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh</label>
                                <input type="file" class="form-control-file" name="image">
                                <td>
                                    <img src="{{ asset('uploads/story_images/' . $story->image) }}" alt="" height="150" width="100">
                                </td>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Kích hoạt</label>
                                <select name="active" class="custom-select">
                                    @if($story->active == 0)
                                        <option selected value="0">Active</option>
                                        <option value="1">Inactive</option>
                                    @else
                                        <option value="0">Active</option>
                                        <option selected value="1">Inactive</option>
                                    @endif
                                </select>
                            </div>

                            <button type="submit" name="edit-story" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
