<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Movie</title>

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
                        🎬 Add Movie
                    </h2>

                    <form action="/movies" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label>
                                Category
                            </label>

                            <select name="category_id" class="form-control">

                                <option value="">
                                    -- Choose Category --
                                </option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">

                                        {{ $category->name }}

                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-3">

                            <label>
                                Movie Title
                            </label>

                            <input type="text" name="title" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>
                                Director
                            </label>

                            <input type="text" name="director" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>
                                Release Year
                            </label>

                            <input type="number" name="release_year" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>
                                Rating
                            </label>

                            <input type="number" name="rating" class="form-control">

                        </div>

                        <div class="mb-3">

                            <label>
                                Synopsis
                            </label>

                            <textarea name="synopsis" rows="4" class="form-control"></textarea>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="/movies" class="btn btn-secondary">
                                Back
                            </a>

                            <button type="submit" class="btn btn-primary">

                                Save Movie

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
