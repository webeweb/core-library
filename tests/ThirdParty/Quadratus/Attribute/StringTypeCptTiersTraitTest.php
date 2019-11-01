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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeCptTiersTrait;

/**
 * Type cpt tiers trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeCptTiersTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeCptTiers() method.
     *
     * @return void
     */
    public function testSetTypeCptTiers() {

        $obj = new TestStringTypeCptTiersTrait();

        $obj->setTypeCptTiers("typeCptTiers");
        $this->assertEquals("typeCptTiers", $obj->getTypeCptTiers());
    }
}
