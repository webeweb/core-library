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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPlafondMaladieTrait;

/**
 * Plafond maladie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPlafondMaladieTraitTest extends AbstractTestCase {

    /**
     * Tests the setPlafondMaladie() method.
     *
     * @return void
     */
    public function testSetPlafondMaladie() {

        $obj = new TestFloatPlafondMaladieTrait();

        $obj->setPlafondMaladie(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondMaladie());
    }
}
