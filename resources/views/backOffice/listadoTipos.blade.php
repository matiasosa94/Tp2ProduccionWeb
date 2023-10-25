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
                <td>tipo</td>
                </tr>
            </thead>
            @forelse ($tipos as $tipo)
            
            <tbody>
                <tr>
                    
                    <td>{{$tipo->id}}</td>
                    <td>{{$tipo->tipo}}</td>
                    @empty
                        <td class="text-center">Aun no se cargaron tipos de bebida a la bd</td>
                    @endforelse
                    
                </tr>
            </tbody>
        </table>
    </main>
    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>