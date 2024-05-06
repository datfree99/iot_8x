<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function __construct()
    {
        \Validator::extend('http_or_https', function ($attribute, $value, $parameters, $validator) {
            $parsedUrl = parse_url($value);
            return isset($parsedUrl['scheme']) && in_array($parsedUrl['scheme'], ['http', 'https']);
        });
    }


    public function index(Request $request)
    {
        $sliders = SliderModel::query();

        if ($request->get('search')) {
            $search = $request->get('search');
            $sliders = $sliders->where(function (Builder $query) use ($search) {
                $query->where('title_vi', 'like', '%' . $search . '%')
                    ->orWhere('title_en', 'like', '%' . $search . '%');
            });
        }

        $sliders = $sliders
            ->orderBy('id', 'desc')
            ->paginate();

        return view('admin.slider.index')
            ->with('sliders', $sliders);
    }


    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'redirect' => 'nullable|http_or_https'
        ], [
            'image.required' => 'Vui lòng thêm hình ảnh',
            'redirect.http_or_https' => 'Sai định dạng. Url phải có dạng http or https'
        ]);

        SliderModel::create([
            'title_vi' => $request->get('title_vi'),
            'title_en' => $request->get('title_en'),
            'redirect' => $request->get('redirect'),
            'image' => $request->get('image')
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Thêm slider thành công');
    }



    public function edit($id)
    {
        $slider = SliderModel::findOrFail($id);

        return view('admin.slider.edit')
            ->with('slider', $slider);
    }


    public function update(Request $request, $id)
    {
        $slider = SliderModel::findOrFail($id);

        $request->validate([
            'image' => 'required',
            'redirect' => 'nullable|http_or_https'
        ], [
            'image.required' => 'Vui lòng thêm hình ảnh',
            'redirect.http_or_https' => 'Sai định dạng. Url phải có dạng http or https'
        ]);

        $slider->update([
            'title_vi' => $request->get('title_vi'),
            'title_en' => $request->get('title_en'),
            'redirect' => $request->get('redirect'),
            'image' => $request->get('image')
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Cập nhật slider thành công');
    }


    public function destroy($id)
    {
        $slider = SliderModel::findOrFail($id);

        $slider->delete();
        session()->flash('success', 'Xóa slider thành công');

        return response()->json([
            'success' => true,
        ]);
    }
}
