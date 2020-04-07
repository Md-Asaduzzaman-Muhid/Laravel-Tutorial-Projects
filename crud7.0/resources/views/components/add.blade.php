@extends('layouts.app')

@section('content')
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
@endsection