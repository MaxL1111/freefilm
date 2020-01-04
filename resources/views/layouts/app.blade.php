<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/app.css" rel="stylesheet">

    <!-- Подключаем иконки -->
    <script src="https://kit.fontawesome.com/59c86a6755.js"></script>


    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</head>
<body>
<div id="main_style" class="container">
    @section('navbar')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
            </a>
            <a class="navbar-brand" href="#">Freefilm</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Продать<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">История просмотров</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Помощь</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
            </div>
        </nav>


        <br>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL::to('/images/carousel/2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/images/carousel/2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::to('/images/carousel/2.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    @show

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-2 col-md-12">
                <div class="row">
                    <div id="left_navbar" class="nav-link font-weight-bold list-group list-group-flush">


                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Фильмы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/filmaction'}}">Боевики</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/filmdetectiv'}}">Детективы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{'/filmtriller'}}">Триллеры</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7">

                <div class="card-body">
                    @yield('content')
                </div>

            </div>

            <div id="right_navbar" class="col-lg-3 col-md-5">


                <div class="list-group" role="tablist">
                    <a href="http://www.mjkx.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/1mingkh.png') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://portal.gov.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/2portal.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <a href="http://www.gorod.gomel.by/" class="list-group-item list-group-item-action">
                        <img src="{{ URL::to('/images/rightnav/3gomispolkom.jpg') }}" class="card-img-top" alt="...">
                    </a>

                </div>
            </div>

        </div>
    </div>

    @section('footer')

        <div id="footer">

            <p><strong>Онлайн-магазин Everest</strong>
                <br>
                <span id="footer_text_small"
                      class="small">Республика Беларусь, г.Гомель</span>
            </p>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <p><strong>Новости</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Культура</li>
                            <li>Транспорт</li>
                            <li>Строительство</li>
                            <li>Городское хозяйство</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <p><strong>Услуги</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Аренда</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <p><strong>Афиша</strong></p>
                        <ul id="footer_list" class="list-unstyled">
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                            <li>Qwerty i am</li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr id="line">
            <span id="footer_text_small"><strong>Соглашение о пользовании информационными системами и ресурсами города Гомеля</strong></span>

        </div>


@show

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/ajax.js"></script>

    <script type="text/javascript" src="/js/my.js"></script>


</div>
</body>

</html>