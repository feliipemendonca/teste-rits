<!DOCTYPE html>
<html lang="en">
    @include('layouts.blocks.head')
    
    <body>

        @include('layouts.blocks.header')
            @yield('content')
        @include('layouts.blocks.footer')
        @include('layouts.blocks.scripts')
        
    </body>
</html>