<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showForm()
    {
        return view('crud');
    }

    public function createService(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);

        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "storage", $path);

        Service::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);

        return redirect("/services");
    }

    public function updateService(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);

        $service = Service::find($validated['id']);

        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "storage", $path);

        $service->service_name = $validated['name'];
        $service->service_description = $validated['description'];
        $service->service_image = $url;
        $service->save();

        return redirect("/services");
    }

    public function deleteService(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
        ]);

        $result = Service::where('id', $validated['id'])->delete();

        return redirect("/services");
    }
}
