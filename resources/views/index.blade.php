<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Books inventory</title>

        @yield('page_css')
        @include('layouts.styling')
        
    </head>

    <body>
        @include('layouts.navbar')
            <section>
                <div class="mainwrapper">

                @include('layouts.sidebar')
                    
                    <div class="mainpanel">
                    @yield('main_content')
                      

                    </div><!-- mainpanel -->
                </div><!-- mainwrapper -->
            </section>

        @include('layouts.javascript')
        @yield('page_js')

    </body>
</html>