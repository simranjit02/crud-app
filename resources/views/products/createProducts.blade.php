<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud-app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg bg-body-tertiary  bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD APP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- __________________ -->

  <div class="container mt-5  card bg-[#555] w-50 p-3">
    <h3 class="text-center bg-dark text-white rounded py-2">Create Products</h3>

    <div class="">
      <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label is-invalid">Name</label>
          <input type="text" name="productName" value="{{ old('productName') }}" class="form-control @error('productName') is-invalid @enderror"  id="exampleFormControlInput1" placeholder="Name">
          @error('productName')
          <p class="invalid-feedback ">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Sku</label>
          <input type="text" name="productSku" value="{{ old('productSku') }}" class="form-control @error('productSku') is-invalid @enderror"   id="exampleFormControlInput2" placeholder="Sku">
          @error('productSku')
          <p class="invalid-feedback ">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Price</label>
          <input type="number" name="productPrice" value="{{ old('productPrice') }}" class="form-control @error('productPrice') is-invalid @enderror"   id="exampleFormControlInput3"
            placeholder="Price">
            @error('productPrice')
          <p class="invalid-feedback ">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Description</label>
          <textarea type="text" name="productDescription" class="form-control" id="exampleFormControlInput4"
            placeholder="Description" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Image</label>
          <input type="file" name="productImg" class="form-control" id="exampleFormControlInput5" placeholder="Image">
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-primary bg-dark" type="submit">ADD</button>
        </div>
        </form>
    </div>
  </div>

</body>

</html>