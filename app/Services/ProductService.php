<?php

namespace App\Services;

class ProductService
{
  public function calculateTotalPrice(array $cartItems): float
  {
    $totalPrice = 0;
    foreach ($cartItems as $cartItem) {
      $totalPrice += $cartItem['price'] * $cartItem['quantity'];
    }
    return $totalPrice;
  }
}
