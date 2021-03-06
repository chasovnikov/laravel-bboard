<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private const ADVERT_VALIDATOR = [
        'title' => 'required|max:50',
        'description' => 'required',
        'price' => 'required|numeric',
    ];

    private const ADVERT_ERROR_MESSAGES = [
        'price.required' => 'Раздавать товары бесплатно нельзя',
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.advert_index', [
                'adverts' => Auth::user()->adverts()->latest()->get(),
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.advert_create', [
            'categories' => Category::all('name', 'id', 'parent_id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());

        $validated = $request->validate(
            self::ADVERT_VALIDATOR,
            self::ADVERT_ERROR_MESSAGES
        );

        Auth::user()->adverts()->create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            // 'category_id' => $validated['categories'],   
        ]);

        return redirect()->route('home.advert_index');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Advert $advert)
    // {
    //     return view('home.advert_show', compact('advert'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {
        return view('home.advert_edit', compact('advert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advert $advert)
    {
        $validated = $request->validate(
            self::ADVERT_VALIDATOR,
            self::ADVERT_ERROR_MESSAGES
        );

        $advert->fill([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'price' => $validated['price'],
        ]);
        $advert->save();

        return redirect()->route('home.advert_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advert $advert)
    {
        $advert->delete();

        return redirect()->route('home.advert_index');
    }
}
