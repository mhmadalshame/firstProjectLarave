
@extends("admin.app")
@section("main")
<h3 class="d-flex justify-content-center border border-primary">Add Service</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<br>


<div class="d-flex justify-content-center">

    <form class="form-group" action="{{route('sevices.store')}}" method="post">
        @csrf

        <label for="nm">Name</label>
<input class="form-control" type="text" id="nm" name="name"><br><br>
<label for="desc">Description</label>
<input class="form-control" type="text" id="desc" name="des"><br><br>
<button class="btn btn-primary" type="submit">Save</button>


    </form>
</div>

@endsection

