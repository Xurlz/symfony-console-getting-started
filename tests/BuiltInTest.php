<?php

namespace Charles\Tests;


class BuiltInTest extends \PHPUnit\Framework\TestCase {
  use \phpmock\phpunit\PHPMock;

  public function testExec() : void
  {
    exec("./application.php", $output, $return_var);

    $this->assertEquals(["🫖 I'm a teapot"], $output);
    $this->assertEquals(1, $return_var);

  }
}

