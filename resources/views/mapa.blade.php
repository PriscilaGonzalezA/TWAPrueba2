<html>
<head>
    <H1> Estas ubicado en la direccion: {{ $direccion }}</H1>
    <H1> Estas Otras direcciones visitaste:</H1>
    @forelse($direcciones as $dir)
        <li>{{$dir}}</li>
    @empty
        <p>{{'Direcciones'}}</p>
    @endforelse

    @if(count($direcciones)===1)
        <li>Visitaste una direccion</li>
    @elseif(count($direccion)>1)
        <li>Visitaste muchas direcciones</li>
    @else
        <li>No visitaste direcciones</li>
    @endif
    <a href="<?php echo route('home') ?>">Volver</a>
</body>
</head>
</html>
