<form action="{{ route('learnings-store') }}" method="post" class="d-flex p-1 m-3 col-6 mx-auto" >
@csrf 
<label class="col-sm-5 " for="">{{$texto}}</label>
    <input class="form-control col-sm-6 ml-2 " type="text" name="title" value="@isset($value) {{$value}} @endisset">
    <input type="submit" class="btn btn-primary p-1 mb-4 ml-2" name="submit" value="Enviar" >
</form>
