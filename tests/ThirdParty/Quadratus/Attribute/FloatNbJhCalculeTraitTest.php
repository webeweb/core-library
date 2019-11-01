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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbJhCalculeTrait;

/**
 * Nb j h calcule trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbJhCalculeTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbJhCalcule() method.
     *
     * @return void
     */
    public function testSetNbJhCalcule() {

        $obj = new TestFloatNbJhCalculeTrait();

        $obj->setNbJhCalcule(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJhCalcule());
    }
}
