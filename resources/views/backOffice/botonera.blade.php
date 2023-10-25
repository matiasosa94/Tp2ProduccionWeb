<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
        <h1>Bienvenido al Back Office </h1>

        <div class="container">
           <a href="/backOffice/marca"><button class="btn btn-primary"> Ver marcas</button></a>
           <a href="/backOffice/tipo"><button class="btn btn-primary"> Ver tipos</button></a>
           <a href="/backOffice/bebida"><button class="btn btn-primary"> Ver bebidas</button></a> 
        </div>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>