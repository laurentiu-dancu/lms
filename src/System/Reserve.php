<?php

namespace App\System;

use App\Book\BookItem;
use App\Person\Librarian;
use App\Person\LibraryMemberInterface;

interface Reserve
{
    public function reserve(LibraryMemberInterface $reservee, BookItem $bookItem);
}
