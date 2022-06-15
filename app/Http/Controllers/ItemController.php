<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemController extends Controller
{
    // Init "Item model" object
    public function __construct() {
       $this->Item = new Item();
    } 

    // Returns default page (dashboard view)
    public function index() {
        return view('dummy.dashboard');
    }

    // Search row by item_id, returns dashboard_items view
    public function searchItemRow(Request $request) {
        $item_id = $request->input('item_id');

        $items = [
            "items" => collect($this->Item->searchItemRow($item_id))
        ];

        return view('dummy.dashboard_items', $items);
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

    // Edit item view controller, returns item_edit view
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

        $this->Item->updateItem($item_id, $item);
        return redirect('/dashboard/items');
    }

    // Delete item, redirect to default page (dashboard view)
    public function deleteItem($item_id) {

        $this->Item->deleteItem($item_id);
        return redirect('/dashboard/items');
    }
}
