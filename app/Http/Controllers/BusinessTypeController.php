<?php

namespace App\Http\Controllers;

use App\Models\BusinessType;
use Illuminate\Http\Request;

class BusinessTypeController extends Controller
{
  public function index()
  {
    return view('business_types.index');
  }

  public function create()
  {
    return view('business_types.create');
  }

  public function store(Request $request)
  {
    $request->validate(['name' => 'required|unique:business_types,name']);

    BusinessType::create(['name' => $request->name]);

    return redirect(route('business-types.index'));
  }

  public function edit(BusinessType $businessType)
  {
    return view('business_types.edit', compact('businessType'));
  }

  public function update(Request $request, BusinessType $businessType)
  {
    $request->validate(['name' => 'required|unique:business_types,name,' . $businessType->id]);

    $businessType->update(['name' => $request->name]);

    return redirect(route('business-types.index'));
  }
}
