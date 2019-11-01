<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFactZipCodeTrait;

/**
 * Fact_ zip code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFactZipCodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setFactZipCode() method.
     *
     * @return void
     */
    public function testSetFactZipCode() {

        $obj = new TestStringFactZipCodeTrait();

        $obj->setFactZipCode("factZipCode");
        $this->assertEquals("factZipCode", $obj->getFactZipCode());
    }
}
