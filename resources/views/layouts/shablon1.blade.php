<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>РАПОРТ СТАРШИХ ЛІКАРІВ</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="simple, grid, theme, free templates, web design, one page layout, slategray, steelblue, templatemo, CSS, HTML" />
    <meta name="description" content="Simple Grid is a one-page website template provided by templatemo.com" />

    <link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" />

    <script type='text/javascript' src='{{ asset('js/jquery.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.scrollTo-min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery.localscroll-min.js') }}'></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.localScroll();
        });

        window.onload=function(){
            var leng=document.getElementsByClassName('two').length;

            document.getElementById('extr').setAttribute("name", 'value'+(leng+1));
            document.getElementById('noext').setAttribute("name", 'value'+(leng+2));
        }
    </script> 

    <script type="text/javascript">
        function oninput2()
        {
            var mass0 = [];
            var mass1 = [];
            var first = 0;
            var two = 0;
            for (var i = 34; i <= 51; i++) {
                var example = document.getElementById('value'+i).value.split('+');
                
                if (example[0]!=='') {
                    first = example[0];
                }
                
                if (example[1]!=='') {
                    two = example[1];
                }

                mass0[mass0.length] = first;
                mass1[mass1.length] = two;
            }
            
            var sum0 = 0;
            var sum1 = 0;

            for(var i = 0; i < mass0.length; i++){
                sum0 += parseInt(mass0[i]);
                sum1 += parseInt(mass1[i]);
            }

            document.getElementById('pmcd0').innerHTML = sum0;
            document.getElementById('pmcd1').innerHTML = sum1;
        }

        function AddLine()
        {
            var table = document.getElementById("twoTable"); 
            var row = table.insertRow(table.rows.length); // Добавляем строку
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
            var cell6 = row.insertCell(5);
            var cell7 = row.insertCell(6);
            var cell8 = row.insertCell(7);
            var cell9 = row.insertCell(8);

             // Формируем строку элементов управления
            var index = (table.rows.length-2);

            var text1 = document.createElement("p"); // Ввод text1
            text1.innerHTML= index+1;
            cell1.appendChild(text1);

            var text2 = document.createElement("input"); // Ввод text2
            text2.setAttribute("type", "text");
            text2.setAttribute("name", 'punkt'+index);
            cell2.appendChild(text2);

            var text3 = document.createElement("input"); // Ввод text3
            text3.setAttribute("type", "text");
            text3.setAttribute("name", 'no_card'+index);
            cell3.appendChild(text3);

            var text4 = document.createElement("input"); // Ввод text4
            text4.setAttribute("type", "text");
            text4.setAttribute("name", 'adress'+index);
            cell4.appendChild(text4);

            var text5 = document.createElement("input"); // Ввод text5
            text5.setAttribute("type", "text");
            text5.setAttribute("name", 'brig'+index);
            cell5.appendChild(text5);

            var text6 = document.createElement("input"); // Ввод text6
            text6.setAttribute("type", "text");
            text6.setAttribute("name", 'time'+index);
            cell6.appendChild(text6);

            var text7 = document.createElement("input"); // Ввод text7
            text7.setAttribute("type", "text");
            text7.setAttribute("name", 'support'+index);
            cell7.appendChild(text7);

            var text8 = document.createElement("input"); // Ввод text8
            text8.setAttribute("type", "text");
            text8.setAttribute("name", 'cause'+index);
            cell8.appendChild(text8);

            var text9 = document.createElement("input"); // Ввод text9
            text9.setAttribute("type", "text");
            text9.setAttribute("name", 'call'+index);
            cell9.appendChild(text9);

        }

    </script>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{action('ReportController@create1')}}">Create</a>
                        </li>
                        <li>
                           <a href="{{action('GroupController@index')}}">Всі групи</a>
                        </li>                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
