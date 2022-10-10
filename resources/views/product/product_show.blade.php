<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 px-0">
            <img src="{{ $product->getFirstMediaUrl() }}" height="100%" class="img-fluid">
        </div>
        <div class="col-md-6 pt-5 px-5">
            <div class="h2 pt-5">
                {{ $product->name }}
            </div>
            <div class="text-danger h3">
                {{ $product->price }}$
            </div>
            <div class="pt-3">
                <form action="">
                    <button type="submit" class="btn btn-labeled btn-success">
                        <span class="btn-label pe-3"><i class="fa-solid fa-cart-shopping"></i></span>Add to my Cart
                    </button>
                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
