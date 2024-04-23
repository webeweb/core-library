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

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanReadyTrait;

/**
 * Boolean ready trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanReadyTraitTest extends AbstractTestCase {

    /**
     * Test setReady()
     *
     * @return void
     */
    public function testSetReady(): void {

        $obj = new TestBooleanReadyTrait();

        $obj->setReady(true);
        $this->assertTrue($obj->getReady());
    }
}
