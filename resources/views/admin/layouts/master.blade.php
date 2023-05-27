@include('admin.partials._header')

<div class="container-fluid">
    <div class="row">

        @include('admin.partials._sidebar')

        @yield('content')

    </div>
</div>

@include('admin.partials._footer')
