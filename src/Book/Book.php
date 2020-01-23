<?php

namespace App\Book;

use App\Barcode\BarcodeInterface;
use DateTimeInterface;

abstract class Book
{
    /**
     * @var BarcodeInterface
     */
    protected $barcodeInterface;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var DateTimeInterface
     */
    protected $publishDate;

    /**
     * @var array|BookItem[]
     */
    protected $items;
}
