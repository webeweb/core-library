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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolOpReponseNegativeTrait;

/**
 * Op_ reponse negative trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolOpReponseNegativeTraitTest extends AbstractTestCase {

    /**
     * Tests the setOpReponseNegative() method.
     *
     * @return void
     */
    public function testSetOpReponseNegative() {

        $obj = new TestBoolOpReponseNegativeTrait();

        $obj->setOpReponseNegative(true);
        $this->assertEquals(true, $obj->getOpReponseNegative());
    }
}
