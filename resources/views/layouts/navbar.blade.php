<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="{{route('home')}}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto text-center">
        <li class="nav-item">
          <a class="nav-link" href="{{route('product.index')}}">Sản phẩm</a>
        </li>
        {{-- <li class="nav-item ">
          <a class="nav-link" href="{{route('genre.index')}}">Thể loại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('country.index')}}">Quốc gia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('movie.create')}}">Phim</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{route('episode.create')}}">Tập phim</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{route('linkmovie.index')}}">Link phim</a>
        </li>
        @role('Admin')
        <li class="nav-item">
          <a class="nav-link" href="{{route('info.create')}}">Thông tin website</a>
        </li>
        @endrole --}}
       
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
      </ul>
      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm phim</button>
      </form> --}}
    </div>
  </nav>
  