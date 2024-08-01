@extends("admin.app")
@section("main")
<div class="d-flex justify-content-end">
    <button  class="btn btn-dark" onclick="window.location.href='{{route('sevices.create')}}'">Create</button>
</div>
<div class="d-flex justify-content-center"><form class="form-group" method="POST" action="{{route('sevices.serach')}}">

    @csrf
    <input class="border border-success rounded-pill"  type="text" placeholder="Search.." name="name">
    <button class="btn btn-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
      </svg></button>
  </form></div>

@foreach($all_services as $s)

<table  class="table table-striped">
    <th class="table-secondary d-flex justify-content-start" scope="col"><button  class="btn btn-primary" onclick="window.location.href='{{route('sevices.edit',$s->id)}}'">Edit</button></th>
    <th class="d-flex justify-content-center table-active" scope="col">Name: {{$s->name}}</th>
    <th class="d-flex justify-content-center table-primary" scope="col">Descrption: {{$s->descrption}}</th>
    <th class="table-success d-flex justify-content-end" scope="col"><form action="{{route('sevices.destroy',$s->id)}}" method="post">
        @csrf
        @method('delete')

        <button class="btn btn-danger" type="submit">Delete</button>
    </form></th>
</table>
@endforeach

</h1>
@endsection
