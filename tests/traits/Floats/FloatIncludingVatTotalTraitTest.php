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
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatIncludingVatTotalTrait;

/**
 * Float including VAT total trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatIncludingVatTotalTraitTest extends AbstractTestCase {

    /**
     * Tests setIncludingVatTotal()
     *
     * @return void
     */
    public function testSetIncludingVatTotal(): void {

        $obj = new TestFloatIncludingVatTotalTrait();

        $obj->setIncludingVatTotal(0.123456789);
        $this->assertEquals(0.123456789, $obj->getIncludingVatTotal());
    }
}
