<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanDebugTrait;

/**
 * Boolean debug trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanDebugTraitTest extends AbstractTestCase {

    /**
     * Test setDebug()
     *
     * @return void
     */
    public function testSetDebug(): void {

        $obj = new TestBooleanDebugTrait();

        $obj->setDebug(true);
        $this->assertTrue($obj->getDebug());
    }
}
