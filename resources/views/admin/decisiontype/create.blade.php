@extends("admin.app")
@section("main")
<h3 class="d-flex justify-content-center border border-primary">Add DecisionType</h3>
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

    <form class="form-group" action="{{route('decisiontype.store')}}" method="post">
        @csrf

        <label for="nm">Name</label>
<input class="form-control" type="text" id="nm" name="name"><br><br>

<button class="btn btn-primary" type="submit">Save</button>


    </form>
</div>
@endsection

