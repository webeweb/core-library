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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptTvaAssuTrait;

/**
 * Cpt t v a assu trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptTvaAssuTraitTest extends AbstractTestCase {

    /**
     * Tests the setCptTvaAssu() method.
     *
     * @return void
     */
    public function testSetCptTvaAssu() {

        $obj = new TestStringCptTvaAssuTrait();

        $obj->setCptTvaAssu("cptTvaAssu");
        $this->assertEquals("cptTvaAssu", $obj->getCptTvaAssu());
    }
}
