{{-- Navigation --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        {{-- Brand and toggle get grouped for better mobile display --}}
        <a class="navbar-brand" href="/">{{ config('blog.name') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        {{-- Collect the nav links, forms, and other content for toggling --}}
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/blog">首页</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <!-- Search Box -->
                <form class="form-inline my-2 my-lg-0 search" role="search" method="get" action="{{ url('search') }}">
                  <input class="form-control mr-sm-2" type="search" name="q" placeholder="{{ 'Search' }}" required>
                </form>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="/contact">联系我们</a> -->
                </li>

                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">登录</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('register') }}">注册</a></li>
                @else
                    <li class="nav-item notification">
                        <a class="nav-link" href="{{ url('notification') }}"><i class="fas fa-bell">
                            <span class="new"

                            >
                            </span>
                        </i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->nickname ?: Auth::user()->name }}
                            <b class="caret"></b>&nbsp;&nbsp;
                            <img class="avatar rounded-circle" src="{{ Auth::user()->avatar }}">
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-item"><a href="{{ url('admin') }}"><i class="fas fa-sandwitch"></i>文章管理</a></li>
                            <li class="dropdown-item"><a href="{{ url('setting') }}"><i class="fas fa-cog"></i>个人设置</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i>退出</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>