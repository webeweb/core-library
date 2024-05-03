<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Traits\Integers;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Integers\TestIntegerIdTreeTrait;

/**
 * String id tree trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class IntegerIdTreeTraitTest extends AbstractTestCase {

    /**
     * Test setIdTree()
     *
     * @return void
     */
    public function testSetIdTree(): void {

        $obj = new TestIntegerIdTreeTrait();

        $obj->setIdTree(1);
        $this->assertEquals(1, $obj->getIdTree());
    }
}
