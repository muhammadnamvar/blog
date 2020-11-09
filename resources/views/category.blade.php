<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>{{$page_title}}</title>
</head>
<body dir="rtl" style="text-align: right">
<div>
    <a href="#" class="btn btn-primary">ایجاد دسته بندی</a>
    <a href="{{route('order')}}" class="btn btn-primary">صفحه‌ی سفارش</a>
</div>
<table>
    <thead>
    <tr>
        <td>شناسه</td>
        <td>عنوان</td>
        <td>توضیحات</td>
        <td>تاریخ ایجاد</td>
    </tr>
    </thead>
    <tbody class="table">
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="">{{$category->title}}</a></td>
            <td>{{$category->description}}</td>
            <td>{{$category->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
    </tr>
</table>

</body>
</html>
