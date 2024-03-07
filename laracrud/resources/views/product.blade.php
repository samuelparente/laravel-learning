<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    
    
    <title>laravel crud</title>
</head>
<body>

    <h1>Show all products</h1>

        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            @foreach ($data as $data)

                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</th>
                    <td><img height="200" width="auto" src="product/{{$data->image}}"></img></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" href="{{url('delete_product',$data->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('update_product',$data->id)}}">Update</a></td>

                </tr>

            @endforeach

        </table>

       
</body>
</html>
