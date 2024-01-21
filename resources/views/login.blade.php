@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <div class="form-group has-validation">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control {{$errors->has('name')?'is-invalid':''}}" required value="{{old('name')}}">
                        <input type="password" name="password1" id="password1"  placeholder='password' class="form-control {{$errors->has('name')?'is-invalid':''}}" required value="{{old('name')}}"> 
                        <input type="password" name="password2" id="password2" placeholder='password' class="form-control {{$errors->has('name')?'is-invalid':''}}" required value="{{old('name')}}">  
                        
    </form>
</body>
</html>
@endsection