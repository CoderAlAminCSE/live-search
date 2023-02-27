<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST" action="{{ route('post.store') }}">
        @csrf
        <div class="mb-3">
          <label  class="form-label">title</label>
          <input type="text" class="form-control" name="title" >
        </div>

        <div class="mb-3">
          <label  class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" >
        </div>
        <div class="form-group">
            <label>Categories</label>
            <select name="categories[]" class="select2 select2-hidden-accessible" multiple=""
                data-placeholder="Select a Color" style="width: 100%;" data-select2-id="13" tabindex="-1"
                aria-hidden="true">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
