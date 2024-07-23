
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h3 class="d-flex justify-content-center border border-primary">Edit Service</h3>
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
    
</body>
</html>