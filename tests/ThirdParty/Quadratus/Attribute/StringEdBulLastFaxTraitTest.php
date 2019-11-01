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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEdBulLastFaxTrait;

/**
 * Ed bul last fax trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEdBulLastFaxTraitTest extends AbstractTestCase {

    /**
     * Tests the setEdBulLastFax() method.
     *
     * @return void
     */
    public function testSetEdBulLastFax() {

        $obj = new TestStringEdBulLastFaxTrait();

        $obj->setEdBulLastFax("edBulLastFax");
        $this->assertEquals("edBulLastFax", $obj->getEdBulLastFax());
    }
}
