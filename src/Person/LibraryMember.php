<?php

namespace App\Person;

use App\Barcode\BarcodeInterface;

abstract class LibraryMember implements LibraryMemberInterface
{
    /**
     * @var BarcodeInterface
     */
    protected $barcode;

    /**
     * @var float
     */
    protected $outstandingFines = 0;
}
