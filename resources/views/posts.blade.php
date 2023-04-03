<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Ajax CRUD</title>
        <style>
            body {
                background-color: lightgrey;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Laravel CRUD Ajax</h4>
                    <div class="card border-0 shadow-sm rounded-md mt-4">
                        <div class="card-body">
                            <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-post">Tambah Data Post</a>

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>content</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts">
                                    @foreach($posts as $post)
                                    <tr id="index_{{ $post->id }}">
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->content }}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $post->id }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $post->id }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>