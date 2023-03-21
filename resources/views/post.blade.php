<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Post</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <button><a href="/videos">Ke Video</a></button>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Content</th>
                    <th>Detail Post</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item )
                {{-- @dd($item->name); --}}
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->post_body }}</td>
                    <td>{{ $item->image ? $item->image->filename : " " }}</td>
                    <td><a href="/post-detail/{{ $item->id }}">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>