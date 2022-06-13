<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class ItemController extends Controller
{
    public function __construct()
    {
       $this->Item = new Item();
    } 

    public function index() {
        return view('dummy.dashboard');
    }

    public function addItem(Request $request) {
        $item = [
            "item_id" => $request->item_id,
            "item_name" => $request->item_name,
            "price" => $request->item_price,
            "description" => $request->item_description,
            "item_image" => $request->item_image,
            "item_flag" => $request->item_flag
        ];

        $this->Item->addItem($item);
        return redirect('/dummy.dashboard');
    }

    public function showItem() {
        $items = [
            "items" => $this->Item->showData()
        ];

        return view('dummy.dashboard', ["items" => $items]);
    }

    public function updateItem(Request $request) {
        $item = [
            "item_id" => $request->item_id,
            "item_name" => $request->item_name,
            "price" => $request->item_price,
            "description" => $request->item_description,
            "item_image" => $request->item_image,
            "item_flag" => $request->item_flag
        ];

        $this->Item->updateItem($request->item_id, $item);
        return redirect('/dummy.dashboard');
    }

    public function deleteItem(Request $request) {
        $this->Item->deleteItem($request->item_id);
        return redirect('/dummy.dashboard');
    }

    public function searchItemRow(Request $request) {
        $item = [
            "item_id" => $request->item_id,
            "item_name" => $request->item_name,
            "price" => $request->item_price,
            "description" => $request->item_description,
            "item_image" => $request->item_image,
            "item_flag" => $request->item_flag
        ];

        $items = [
            "items" => $this->Item->searchItemRow($request->item_id)
        ];

        return view('dummy.dashboard', ["items" => $items]);
    }
}
