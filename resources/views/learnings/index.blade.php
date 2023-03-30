@include('components.head')
<div class="container">
    <h1>Aprendizados</h1>

    @include('learnings.form', [
    'texto' => 'O que você aprendeu hoje?'
    ])

    <ul class="form-group">
        @foreach ($aprendizados as $aprendizado)
        <li class="list-group-item">{{ $aprendizado->getAttribute('id') }}</li>
        <li class="list-group-item bg-success text-light">{{ $aprendizado->title }}</li>
        @endforeach
    </ul>
</div>



@include('components.footer')



    
