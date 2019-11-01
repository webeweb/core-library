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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTypeFrais3Trait;

/**
 * Type frais3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTypeFrais3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeFrais3() method.
     *
     * @return void
     */
    public function testSetTypeFrais3() {

        $obj = new TestBoolTypeFrais3Trait();

        $obj->setTypeFrais3(true);
        $this->assertEquals(true, $obj->getTypeFrais3());
    }
}
