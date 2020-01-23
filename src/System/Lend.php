<?php

namespace App\System;

use App\Book\BookItem;
use App\Person\Librarian;
use App\Person\LibraryMemberInterface;

interface Lend
{
    public function lend(Librarian $lender, LibraryMemberInterface $lendee, BookItem $bookItem, int $duration);

    public function renew(Librarian $renewer, LibraryMemberInterface $lendee, BookItem $bookItem, int $duration);

    public function return(Librarian $librarian, BookItem $bookItem);
}
