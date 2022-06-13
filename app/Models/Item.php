<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    // Show all items in table "item"
    public function showData()
	{
	   $items = DB::table('item')->get();
       return $items;
	}

    // Add item into table "item"
    public function addItem($item) {
        $item = DB::table('item')->insert($item);
        return $item;
    }

    // Search row by item_id
    public function searchItemRow($item_id) {
        $item = DB::table('item')->where('item_id = ', $item_id);
        return $item;
    }

    // Delete item by item_id
    public function deleteItem($item_id) {
        $item = DB::table('item')->where('item_id = ', $item_id)->delete();
        return $item;
    }

    // Update item by item_id, require new Item data
    public function updateItem($item_id, $item) {
        $item = DB::table('item')->where('item_id = ', $item_id)->update($item);
        return $item;
    }
}
