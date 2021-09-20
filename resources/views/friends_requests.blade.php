<html>
<head>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"></head>
<style>
    .list-content{
        min-height:300px;
    }
    .list-content .list-group .title{
        background:#5bc0de;
        border:2px solid #DDDDDD;
        font-weight:bold;
        color:#FFFFFF;
    }
    .list-group-item img {
        height:80px;
        width:80px;
    }

    .jumbotron .btn {
        padding: 5px 5px !important;
        font-size: 12px !important;
    }
    .prj-name {
        color:#5bc0de;
    }
    .break{
        width:100%;
        margin:20px;
    }
    .name {
        color:#5bc0de;
    }
</style>
</head>
<body>

<div class="container bootstrap snippets bootdey">


    <div class="jumbotron list-content">
        <ul class="list-group">
            <li href="#" class="list-group-item title">
                Your Friends Requests
            </li>
            @foreach($requests as $request)
                <x-friendrequest :request="$request"></x-friendrequest>
            @endforeach
        </ul>
    </div>
</div>
</div>

</body>
</html>
