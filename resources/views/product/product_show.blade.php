<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<script>
    $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        if(quantity<{{ $product->quantity }} )
        {
            $('#quantity').val(quantity + 1);
        }
    });

     $('.quantity-left-minus').click(function(e){
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });

});
</script>
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
                <form action="{{ route('add_item') }} " method="POST">
                    @csrf
                    <button type="submit" class="btn btn-labeled btn-success">
                        <span class="btn-label pe-3"><i class="fa-solid fa-cart-shopping"></i></span>Add to my Cart
                    </button>
                    <div class="col-md-3 pt-3">
                        <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                          <span class=""><i class="fa-solid fa-minus"></i></span>
                        </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number mx-2" value="1" min="1" max="{{ $product->quantity }}">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                            <span class=""> <i class="fa-solid fa-plus"></i></span>
                        </button>
                    </span>
                </div>
        </div>
        <input type="text" name='user_id' value="{{ Auth::user()->id }}" hidden>
        <input type="text" name='product_id' value="{{ $product->id }}" hidden>

                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
