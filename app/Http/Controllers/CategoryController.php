<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
            'title' => 'required|unique:categories|max:15',
            'description' => 'required'
        ],
        [
            'title.required' => 'عنوان را وارد کنید',
            'title.unique' => 'عنوان تکراری است لطفا عنوان دیگری انتخاب کنید',
            'title.max' => 'طول عنوان نباید بیشتر از ۱۵ کاراکتر باشد',
            'description.required' => 'توضیحات را وارد کنید'
        ]
        );

        $category = new Category([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'active' => $request->get('active')
        ]);
        $category->save();
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
//        dd($category);
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
        //
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
        //
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
