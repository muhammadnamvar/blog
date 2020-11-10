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
    <title>{{$page_title}}</title>
</head>
<body dir="rtl" style="text-align: right">
@include('layouts.navbar')
<div  style="padding: 10px">
    <a class="btn btn-primary" href="{{route('category.create')}}">ایجاد دسته‌بندی جدید</a>
</div>
@include('layouts.messages')
<table>
    <thead>
    <tr>
        <td>شناسه</td>
        <td>عنوان</td>
        <td>توضیحات</td>
        <td>وضعیت</td>
        <td>ویرایش</td>
        <td>حذف</td>
        <td>تاریخ ایجاد</td>
        <td>تاریخ بروزرسانی</td>
    </tr>
    </thead>
    <tbody class="table">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="{{route('category.show', $category->id)}}">{{$category->title}}</a></td>
            <td>{{$category->description}}</td>
            <td>{{$category->active}}</td>
            <td><a href="{{route('category.edit', $category->id)}}">ویرایش</a></td>
            <td>حذف</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
    </tr>
</table>

</body>
</html>
