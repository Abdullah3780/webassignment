<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Add Product</title>
    <!-- <style>
    body {
        text-align: center;
    }
    </style> -->
</head>

<body>
    <form method="post" action="insertproductodatabase.php">
        <div class="col-4 ">
            <label for="productname" class="form-label">Product Name</label>
            <input type="text" class="form-control center" id="productname" name="pname" />

        </div>
        <div class="col-4 ">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="pprice" />
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Add Product</button>
    </form>

</body>

</html>