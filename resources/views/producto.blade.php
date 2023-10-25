<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
        
        <div class="row justify-content-center">  
        <div class="col-12 col-sm-6 col-md-4" >
            <h3 >{{$producto->nombre}}</h3>
            <img src="{{$producto->imagen}}" alt="foto de {{$producto->nombre}}">
        </div>
        <div class="col-12 col-sm-6 col-md-4">
            <br><br>
            <h6>{{$producto->tipo->tipo}}</h6>
            <h6>{{$producto->marca->marca}}</h6>
            <span>${{$producto->precio}}</span>
            <p>{{$producto->descripcion}}</p>
            <button class="btn btn-primary" style="margin:50px"> Agregar al carrito</button>
        </div>
    </div>
    
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>