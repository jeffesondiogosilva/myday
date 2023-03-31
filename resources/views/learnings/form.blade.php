<form action="{{ route('learnings-store') }}" method="post" class="d-flex p-1 m-3 col-6 mx-auto" >
@csrf 
<label for="">{{$texto}}</label>
    <input class="form-control col-sm-4 ml-2" type="text" name="title" value="">
    <input type="submit" class="btn btn-primary" name="submit" value="Enviar" >
</form>
