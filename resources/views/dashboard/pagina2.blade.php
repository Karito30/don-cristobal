<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>BAR DON CRISTOBAL</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard/ESTILO.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

    <div class="sidebar">
        <div class="side-header">
            <h3>ORDENES</h3>
        </div>
<div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>

                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>

                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>

                    <div class="user">
                        <div class="bg-img" style="background-image:doncritobal"></div>
                            <span class="las la-power-off"></span>
                            <small><a href="pagina" target="_parent"></a></small>



                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>
                        </form>
                    </slot>
                    </div>
                    </dropdown>
            </div>

                </div>
            </div>
        </header>
        </main>

    </div>
</body>
    </html>
