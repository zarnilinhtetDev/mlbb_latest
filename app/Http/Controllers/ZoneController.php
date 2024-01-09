<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::latest()->get();
        return view('blade.zone.zone', compact('zones'));
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'product_id' => 'required',
            'code' => 'required',
            'product_name' => 'required',
            'indo' => 'required',
            'brazil' => 'required',
            'global' => 'required',
        ]);

        $zone = new Zone();
        $zone->product_id = $data['product_id'];
        $zone->code = $data['code'];
        $zone->product_name = $data['product_name'];
        $zone->indo = $data['indo'];
        $zone->brazil = $data['brazil'];
        $zone->global = $data['global'];
        $zone->save();
        return redirect()->back()->with('success', 'Zone Added Successfully');
    }
    public function edit($id)
    {
        $showZone = Zone::find($id);
        return view('blade.zone.zoneEdit', compact('showZone'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'code' => 'required',
            'product_name' => 'required',
            'indo' => 'required',
            'brazil' => 'required',
            'global' => 'required',
        ]);
        $zone = Zone::find($id);
        $zone->product_id = $data['product_id'];
        $zone->code = $data['code'];
        $zone->product_name = $data['product_name'];
        $zone->indo = $data['indo'];
        $zone->brazil = $data['brazil'];
        $zone->global = $data['global'];
        $zone->save();
        return redirect('zone')->with('success', 'Zone update is successful');
    }
    public function delete($id)
    {
        $delete_zone = Zone::find($id);
        $delete_zone->delete();

        return redirect()->back()->with('delete_success', ' Zone delete is successful');
    }
}
