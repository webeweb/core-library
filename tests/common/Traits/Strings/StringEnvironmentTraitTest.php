<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringEnvironmentTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * String environment trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringEnvironmentTraitTest extends AbstractTestCase {

    /**
     * Test setEnvironment()
     *
     * @return void
     */
    public function testSetEnvironment(): void {

        $obj = new TestStringEnvironmentTrait();

        $obj->setEnvironment("environment");
        $this->assertEquals("environment", $obj->getEnvironment());
    }
}
