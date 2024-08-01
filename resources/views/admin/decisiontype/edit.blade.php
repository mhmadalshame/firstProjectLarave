@extends("admin.app")
@section("main")
<h3 class="d-flex justify-content-center border border-primary">Edit DecisionType</h3>
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

    <form class="form-group" action="{{route('decisiontype.update',$decision->id)}}" method="post">
        @csrf
        @method("PUT")



<label for="nm">Name</label>
<input class="form-control" type="text" id="nm" name="name"  value="{{$decision->name}}"><br><br>

<button class="btn btn-primary" type="submit">Save</button>



    </form>
</div>
@endsection

