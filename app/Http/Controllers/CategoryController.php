<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "دسته بندی";
        $categories = Category::orderby('id', 'DESC')
            ->get();

        return view('categories', compact('page_title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "ایجاد مطلب";
        return view('create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
//            'title' => 'required|unique:categories|max:15',
            'title' => 'required|max:15',
            'description' => 'required'
        ],
        [
            'title.required' => 'عنوان را وارد کنید',
//            'title.unique' => 'عنوان تکراری است لطفا عنوان دیگری انتخاب کنید',
            'title.max' => 'طول عنوان نباید بیشتر از ۱۵ کاراکتر باشد',
            'description.required' => 'توضیحات را وارد کنید'
        ]
        );

//        $category = new Category([
//            'title' => $request->get('title'),
//            'description' => $request->get('description'),
//            'active' => $request->get('active')
//        ]);
        $category = new Category();
        try {
            $category->create($request->all());
//            $category->save();
        }catch (Exception $exception){
            switch ($exception->getCode()){
                case 23000:
                    $msg = "عنوان تکراری است لطفا یک عنوان دیگر وارد کنید";
                    break;
                case 24000:
                    $msg = "یک خطای نا شناخته رخ داده است";
                    break;
            }
            return redirect(route('categories'))->with('warning', $msg);
        }

        $msg = 'دسته‌بندی جدید با موفقیت ثبت شد';
        return redirect(route('categories'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $page_title = "ویرایش مطلب";
        return view('edit', compact('page_title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
//            'title' => 'required|unique:categories|max:15',
            'title' => 'required|max:15',
            'description' => 'required'
        ],
            [
                'title.required' => 'عنوان را وارد کنید',
//            'title.unique' => 'عنوان تکراری است لطفا عنوان دیگری انتخاب کنید',
                'title.max' => 'طول عنوان نباید بیشتر از ۱۵ کاراکتر باشد',
                'description.required' => 'توضیحات را وارد کنید'
            ]
        );

//        $category->title = $request->title;
//        $category->description = $request->description;
//        $category->active = $request->active;
        try {
//            $category->save();
            $category->update($request->all());
        }catch (Exception $exception){
            switch ($exception->getCode()){
                case 23000:
                    $msg = "عنوان تکراری است لطفا یک عنوان دیگر وارد کنید";
                    break;
                case 24000:
                    $msg = "یک خطای نا شناخته رخ داده است";
                    break;
            }
            return redirect(route('categories'))->with('warning', $msg);
        }

        $msg = 'دسته‌بندی جدید با موفقیت ویرایش شد';
        return redirect(route('categories'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
