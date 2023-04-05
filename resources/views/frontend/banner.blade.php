{{-- Banner --}}

    <!-- begin container -->
    {{-- <div class="container">
        <a href="{{route('login')}}">Masuk</a>
        <h3>Lacak Status Laundry</h3>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Contoh : TR0392928" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        @include('frontend.modal')
    </div> --}}
{{-- End Header --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="csslaundry/ukk.css">
</head>
<body>
    <div class="logo">
        <a href=""><img src="/img/grelaundlogo.png"></a>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('login') }}">Sign In</a></li>
        </ul>
        </nav>
        <div class="input-group m-b-20">
            <input type="text" class="form-control input-lg" id="search_status" placeholder="Masukkan No. Invoice Contoh : KR0365728" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
            </span>
        </div>
        @include('frontend.modal')
    </div>
        <div class="col-img">
            <img src="/img/mesincuci.png"></a>
        </div>
        <h3>Kalau kamu karyawan tugas kamu hanya kerja, tugas nyuci serahkan pada GRE-LAUND aja!</h4>

</body>
</html>
