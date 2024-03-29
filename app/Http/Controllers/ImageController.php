<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "upload" => 'required|array', // Validate 'upload' as an array
            "upload.*" => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048', // Validate each image file
            "type" => 'required',
            "store_id" => 'required',
        ]);

        
        foreach ($request->file('upload') as $file) {
            $validated["slug"] = Str::random(39);
            $validated["user_id"] = auth()->id();
            $path = $file->storeAs(
                'thumbnails',
                str_replace(" ", "-", $validated["slug"]) . "." . $file->getClientOriginalExtension(),
                'storage_uploads'
            );
            $validated["upload"] = '/uploads/' . $path;

            ImageUpload::create($validated);
        }

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
