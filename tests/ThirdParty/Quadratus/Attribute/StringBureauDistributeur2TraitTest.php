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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringBureauDistributeur2Trait;

/**
 * Bureau distributeur2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringBureauDistributeur2TraitTest extends AbstractTestCase {

    /**
     * Tests the setBureauDistributeur2() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur2() {

        $obj = new TestStringBureauDistributeur2Trait();

        $obj->setBureauDistributeur2("bureauDistributeur2");
        $this->assertEquals("bureauDistributeur2", $obj->getBureauDistributeur2());
    }
}
