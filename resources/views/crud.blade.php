<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Creating new service</h3>
        <form action="/crud/create" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="name" id="" placeholder="Service Name" require>
            <br>
            <textarea name="description" id="" placeholder="Service Description" require></textarea>
            <br>
            <input type="file" name="image" id="" require>
            <input type="submit" value="Create">
        </form>
    </div>

    <div>
        <h3>Updating service</h3>
        <form action="/crud/update" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="number" name="id" id="" placeholder="Service ID here" require>
            <input type="text" name="name" id="" placeholder="Service Name" require>
            <br>
            <textarea name="description" id="" placeholder="Service Description" require></textarea>
            <br>
            <input type="file" name="image" id="" require>
            <input type="submit" value="Update">
        </form>
    </div>

    <div>
        <h3>Delete service</h3>
        <form action="/crud/delete" method="POST">
            @csrf
            <input type="number" name="id" id="" placeholder="Service ID here" require>
            <br>
            <input type="submit" value="Delete">
        </form>
    </div>
</body>

</html>