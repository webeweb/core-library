<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Booleans;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanReadyTrait;

/**
 * Boolean ready trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanReadyTraitTest extends AbstractTestCase {

    /**
     * Tests setReady()
     *
     * @return void
     */
    public function testSetReady(): void {

        $obj = new TestBooleanReadyTrait();

        $obj->setReady(true);
        $this->assertTrue($obj->getReady());
    }
}
