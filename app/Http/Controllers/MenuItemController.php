<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('menu.index', compact('menuItems'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|min:0',
            'category_id'=>'required|integer',
            'image' => 'required|file',
            'quantity' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('menu_images'), $imageName);
        } else {

            $imageName = null; 
        }

        $menuItem = new MenuItem([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
            'quantity' => $request->input('quantity'),
        ]);
        $menuItem->save();

        return redirect()->route('menu.index')
            ->with('success', 'Menu item created successfully');
    }

    public function edit($id)
    {
        $menuItem = MenuItem::find($id);
        if (!$menuItem) {
            return redirect()->route('menu.index')
                ->with('error', 'Menu item not found');
        }

        return view('menu.edit', compact('menuItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id'=>'required|integer',
            'quantity' => 'required',
            'image' => 'required|file',
        ]);

        $menuItem = MenuItem::find($id);

        if (!$menuItem) {
            return redirect()->route('menu.index')
                ->with('error', 'Menu item not found');
        }
        $menuItem->name = $request->input('name');
        $menuItem->description = $request->input('description');
        $menuItem->price = $request->input('price');
        $menuItem->category_id = $request->input('category_id');
        $menuItem->quantity = $request->input('quantity');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
    
            $imageName = time().'.'.$image->getClientOriginalExtension();
            
            $image->move(public_path('menu_images'), $imageName);
            
            if ($menuItem->image) {
                Storage::disk('public')->delete($menuItem->image);
            }
            $menuItem->image = $imageName;
        }
        $menuItem->save();

        return redirect()->route('menu.index')
            ->with('success', 'Menu item updated successfully');
    }
    public function destroy($id)
    {
        $menuItem = MenuItem::find($id);
        if (!$menuItem) {
            return redirect()->route('menu.index')->with('error', 'Menu item not found');
        }
        if ($menuItem->image) {
            Storage::disk('public')->delete($menuItem->image);
        }
        $menuItem->delete();
        return redirect()->route('menu.index')->with('success', 'Menu item deleted successfully');
    }
}
