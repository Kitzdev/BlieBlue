<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    const FOOD_PRODUCT_FLAG = 11;
    const SERVICE_FLAG = 12;
    const PRODUCT_FLAG = 21;
    const BEST_FOR_YOUR_PET_PRODUCT_FLAG = 31;
    const OUR_FAVOURITE_FLAG = 32;

    // Show all items in table "item"
    public function getItem()
	{
	   $items = DB::select('SELECT * FROM item');
       return $items;
	}

    public function getBestForYourPetProducts()
    {
        return DB::select("SELECT * FROM item where flag = " . self::BEST_FOR_YOUR_PET_PRODUCT_FLAG);
    }

    public function getOurFavouriteProducts()
    {
        return DB::select("SELECT * FROM item where flag = " . self::OUR_FAVOURITE_FLAG);
    }

    public function getPetFoodProducts()
    {
        return DB::select("SELECT * FROM item where flag = " . self::FOOD_PRODUCT_FLAG);
    }

    // Add item into table "item"
    public function addItem($item) {
        $item_name  = $item['item_name'];
        $price      = $item['price'];
        $item_type  = $item['item_type'];
        $description = $item['item_description'];
        $flag       = $item['flag'];
        $image_path =  $item['image_path'];

        DB::insert('INSERT INTO item (item_name, price, item_type, description, flag, image_path) VALUES (?, ?, ?, ?, ?, ?)', [$item_name, $price, $item_type, $description, $flag, $image_path]);
    }

    // Update item by item_id, require new Item data
    public function updateItem($item_id, $item) {

        $item_name  = $item['item_name'];
        $price      = $item['price'];
        $item_type  = $item['item_type'];
        $description = $item['description'];
        $flag       = $item['flag'];
        $image_path = $item['image_path'];

        DB::update('UPDATE item SET item_name = ?, price = ?, item_type = ?, description = ?, flag = ?, image_path = ? WHERE item_id = ?', [$item_name, $price, $item_type, $description, $flag, $image_path, $item_id]);
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
