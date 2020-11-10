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
<div class="container-fluid">
    @include('layouts.messages')
    <form action="{{route('category.update', $category->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">عنوان دسته‌بندی:</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                   value="{{$category->title}}">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">توضیحات دسته‌بندی:</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                      rows="10">{{$category->description}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="active">وضعیت:</label>
            <select name="active">
                <option value="1" <?php if ($category->active == 1) echo 'selected' ?>>منتشر شده</option>
                <option value="0" <?php if ($category->active == 0) echo 'selected' ?>>منتشر نشده</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success">ویرایش</button>
        </div>
    </form>
</div>
</body>
</html>
