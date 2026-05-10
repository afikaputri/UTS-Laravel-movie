<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Data</title>

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
                    🎬 Movie Data
                </h2>

                <a href="/movies/create" class="btn btn-success">

                    + Add Movie

                </a>

            </div>

            @if (session('success'))
                <div class="alert alert-success">

                    {{ session('success') }}

                </div>
            @endif

            <form action="/movies" method="GET">

                <div class="row mb-4">

                    <div class="col-md-4">

                        <input type="text" name="search" class="form-control" placeholder="Search movie...">

                    </div>

                    <div class="col-md-4">

                        <select name="category" class="form-control">

                            <option value="">
                                -- Filter Category --
                            </option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">

                                    {{ $category->name }}

                                </option>
                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-4">

                        <button class="btn btn-primary w-100">

                            Search & Filter

                        </button>

                    </div>

                </div>

            </form>

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Director</th>
                        <th>Year</th>
                        <th>Rating</th>
                        <th width="180">Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse ($movies as $movie)
                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $movie->category->name }}
                            </td>

                            <td>
                                {{ $movie->title }}
                            </td>

                            <td>
                                {{ $movie->director }}
                            </td>

                            <td>
                                {{ $movie->release_year }}
                            </td>

                            <td>
                                ⭐ {{ $movie->rating }}
                            </td>

                            <td>

                                <a href="/movies/{{ $movie->id }}/edit" class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form action="/movies/{{ $movie->id }}" method="POST" class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus movie ini?')">

                                        Delete

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7" class="text-center">

                                Data movie belum ada

                            </td>

                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>
