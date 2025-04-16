<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Table Data</title>

</head>

<body>

    <h2>List Game</h2>

    <a href="/controller/create" class="btn btn-primary mb-2">Tambah</a>

    <table class="table">

        <thead class="thead-light">

            <tr>

                <th scope="col">#</th>

                <th scope="col">Name</th>

                <th scope="col">Gameplay</th>

                <th scope="col">Developer</th>

                <th scope="col">Year</th>

                <th scope="col">Actions</th>

            </tr>

        </thead>

        <tbody>

            @forelse ($game as $item)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->gameplay}}</td>
                <td>{{$item->developer}}</td>
                <td>{{$item->year}}</td>
                <td>
                    <!-- <a href="/controller/{{$item->id}}" class="btn btn-info btn-sm">Edit</a> -->
                    <a href="/controller/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <!-- <a href="/controller/{{$item->id}}" class="btn btn-info btn-sm">Delete</a> -->
                </td>
            </tr>
            @empty
            <tr>
                <td>No Data</td>
            </tr>
            @endforelse


        </tbody>

    </table>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>