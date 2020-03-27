<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/css/mdb.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <!-- Default form subscription -->
<form class="text-center border border-light p-5" action="{{ route('update_produit') }}" method="post">

    @csrf 
    @method('PUT')

    <p class="h4 mb-4">Subscribe</p>

    <p>Join our mailing list. We write rarely, but only the best content.</p>

    <p>
        <a href="" target="_blank">See the last newsletter</a>
    </p>
    <input type="hidden" value="{{ $produit[0]->id}}" name="id_produit">

    <!-- Title -->
    <input type="text"  class="form-control mb-4" placeholder="title" name="title" value="{{ $produit[0]->title}} ">

    <!-- Price -->
    <input type="number"  class="form-control mb-4" placeholder="price" name="price" value="{{ $produit[0]->price }}">
    
    <input type="text" class="form-control mb-4" placeholder="description" name="description" value="{{ $produit[0]->description }}"> 
    
    {{-- <select name="categorie" class="form-control">
        @for($i=0 ; $i<count($categories); $i++)
        <option value="{{$categories[$i]->id}}"> {{ $categories[$i]->nom }}  </option>
        @endfor
    </select> --}}
    
      <select name="categorie" class="form-control">
        @foreach($categories as $c)
        <option value="{{$c->id}}"> {{ $c->nom }}  </option>
        @endforeach
    </select>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block mt-3" type="submit" name="send">Send</button>


</form>
<!-- Default form subscription -->
    
</body>
</html>