<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Blog</a>
            </div>

            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="copyright">&copy; 2016 Edo Masaru</p>
                </div>
                <div class="col-md-4">
                    <nav>
                        <ul class="social-icons">
                        @foreach($footer_icons as $footer_icon)
                            <li>
                                <a href="#" class="i fa {{ $footer_icon['icon'] }}"></a>
                            </li>
                        @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    
</body>
</html>
