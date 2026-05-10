<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Data</title>

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

        table th {
            background-color: #0d6efd !important;
            color: white !important;
        }
    </style>

</head>

<body>

    <div class="container py-5">

        <div class="main-card">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h2 class="title">
                    🎬 Category Data
                </h2>

                <a href="/categories/create" class="btn btn-success">
                    + Add Category
                </a>

            </div>

            @if (session('success'))
                <div class="alert alert-success">

                    {{ session('success') }}

                </div>
            @endif

            <form action="/categories" method="GET" class="mb-4">

                <div class="row">

                    <div class="col-md-9">

                        <input type="text" name="search" class="form-control" placeholder="Search category...">

                    </div>

                    <div class="col-md-3">

                        <button type="submit" class="btn btn-primary w-100">
                            Search
                        </button>

                    </div>

                </div>

            </form>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="80">No</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th width="150">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse ($categories as $category)
                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>
                                    {{ $category->name }}
                                </td>

                                <td>
                                    {{ $category->slug }}
                                </td>

                                <td>
                                    {{ $category->description }}
                                </td>

                                <td>

                                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5" class="text-center">

                                    Data category masih kosong

                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>

</html>
