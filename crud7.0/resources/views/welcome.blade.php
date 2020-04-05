<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="header">
        @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>
        <section class="body-section">
            <div class="container">
                <form class = "py-5" method="post" action="{{url('/todo/add')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="name" type="text" value="{{ @$item->name }}" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Todo</label>
                        <input name="todo" type="text" class="form-control" id="exampleInputTodo" aria-describedby="emailHelp" placeholder="Enter Todo">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Todo</button>
                </form>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Todo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todos as $todo)
                        
                        <tr>
                            <th>{{$todo->id}}</th>
                            <td>{{$todo->name}}</td>
                            <td>{{$todo->email}}</td>
                            <td>{{$todo->phone}}</td>
                            <td>{{$todo->todo}}</td>
                            <td><a data-toggle="modal" data-target="#exampleModalCenter" href="{{route('editTodo',['id'=>$todo->id])}}">edit </a><a href="{{route('destroyTodo',['id'=>$todo->id])}}"> Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Todo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class = "py-3" method="post" action="{{url('/todo/add')}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="text" value="{{ @$item->name}}" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input name="phone" type="text" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Todo</label>
                            <input name="todo" type="text" class="form-control" id="exampleInputTodo" aria-describedby="emailHelp" placeholder="Enter Todo">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Todo</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

       <footer class="bg-dark py-2"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright 2019</p>
                    </div>
                    <div class="col-md-6">
                        <p>Copyright 2020</p>
                    </div>
                </div>
            </div>
       </footer>
    </body>
</html>
