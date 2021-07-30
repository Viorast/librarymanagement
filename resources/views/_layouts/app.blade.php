<!DOCTYPE html>
<html lang="en">
<head>

    {{-- header --}}
@include('_includes.header')

</head>
<body id="top-page">

    {{-- wrapper --}}
    <div id="wrapper">

        {{-- main content --}}
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container-fluid"> 
                {{-- page heading --}}
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                </div>

                  @yield('content')
            </div>
        </div>
    </div>

    {{-- footer  --}}
@include('_includes.footer')    
</body>
</html>