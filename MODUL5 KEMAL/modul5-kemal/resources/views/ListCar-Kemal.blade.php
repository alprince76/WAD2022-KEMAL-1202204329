<!DOCTYPE html>
<html lang="en">

@include('partial.header')
<body>

    @include('partial.navbar')

<section>
    <div class="title-form">
        <h1><b>My Showroom</b></h1>
        <p>List Showroom Kemal-1202204329</p>
    </div>

    {{-- <div class="containerCard">
        @foreach($showrooms as $s)
            <li>{{ "Nama : ". $s->name . ' | Owner : ' . $s->image }}</li>
            <img src='{{"asset/$s->image"}}' alt="">
        @endforeach
    </ul>
    </div> --}}

    <div class="containerCard">
        @foreach($showrooms as $data)
            <div class='card'>
                <img src='{{"asset/$data->image"}}' alt='' class='cardimg'>
                <h1 class='cardtitle'>{{$data->name}}</h1>
                <p class='carddesc'>{{strlen($data->description) > 120 ? substr($data->description, 0, 100).'...' : $data->description}}</p>
                <div>
                    <a href='/detail/{{$data->id}}' class="btn btn-primary rounded-pill">Detail</a>
                    <a href='/delete/{{$data->id}}'class="btn btn-danger rounded-pill">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
</section>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>