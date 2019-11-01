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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCollectif2Trait;

/**
 * Collectif_2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCollectif2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCollectif2() method.
     *
     * @return void
     */
    public function testSetCollectif2() {

        $obj = new TestStringCollectif2Trait();

        $obj->setCollectif2("collectif2");
        $this->assertEquals("collectif2", $obj->getCollectif2());
    }
}
