<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Category</title>

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
                        🎬 Detail Category
                    </h2>

                    <table class="table table-bordered">

                        <tr>
                            <th width="200">Name</th>
                            <td>{{ $category->name }}</td>
                        </tr>

                        <tr>
                            <th>Slug</th>
                            <td>{{ $category->slug }}</td>
                        </tr>

                        <tr>
                            <th>Description</th>
                            <td>{{ $category->description }}</td>
                        </tr>

                    </table>

                    <a href="/categories" class="btn btn-secondary">
                        Back
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
