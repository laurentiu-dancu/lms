<?php

namespace App\Book;

use App\Barcode\ScannableInterface;
use App\Person\Librarian;
use App\Person\LibraryMemberInterface;
use DateTimeInterface;

abstract class BookItem implements ScannableInterface
{
    /**
     * @var string
     */
    protected $uuid;

    /**
     * @var int
     */
    protected $rackNumber;

    /**
     * @var Librarian|null
     */
    protected $lender;

    /**
     * @var LibraryMemberInterface|null
     */
    protected $lendee;

    /**
     * @var LibraryMemberInterface|null
     */
    protected $reservee;

    /**
     * @var DateTimeInterface|null
     */
    protected  $dueDate;

    /**
     * @var Book
     */
    protected $book;
}
