<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>


<body>

<form action="/admin/apartment/list" method="GET" class="form-inline" name="apartment-form">

        <label>Choose a apartment: </label>
            <option value="0">All</option>
            @foreach($apartments as $apartment)
        <option value="{{$apartment->id}}"></option>
        <option value="{{$apartment->name}}"></option>
    @endforeach

</form>
<table class="table table-striped">
    <thead>
    <tr class="row">

        <th class="col-md-1">iD</th>
        <th class="col-md-2">NAME</th>
        <th class="col-md-2">DESCRIPTION</th>
        <th class="col-md-2">DETAILS</th>
        <th class="col-md-2">IMAGE</th>
        <th class="col-md-2">PRICE</th>
        <th class="col-md-2">STATUS</th>

    </tr>
    </thead>
    <tbody>
    @foreach($apartment_views as $item)
    <tr>
            <td class="col-md-1">{{$item->id}}</td>
            <td class="col-md-2">{{$item->name}}</td>
            <td class="col-md-2">{{$item->description}}</td>
            <td class="col-md-2">{{$item->details}}</td>
            <td class="col-md-2">{{$item->image}}</td>
            <td class="col-md-1">{{$item->price}}</td>
            <td class="col-md-2">{{$item->status}}</td>

        </tr>
    @endforeach
    </tbody>
</table>



<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>

</html>
