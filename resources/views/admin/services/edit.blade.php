
@extends("admin.app")
@section("main")
<h3 class="d-flex justify-content-center border border-primary">Edit Service</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br>    <div class="d-flex justify-content-center">

        <form class="form-group" action="{{route('sevices.update',$service->id)}}" method="post">
            @csrf
            @method("PUT")



    <label for="nm">Name</label>
    <input class="form-control" type="text" id="nm" name="name"  value="{{$service->name}}"><br><br>
    <label for="desc">Description</label>
    <input class="form-control" type="text" id="desc" name="des" value="{{$service->descrption}}"><br><br>
    <button class="btn btn-primary" type="submit">Save</button>



        </form>
    </div>
@endsection

