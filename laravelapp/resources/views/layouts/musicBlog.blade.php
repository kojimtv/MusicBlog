<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/common/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common/common.css') }}">
</head>
<body>
    {{-- 下記componentかincludeどっちかで呼び出し --}}
    {{-- @component('components.common.side')
    @endcomponent --}}
    <div class="wrap">
        {{-- <header>Music Blog</header> --}}

        <div class="side_navi">
            @include('components.common.side')
        </div>

        <div class="contents">
            @yield('title')

            <div>
                <p>@show</p>
            </div>

            <div>
                @yield('content')
            </div>
        </div>


        {{-- <footer>フッター</footer> --}}

    </div>


</body>
</html>