<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Order</title>
</head>
<body dir="rtl" style="text-align: right">
    @include('layouts.navbar')
    <div style="padding: 40px">
    @foreach($orders as $order)
        <p>{{$order->id}}<br>
{{--        {{$order->user_id}}<br>--}}
{{--        {{$order->order_id}}<br>--}}
        {{$order->title}}<br>
        {{$order->amount}}<br>
        {{$order->created_at}}<hr>
    @endforeach
    </div>
</body>
</html>
