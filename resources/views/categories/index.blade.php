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
            font-weight: bold;
            color: #0d6efd;
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .table {
            border-radius: 10px;
            overflow: hidden;
        }

        .search-input {
            border-radius: 10px;
        }

        .btn-search {
            border-radius: 10px;
            font-weight: 500;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
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

                <span class="badge bg-primary p-2">
                    Total: {{ $categories->total() }}
                </span>

            </div>

            <form action="/categories" method="GET" class="mb-4">

                <div class="row g-2">

                    <div class="col-md-10">
                        <input type="text" name="search" class="form-control search-input"
                            placeholder="Search category..." value="{{ request('search') }}">
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-search w-100">
                            Search
                        </button>
                    </div>

                </div>

            </form>

            <div class="table-responsive">

                <table class="table table-hover table-bordered align-middle">

                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->description }}</td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="text-center text-muted">
                                    Data not found
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-4 d-flex justify-content-between">

                @if ($categories->onFirstPage())
                    <button class="btn btn-secondary" disabled>
                        Previous
                    </button>
                @else
                    <a href="{{ $categories->previousPageUrl() }}" class="btn btn-primary">
                        Previous
                    </a>
                @endif

                @if ($categories->hasMorePages())
                    <a href="{{ $categories->nextPageUrl() }}" class="btn btn-primary">
                        Next
                    </a>
                @else
                    <button class="btn btn-secondary" disabled>
                        Next
                    </button>
                @endif

            </div>

        </div>

    </div>

</body>

</html>
