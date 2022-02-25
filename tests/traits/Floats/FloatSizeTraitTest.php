<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatSizeTrait;

/**
 * Float size trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatSizeTraitTest extends AbstractTestCase {

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSize(): void {

        $obj = new TestFloatSizeTrait();

        $obj->setSize(0.123456789);
        $this->assertEquals(0.123456789, $obj->getSize());
    }
}
