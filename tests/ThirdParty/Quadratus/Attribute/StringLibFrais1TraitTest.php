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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibFrais1Trait;

/**
 * Lib frais1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibFrais1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibFrais1() method.
     *
     * @return void
     */
    public function testSetLibFrais1() {

        $obj = new TestStringLibFrais1Trait();

        $obj->setLibFrais1("libFrais1");
        $this->assertEquals("libFrais1", $obj->getLibFrais1());
    }
}
