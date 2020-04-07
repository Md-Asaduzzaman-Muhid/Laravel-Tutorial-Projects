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