<?php

namespace App\Barcode;

interface ScannableInterface
{
    public function getBarcode(): BarcodeInterface;
}
