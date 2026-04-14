<?php

namespace Charles\Tests;

use Charles\Command\TeapotCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class BuiltInTest extends TestCase {

  private CommandTester $tester;

  protected function setUp() : void
  {
    $command = new TeapotCommand;
    $this->tester = new CommandTester($command);
  }

  public function testExec() : void
  {
    $statusCode = $this->tester->execute([]);
    $output = $this->tester->getDisplay();

    $this->assertEquals("🫖 I'm a teapot\n", $output);
    $this->assertEquals(1, $statusCode);

  }
}

