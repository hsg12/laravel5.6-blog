@include('layouts/header')
@include('layouts/nav')
@include('layouts/top')
@include('layouts/flash')

<div class="container">

    <div class="row">

        <div class="col-sm-8 blog-main">

            @yield('content')

        </div><!-- /.blog-main -->

        @include('layouts.sidebar')

    </div><!-- /.row -->

</div><!-- /.container -->
<br>
<br>
<br>
@include('layouts/footer')