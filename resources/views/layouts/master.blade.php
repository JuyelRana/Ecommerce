<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Laravel Ecommerce Project</title>

        @include('partials.styles')
        
    </head>
    <body>

        <div class="wrapper">
            <!--Navigation-->

            <!--Include navigation bar-->
            @include('partials.nav')

            <!--create a content field here-->
            @yield('content')  


           <!--Include Fotter-->
           @include('partials.footer')
            
            
        </div>
        
        <!--Include scripts-->  
        @include('partials.scripts')

    </body>
</html>
