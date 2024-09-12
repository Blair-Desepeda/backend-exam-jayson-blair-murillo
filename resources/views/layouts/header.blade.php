<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/update.css')}}">
    <title>Document</title>
</head>
<body>
    <input type="checkbox" name="" id="checkbox">
    <label for="checkbox" class="checkbox">&#9776;Menu</label>
    <div class="nav">
        <ul>

            <li><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li>
                <button type="button" 
                data-bs-toggle="modal" 
                data-bs-target="#staticBackdrop" 
                id="add-btn-user">
                    Add user
                  </button>
            </li>
            <li><a href="">Contact Me</a></li>
            <li id="logout"><a href="">Logout</a></li>
        </ul>
        
    </div>
<div class="container" >

<br>
