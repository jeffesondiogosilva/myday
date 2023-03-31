

@include('components.head')
<div class="container ">
    <div class="container text-light bg-secondary">
        
        <h1>Aprendizados</h1>
    </div>

    @include('learnings.form', [
    'texto' => 'O que você aprendeu hoje?'
    ])
    <table class="table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Aprendizado</th>
                <th>Criado em:</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($aprendizados as $aprendizado)
            <tr>
                <td class="">{{ $aprendizado->getAttribute('id') }}</td>
                <td class=" bg-info text-light">{{ $aprendizado->title }}</td>
                <td class=" bg-secondary text-light">{{ date('d/m/Y H:i:s', strtotime($aprendizado->getAttribute('created_at')))  }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>



@include('components.footer')