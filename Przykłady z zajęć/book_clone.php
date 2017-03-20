<?php
  
  require_once 'Book.php';
  
  $book1 = new Book('book1');
  $book1->myBookmark = new Bookmark(15);
  $book1->printInformation();
  echo '<br>';
  
  $book2 = clone $book1;
  $book2 ->printInformation();
  $book2->myBookmark->pageNo = 564;
  echo '<br>';
  
  $book1->printInformation();