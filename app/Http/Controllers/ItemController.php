<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    // Init "Item model" object
    public function __construct() {
       $this->Item = new Item();
    }

    // Returns default page (dashboard view)
    public function index() {
        return view('/dashboard/items');
    }

    // Add item into table, redirect to default page (dashboard view)
    public function addItem(Request $request) {
        $item = [
            "item_name" => $request->input('item_name'),
            "price" => $request->input('price'),
            "item_type" => $request->input('item_type'),
            "item_description" => $request->input('description'),
            "flag" => $request->input('flag'),
        ];

        if ($request->hasFile('image')) {
            $fileName = time() . '-' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public_uploads');
            $item['image_path'] = 'uploads/' . $path;
        }

        $this->Item->addItem($item);

        return redirect('/dashboard/items');
    }

    // Show all items in table "item", returns dashboard_items view
    public function showItems() {
        $items = [
            "items" => collect($this->Item->getItem())
        ];

        return view('dashboard_items', $items);
    }

    public function showProducts()
    {
        $itemModel = new Item();
        $items = [
            'bestForYourPet' => $itemModel->getBestForYourPetProducts(),
            'ourFavourite' => $itemModel->getOurFavouriteProducts(),
            'petFood' => $itemModel->getPetFoodProducts(),
        ];

        return view('products', $items);
    }

    public function editItem($item_id) {
        $items = [
            "items" => collect($this->Item->searchItemRow($item_id))
        ];

        return view('item_edit', $items);
    }

    // Update item, redirect to default page (dashboard view)
    public function updateItem(Request $request) {
        $item_id = $request->item_id;
        $item = [
            "item_name" => $request->input('item_name'),
            "price" => $request->input('price'),
            "item_type" => $request->input('item_type'),
            "description" => $request->input('description'),
            "flag" => $request->input('flag'),
        ];

        if ($request->hasFile('image')) {
            $fileName = time() . '-' . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public_uploads');
            $item['image_path'] = 'uploads/' . $path;
        }

        $this->Item->updateItem($item_id, $item);
        return redirect('/dashboard/items')->with('flash_message', 'Edit produk berhasil !');
    }

    // Delete item, redirect to default page (dashboard view)
    public function deleteItem($item_id) {

        $this->Item->deleteItem($item_id);
        return redirect('/dashboard/items');
    }
}
