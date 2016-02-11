<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VVV<?=$title ? ' &ndash; '.$title : ''?></title>
    
    <link rel="stylesheet" type="text/css" href="<?=$path?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=$path?>/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=$path?>/css/common.css?000" />
    
    <link href="<?=$path?>/img/favicon.ico" type="image/x-icon" rel="icon" />
    <link href="<?=$path?>/img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    
    <script type="text/javascript" src="<?=$path?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=$path?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$path?>/js/common.js?000"></script>
    
    <script type="text/javascript" src="//loginza.ru/js/widget.js"></script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?115"></script>
</head>
<body>
    <div class="container">
        <nav class="b-navtop">
            <div class="row">
                <div class="col-sm-8 hidden-xs">
                    <a class="btn btn-default b-navtop__button" href="/">Main</a>
                    <a class="btn btn-default b-navtop__button" href="#">ES5</a>
                    <a class="btn btn-default b-navtop__button" href="#">ES6</a>
                    <a class="btn btn-default b-navtop__button" href="#">FW</a>
                    <a class="btn btn-default b-navtop__button" href="#">About</a>
                    <a class="btn btn-default b-navtop__button" href="#">Sign In</a>
                </div>
                <div class="col-sm-4">
                    <div class="pull-left dropdown visible-xs">
                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></a>
                        <ul class="dropdown-menu">
                            <li class="active" role="presentation"><a href="/">Все разделы</a></li>
                            <li role="presentation"><a href="/chapter/pictures">Картинки</a></li>
                            <li role="presentation"><a href="/chapter/girls">Девушки</a></li>
                            <li role="presentation"><a href="/chapter/comics">Комиксы</a></li>
                            <li role="presentation"><a href="/chapter/gifs">Гифки</a></li>
                            <li role="presentation"><a href="/chapter/video">Видео</a></li>
                            <li role="presentation"><a href="/chapter/coubs">Coubs</a></li>
                            <li role="presentation"><a href="/chapter/anime">Аниме</a></li>
                            <li class="divider" role="separator"></li>
                            <li role="presentation"><a href="/home">Личный кабинет</a></li>
                            <li role="presentation"><a href="/logout">Выйти</a></li>
                        </ul>
                    </div>
                    <form class="form-inline b-headerform">
                        <div class="input-group">
                            <input type="text" placeholder="поиск" id="search_query" class="form-control"> 
                            <span class="input-group-addon btn b-search__btn" id="search_btn">найти</span>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <header class="jumbotron">
            <h1>Jumbotron heading</h1>
            <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
        </header>
        <div class="row b-center">
            <main class="col-sm-9">
                <h2>Main content</h2>
            </main>
            <aside class="col-sm-3">
                Aside
            </aside>
        </div>
    </div>
    <footer class="b-footer">
        <div class="container">
            2016 &copy; VVV
        </div>
    </footer>
</body>
</html>