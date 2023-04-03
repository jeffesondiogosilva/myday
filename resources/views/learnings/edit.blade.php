@include('components.head')


@include('components.header', [
    'titulo' => 'Editar Aprendizado'
    ])



@include('learnings.form-edit', [
    'texto' => 'O que você aprendeu hoje?',           
    'value' => $learning->title
    ])
    
    