<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
  <x-navbar/>
  
  <br><br><br>
  
  <div style="margin-left: 40px" class="d-flex">
    @forelse($staffs as $x)
  
    <div class="card" style="width: 18rem; margin:10px;">
      <h3>{{$x->nama}}</h3>
      <h3>{{$x->umur}}</h3>
      <h3>{{$x->alamat}}</h3>
      <h3>{{$x->nomor}}</h3>
  
      <img src="{{asset('storage/'.$x->image)}}" alt="Image">
  
      <div style="display:flex; justify-content: space-around; margin: 20px">
        <a href="/edit-staff/{{$x->id}}"><button class="btn btn-primary">Edit</button></a>
        <form action="/delete-staff/{{$x->id}}" method="post">
          @csrf
          @method('delete')
          <button class="btn btn-danger">Delete</button>
        </form>
  
      </div>
  
    </div>
  
    @empty
      <p>Data is empty</p>    
    @endforelse
  
  </div>
  <br><br>
  <div style="margin-left: 50px" class="d-flex justify-content-center">
    {{$staffs->onEachSide(1)->links()}}
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>