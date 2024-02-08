<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <x-navbar/>
    
      <br><br><br>
    
      <div class="w-80 d-flex justify-content-center">
    
        <form action="/post-create-staff" method="post" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3">
            <label for="nama" class="form-label">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{old('nama')}}">
            @error('nama')
              <p style="color: red;">Invalid name</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="umur" class="form-label">Age</label>
            <input type="number" class="form-control" id="umur" name="umur" value="{{old('umur')}}">
            @error('umur')
              <p style="color: red;">Invalid age</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="alamat" class="form-label">Address</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat')}}">
            @error('alamat')
              <p style="color: red;">Invalid address</p>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="nomor" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="nomor" name="nomor" value="{{old('nomor')}}">
            @error('nomor')
              <p style="color: red;">Invalid Phone Number/Start with "08"</p>
            @enderror
        </div>
    
        <div class="mb-3">
          <label for="image" class="form-label">Self Photo</label>
          <input type="file" class="form-control" id="image" name="image">
          @error('image')
              <p style="color: red;">Image can't be empty</p>
            @enderror
      </div>
    
      <div class="mb-3">
        <label for="image" class="form-label">Category Name</label>
        <select class="form-select" aria-label="Default select example" name="CategoryId">
            <option selected style="display: none;"></option>
            @foreach ($categories as $c)
                <option value="{{ $c->CategoryId }}">{{ $c->nama }}</option>
            @endforeach
        </select>
        @error('CategoryId')
            <p style="color: red;">Please select a category</p>
        @enderror
    
      </div>
        <button type="submit" class="btn btn-primary">Create</button>
    
      </form>
    </div>
  </body>
</html>