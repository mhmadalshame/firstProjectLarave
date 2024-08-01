@extends("admin.app")
@section("main")
<h3 class="d-flex justify-content-center border border-primary">Add Decision</h3>
<br>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="d-flex justify-content-center">

    <form class="form-group" action="{{route('decision.store')}}" method="post">
        @csrf

        <label for="nm">Title</label>
<input class="form-control" type="text" id="nm" name="title"  ><br><br>

<label for="desc">Content</label>
<input class="form-control" type="text" id="desc" name="content"><br><br>
<label for="type">Type</label><br>

<select name="decision_type_id" id="type">
    @foreach ($all_decisions as $des )
    <option value="{{$des->id}}">{{$des->name}}</option>
    @endforeach


</select>
<br><br>
<button class="btn btn-primary" type="submit">Save</button>


    </form>
</div>
@endsection

