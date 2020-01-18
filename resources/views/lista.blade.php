<!DOCTYPE html>
<html>
<head>
    <title>ContactMe</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container">

    <h1>Lista de mensagens</h1>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contatos as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nome }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->mensagem }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
<!DOCTYPE html>
<html>
<head>
    <title>ContactMe</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container">

    <h1>Lista de mensagens</h1>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contatos as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nome }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->textarea }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>