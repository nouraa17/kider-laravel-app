<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <div class="container-xxl bg-white p-0">
    @include('includes.spinner')
    @include('includes.navbar')
    @include('includes.generalHeader')
    @yield('content')
    @include('includes.footer')
    @include('includes.backToTop')
    </div>
    @include('includes.js')
    @include('includes.templateJs')
</body>

</html>