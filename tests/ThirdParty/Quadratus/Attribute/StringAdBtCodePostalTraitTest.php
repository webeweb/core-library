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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAdBtCodePostalTrait;

/**
 * Ad b t code postal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAdBtCodePostalTraitTest extends AbstractTestCase {

    /**
     * Tests the setAdBtCodePostal() method.
     *
     * @return void
     */
    public function testSetAdBtCodePostal() {

        $obj = new TestStringAdBtCodePostalTrait();

        $obj->setAdBtCodePostal("adBtCodePostal");
        $this->assertEquals("adBtCodePostal", $obj->getAdBtCodePostal());
    }
}
