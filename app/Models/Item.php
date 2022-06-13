<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    public function showData()
	{
	   $items = DB::table('item')->get();
       return $items;
	}

    public function addItem($item) {
        $item = DB::table('item')->insert($item);
        return $item;
    }

    public function searchItemRow($item_id) {
        $item = DB::table('item')->where('item_id = ', $item_id);
        return $item;
    }

    public function deleteItem($item_id) {
        $item = DB::table('item')->where('item_id = ', $item_id)->delete();
        return $item;
    }

    public function updateItem($item_id, $item) {
        $item = DB::table('item')->where('item_id = ', $item_id)->update($item);
        return $item;
    }
}
