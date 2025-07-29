<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="m-5">
    <h1 class="text-success w-75 m-auto">
    Create New Student
</h1>
</div>

<form method="POST" action="{{ route('students.store') }}" class="w-75 m-auto border p-2">
  @csrf
    {{-- Student Name --}}
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Student Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputName" >
  </div>
  {{-- Student Address --}}
    <div class="mb-3">
    <label for="exampleInputAddress" class="form-label">Student Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputAddress" >
  </div>
    {{-- Student Image --}}

    <div class="mb-3">
    <label for="exampleInputImage" class="form-label">Student Image</label>
    <input name="image" type="text" class="form-control" id="exampleInputImage" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
