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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibFrais2Trait;

/**
 * Lib frais2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibFrais2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibFrais2() method.
     *
     * @return void
     */
    public function testSetLibFrais2() {

        $obj = new TestStringLibFrais2Trait();

        $obj->setLibFrais2("libFrais2");
        $this->assertEquals("libFrais2", $obj->getLibFrais2());
    }
}
