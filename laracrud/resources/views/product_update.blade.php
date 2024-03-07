<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        .mydiv{
            padding:20px;
        }
    </style>
    
    <title>laravel crud</title>
</head>
<body>
    <center>
        <br><br>
        <a class="btn btn-success" href="{{url('show_product')}}">Show product</a>
        <br><br>
        <h1>Update product</h1>
        <form action="{{url('/edit_product',$product->id)}}" method="Post" enctype="multipart/form-data">

            @csrf

            <div class="mydiv">
                <label>Product Title</label>
                <input type="text" name="title" value="{{$product->title}}">
            </div>
            <div class="mydiv">
                <label>Product Description</label>
                <textarea name="description">{{$product->description}}</textarea>
            </div>
             <div class="mydiv">
                <label>Current Image</label>
                <img height="100" width="auto" src="/product/{{$product->image}}"></img>
            </div>
            <div class="mydiv">
                <label>Change Image</label>
                <input type="file" name="image">
            </div>
            <div class="mydiv">
                <input class="btn btn-primary" type="submit" value="Edit product">
            </div>
        </form>
    </center>   

</body>
</html>
