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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEtatDasRectTrait;

/**
 * Etat d a s rect trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEtatDasRectTraitTest extends AbstractTestCase {

    /**
     * Tests the setEtatDasRect() method.
     *
     * @return void
     */
    public function testSetEtatDasRect() {

        $obj = new TestStringEtatDasRectTrait();

        $obj->setEtatDasRect("etatDasRect");
        $this->assertEquals("etatDasRect", $obj->getEtatDasRect());
    }
}
