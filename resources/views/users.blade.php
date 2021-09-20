
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        body{
            margin-top:20px;
            background:#FAFAFA;
        }


        .people-nearby .google-maps{
            background: #f8f8f8;
            border-radius: 4px;
            border: 1px solid #f1f2f2;
            padding: 20px;
            margin-bottom: 20px;
        }

        .people-nearby .google-maps .map{
            height: 300px;
            width: 100%;
            border: none;
        }

        .people-nearby .nearby-user{
            padding: 20px 0;
            border-top: 1px solid #f1f2f2;
            border-bottom: 1px solid #f1f2f2;
            margin-bottom: 20px;
        }

        img.profile-photo-lg{
            height: 80px;
            width: 80px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">

            <div class="people-nearby">


                @foreach($users as $user)

                    <x-FriendCard :user="$user"></x-FriendCard>

                @endforeach

            </div>

</div>
</body>
</html>

{{--<x-layout>--}}
{{--    @foreach($users as $user)--}}
{{--    <h3> {{$user->name}}</h3>--}}
{{-- <h3 style="color:grey; font-size:15px">email :{{ $user->email}}</h3>--}}
{{--<a href="users/{{$user->username}}">    <h3 style="color:blue; font-size:15px">Posts</h3></a>--}}


{{--    @endforeach--}}
{{--</x-layout>--}}
