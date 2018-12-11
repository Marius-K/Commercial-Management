<?php

use App\Product;

function product_title($id)
{
    foreach(Product::all() as $product)
    {
        if($product->id == $id)
        {
            return $product->title;
        }
    }
    return "DELETED";
}
?>