<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <script src="https://kit.fontawesome.com/6ff9a684f2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>To-do List</h3>
                <form action="{{  route('store') }}" method="PoST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Add your new todo" />
                        <button type="submit" cLass="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>
                {{-- if task exists --}}
                @if(count($todoList))
                <ul class="list-group list-group-flush mt-3">
                    @foreach ($todoList as $item )
                    <li class="list-group-item">
                        <form action="{{ route('destroy',$item->id)}}" method="POST">
                            {{ $item->content }}
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-link btn-sm float-end">
                                <i class="fas fa-trash"></i>
                            </button>

                        </form>
                    </li>
                    @endforeach
                </ul>
                @else
                <p class="text-center mt-3">No Tasks!!</p>
                @endif
            </div>
            @if(count($todoList))
            <div class="card-footer">
                you have {{ count($todoList)}} Pending tasks.
            </div>

            @endif
        </div>
    </div>
</body>

</html>