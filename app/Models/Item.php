<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    // Show all items in table "item"
    public function getItem()
	{
	   $items = DB::select('SELECT * FROM item');
       return $items;
	}

    // Add item into table "item"
    public function addItem($item) {
        $item_name  = $item['item_name'];
        $price      = $item['price'];
        $item_type  = $item['item_type'];
        $description = $item['item_description'];
        $flag       = $item['flag'];

        DB::insert('INSERT INTO item (item_name, price, item_type, description, flag) VALUES (?, ?, ?, ?, ?)', [$item_name, $price, $item_type, $description, $flag]);
    }

    // Update item by item_id, require new Item data
    public function updateItem($item_id, $item) {

        $item_name  = $item['item_name'];
        $price      = $item['price'];
        $item_type  = $item['item_type'];
        $description = $item['description'];
        $flag       = $item['flag'];
        $image_name       = $item['image_name'];
        $image_url       = $item['image_url'];

        DB::update('UPDATE item SET item_name = ?, price = ?, item_type = ?, description = ?, flag = ?, image_name = ?, image_url = ? WHERE item_id = ?', [$item_name, $price, $item_type, $description, $flag, $image_name, $image_url, $item_id]);
    }

    // Search row by item_idx
    public function searchItemRow($item_id) {
        $item = DB::select('select * from item where item_id = ?', [$item_id]);
        return $item;
    }

    // Delete item by item_id
    public function deleteItem($item_id) {
        DB::delete('delete from item where item_id = ?', [$item_id]);
    }
}
