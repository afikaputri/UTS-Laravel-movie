<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f1f5f9;
        }

        .main-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .title {
            color: #0d6efd;
            font-weight: bold;
        }
    </style>

</head>

<body>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="main-card">

                    <h2 class="title mb-4">
                        ✏️ Edit Category
                    </h2>

                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="/categories/{{ $category->id }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label">
                                Name
                            </label>

                            <input type="text" name="name" class="form-control" value="{{ $category->name }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Slug
                            </label>

                            <input type="text" name="slug" class="form-control" value="{{ $category->slug }}">

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea name="description" rows="4" class="form-control">{{ $category->description }}</textarea>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="/categories" class="btn btn-secondary">
                                Back
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Update Category
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
