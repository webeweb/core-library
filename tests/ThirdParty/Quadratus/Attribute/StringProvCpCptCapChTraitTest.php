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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringProvCpCptCapChTrait;

/**
 * Prov c p cpt c a p ch trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringProvCpCptCapChTraitTest extends AbstractTestCase {

    /**
     * Tests the setProvCpCptCapCh() method.
     *
     * @return void
     */
    public function testSetProvCpCptCapCh() {

        $obj = new TestStringProvCpCptCapChTrait();

        $obj->setProvCpCptCapCh("provCpCptCapCh");
        $this->assertEquals("provCpCptCapCh", $obj->getProvCpCptCapCh());
    }
}
