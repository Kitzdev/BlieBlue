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
    public function searchItemRow($item_id) {
        $item = [
            "item" => $this->Item->searchItemRow($item_id)
        ];

        return view('dummy.dashboard_items', ["items" => $item]);
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
        return redirect('/dummy.dashboard');
    }

    // Show all items in table "item", returns dashboard_items view
    public function showItems() {
        $items = [
            "items" => $this->Item->showData()
        ];

        return view('dummy.dashboard_items', $items);
    }

    // Update item, redirect to default page (dashboard view)
    public function updateItem(Request $request) {
        
        $item = [
            "item_id" => $request->input('item_id'),
            "item_name" => $request->input('item_name'),
            "price" => $request->input('price'),
            "item_type" => $request->input('item_type'),
            "item_description" => $request->input('item_description'),
            "flag" => $request->input('flag'),
        ];

        $this->Item->updateItem($request->input('item_id'), $item);
        return redirect('/dummy.dashboard');
    }

    // Delete item, redirect to default page (dashboard view)
    public function deleteItem(Request $request) {
        $item_id = $request->input('item_id');

        $this->Item->deleteItem($item_id);
        return redirect('/dummy.dashboard');
    }
}
