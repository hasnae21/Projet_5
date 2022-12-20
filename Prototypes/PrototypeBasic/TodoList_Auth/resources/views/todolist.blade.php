<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo list</title>
</head>
<body>

<h2>To Do : </h2>
<br>
<tbody id="tbody"> 
    {{--  --}}
    @foreach ($tasks as $value)
    <tr>
        <th> - {{$value->task_name}}</th>
        <br>
        <td>
        </td>
    </tr>
    @endforeach
</tbody>

<br>
<div class="mb-2 w-25 container-fluid lead form-control shadow p-3 mb-5 bg-white rounded ">
<form action="add" method="POST">
@csrf
    Add Task : <input name="Name" class="form-control lead" type="text">
    <br>
    <button class="btn btn-success">Ajouter</button>
</form>
<br>



</body>
</html>