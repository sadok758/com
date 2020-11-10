<!DOCTYPE html>
<html lang="en">
    @include('head')
<body>
    <header>
        @include('header')
    </header>
    <main>
        @yield('contenu')
    </main>
        @include('footer')

    
</body>
</html>