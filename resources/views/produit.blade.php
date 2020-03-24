<h1> nombre de produits : {{ $nombre_de_produit }} </h1>

<ul>
    @foreach($produits as $p)
    <li>
       {{--  <a href="{{ url('produit/')."/".$p->id }}"> {{ $p->id }} </a>  {{ $p->title }}  --}}
       <a href="{{ route('detail', ['id'=> $p->id]) }}"> {{ $p->id }} </a>  {{ $p->title }}
       
    </li>
    @endforeach
</ul>