<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Traits\Integers;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Integers\TestIntegerIdParentTrait;

/**
 * String id parent trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Strings
 */
class IntegerIdParentTraitTest extends AbstractTestCase {

    /**
     * Test setIdParent()
     *
     * @return void
     */
    public function testSetIdParent(): void {

        $obj = new TestIntegerIdParentTrait();

        $obj->setIdParent(1);
        $this->assertEquals(1, $obj->getIdParent());
    }
}
