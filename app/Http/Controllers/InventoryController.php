<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function IndexInventory(){
        return view('Inventory/IndexInventory');
    }

    public function DataInventory(){
        return view('Inventory/DataInventory');
    }
}
