<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#c9dcef !important;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown">
                        Danh mục truyện
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('create-genre') }}">Thêm danh mục</a>
                        <a class="dropdown-item" href="{{ route('list-genre') }}">Thống kê danh mục</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sách truyện
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('create-story') }}">Thêm truyện</a>
                        <a class="dropdown-item" href="{{ route('list-story') }}">Thống kê truyện</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Tên truyện, tác giả..."
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

