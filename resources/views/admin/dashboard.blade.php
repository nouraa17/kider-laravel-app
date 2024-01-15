<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')
</head>
<body class="">
  <div class="wrapper ">
  @include('admin.includes.sidebar')
    <div class="main-panel" id="main-panel">
      @include('admin.includes.nav')
      <div class="panel-header panel-header-sm">
      </div>
      @yield('pageContent')
      @include('admin.includes.footer')
    </div>
  </div>
  @include('admin.includes.js')
</body>

</html>