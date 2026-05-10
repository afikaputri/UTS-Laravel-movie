<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Movie</title>

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

        <div class="col-md-8 mx-auto">

            <div class="main-card">

                <h2 class="title mb-4">
                    🎬 Detail Movie
                </h2>

                <table class="table table-bordered">

                    <tr>
                        <th width="200">Category</th>
                        <td>{{ $movie->category->name }}</td>
                    </tr>

                    <tr>
                        <th>Title</th>
                        <td>{{ $movie->title }}</td>
                    </tr>

                    <tr>
                        <th>Director</th>
                        <td>{{ $movie->director }}</td>
                    </tr>

                    <tr>
                        <th>Release Year</th>
                        <td>{{ $movie->release_year }}</td>
                    </tr>

                    <tr>
                        <th>Rating</th>
                        <td>⭐ {{ $movie->rating }}</td>
                    </tr>

                    <tr>
                        <th>Synopsis</th>
                        <td>{{ $movie->synopsis }}</td>
                    </tr>

                </table>

                <a href="/movies" class="btn btn-secondary">

                    Back

                </a>

            </div>

        </div>

    </div>

</body>

</html>
