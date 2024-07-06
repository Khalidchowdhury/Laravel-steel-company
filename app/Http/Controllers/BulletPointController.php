<?php

namespace App\Http\Controllers;

use App\Models\BulletPoint;
use Illuminate\Http\Request;

class BulletPointController extends Controller
{
    public function store(Request $request, $productId)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $bulletPoint = new BulletPoint($validatedData);
        $bulletPoint->product_id = $productId;
        $bulletPoint->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $bulletPoint = BulletPoint::findOrFail($id);
        $bulletPoint->delete();

        return redirect()->back();
    }
}
