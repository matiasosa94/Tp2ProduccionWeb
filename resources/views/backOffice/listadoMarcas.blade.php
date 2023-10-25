<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    @include('partials.header')
    <main class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <td>id</td>
                <td>marca</td>
                </tr>
            </thead>
            @forelse ($marcas as $marca)
            
            <tbody>
                <tr>
                    
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->marca}}</td>
                    @empty
                        <td class="text-center">Aun no se cargaron marcas a la bd</td>
                    @endforelse
                    
                </tr>
            </tbody>
        </table>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>