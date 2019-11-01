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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFrpRecetteTrait;

/**
 * F r p recette trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFrpRecetteTraitTest extends AbstractTestCase {

    /**
     * Tests the setFrpRecette() method.
     *
     * @return void
     */
    public function testSetFrpRecette() {

        $obj = new TestStringFrpRecetteTrait();

        $obj->setFrpRecette("frpRecette");
        $this->assertEquals("frpRecette", $obj->getFrpRecette());
    }
}
