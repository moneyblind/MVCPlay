<?php

/**
 *
 */
class TestDataClass
{
  var $FirstName;
  var $LastName;
  var $Note;

  public function __construct(Type $foo = null)
  {
    $this->FirstName = "Kody";
    $this->LastName = "Sumter";
  }

  public function FullName()
  {
    return $this->LastName . ", " . $this->FirstName;
  }
}


 ?>
