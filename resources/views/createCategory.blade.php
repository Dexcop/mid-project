<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    
    <x-navbar/>
    
      <br><br><br>
    
      <div class="w-80 d-flex justify-content-center">
    
        <form action="/post-create-category" method="post">
        @csrf
    
        <div class="mb-3">
            <label for="nama" class="form-label">Category Name</label>
              <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama" value="{{ old('nama') }}">
              @error('nama')
                <p style="color: red;">The category name can't be empty.</p>
              @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Create Category</button>
      
      </form>
      </div>
      
  </body>
</html>