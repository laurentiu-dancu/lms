<?php

namespace App\System;

use App\Book\Book;
use App\Person\LibraryMemberInterface;
use App\Search\ParameterList;

interface Search
{
    /**
     * @param LibraryMemberInterface $libraryMember
     * @param ParameterList $parameters
     *
     * @return array|Book[]
     */
    public function search(LibraryMemberInterface $libraryMember, ParameterList $parameters): array;
}
