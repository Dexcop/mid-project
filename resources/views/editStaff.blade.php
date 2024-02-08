<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>

    <x-navbar/>

    <br><br><br>

    <div class="w-80 d-flex justify-content-center">
    
    <form action="/update-staff/{{$staffs->id}}" method="post" enctype="multipart/form-data">
    
    @csrf
    @method('patch')
    
    <div class="mb-3">
        <label for="nama" class="form-label">Staff Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$staffs->nama}}">
        @error('nama')
          <p style="color: red;">Invalid Name</p>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="umur" class="form-label">Staff Age</label>
        <input type="number" class="form-control" id="umur" name="umur" value="{{$staffs->umur}}">
        @error('umur')
          <p style="color: red;">Invalid Age</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Staff Address</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$staffs->alamat}}">
        @error('alamat')
          <p style="color: red;">Invalid Address</p>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="nomor" class="form-label">Staff Phone Number</label>
        <input type="number" class="form-control" id="nomor" name="nomor" value="{{$staffs->nomor}}">
        @error('nomor')
          <p style="color: red;">Invalid Phone Number/Start with "08"</p>
        @enderror
    </div>
    
    <div class="mb-3">
      <label for="image" class="form-label">Self Photo</label>
      <input type="file" class="form-control" id="image" name="image" value="{{$staffs->image}}">
      @error('image')
          <p style="color: red;">Invalid Image</p>
        @enderror
    </div>
        
    <button type="submit" class="btn btn-primary">Confirm change</button>
    </form>
    </div>
      
    </body>
</html>