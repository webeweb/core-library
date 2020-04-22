<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestFloatIncludingVatTotalTrait;

/**
 * Float including VAT total trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class FloatIncludingVatTotalTraitTest extends AbstractTestCase {

    /**
     * Tests the setIncludingVatTotal() method.
     *
     * @return void
     */
    public function testSetIncludingVatTotal() {

        $obj = new TestFloatIncludingVatTotalTrait();

        $obj->setIncludingVatTotal(1.01);
        $this->assertEquals(1.01, $obj->getIncludingVatTotal());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestFloatIncludingVatTotalTrait();

        $this->assertNull($obj->getIncludingVatTotal());
    }
}
