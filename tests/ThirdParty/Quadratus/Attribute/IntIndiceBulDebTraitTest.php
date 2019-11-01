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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntIndiceBulDebTrait;

/**
 * Indice bul deb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntIndiceBulDebTraitTest extends AbstractTestCase {

    /**
     * Tests the setIndiceBulDeb() method.
     *
     * @return void
     */
    public function testSetIndiceBulDeb() {

        $obj = new TestIntIndiceBulDebTrait();

        $obj->setIndiceBulDeb(10);
        $this->assertEquals(10, $obj->getIndiceBulDeb());
    }
}
