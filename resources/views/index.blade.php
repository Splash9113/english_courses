<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <script src="/js/app.js"></script>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
<body>

{{----}}
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1 col-xs-3">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicons glyphicons-justify"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                </ul>
            </div>

        </div>
        <div class="col-sm-1 col-xs-3"><img class="img-responsive" src="images/english_logo.png"></div>
        <div class="col-sm-5 col-sm-offset-2 col-xs-3">test</div>
        <div class="col-sm-3 col-xs-3">test</div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>News</h1>
        </div>
        @foreach($news as $newsItem)
            <div class="col-sm-12">
                <h4>{{$newsItem->getTitle()}}</h4>
            </div>
            <div class="col-sm-12">
                <p>{!! $newsItem->getBody() !!}</p>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1>Schedules</h1>
        </div>
        <table style="width:50%; height: 100%;border: solid;">
            <thead>
            <th>Group</th>
            <th>Schedule</th>
            </thead>
            <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>
                        {{$schedule->getGroupName()}}
                    </td>
                    <td>{{$schedule->getSchedule()}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div style="background-color: black" class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                    <li>test</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
