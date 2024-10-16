<?php

declare(strict_types=1);

namespace LmcTest\User\Common;

use Lmc\User\Common\Module;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Module::class)]
class ModuleTest extends TestCase
{
    public function testModule(): void
    {
        $module = new Module();
        $this->assertIsArray($module->getConfig());
        $this->assertArrayHasKey('service_manager', $module->getConfig());
    }
}
