@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection
@section('content')
<!-- Truyện mới -->
<h3>Truyện mới</h3>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <img class="card-img-top"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="{{ asset('storage/story_images/linh-vu-thien-ha9.jpg') }}">
                    <div class="card-body">
                        <h3>Tên truyện</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                <div class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-eye"></i> 100
                                </div>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-success">Xem tất cả</a>
    </div>
</div>

<!-- Truyện được xem nhiều nhất -->
<h3>Lượt đọc nhiều nhất</h3>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <a href="{{ route('story-detail', [5]) }}">
                        <img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                             alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                             src="{{ asset('storage/story_images/linh-vu-thien-ha9.jpg') }}"
                             data-holder-rendered="true">
                        <div class="card-body">
                            <h3>Tên truyện</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                    <div class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-eye"></i> 100
                                    </div>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-success">Xem tất cả</a>
    </div>

</div>

<!-- Blogs -->
<h3>Blogs</h3>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="{{ asset('storage/story_images/linh-vu-thien-ha9.jpg') }}"
                         data-holder-rendered="true">
                    <div class="card-body">
                        <h3>Tên truyện</h3>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary">Đọc truyện</a>
                                <div class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-eye"></i> 100
                                </div>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="btn btn-success">Xem tất cả</a>
    </div>
</div>
@endsection
