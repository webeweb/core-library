<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Booleans;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanDebugTrait;

/**
 * Boolean debug trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanDebugTraitTest extends AbstractTestCase {

    /**
     * Tests setDebug()
     *
     * @return void
     */
    public function testSetDebug(): void {

        $obj = new TestBooleanDebugTrait();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }
}
