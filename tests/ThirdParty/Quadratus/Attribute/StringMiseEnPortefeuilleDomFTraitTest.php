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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMiseEnPortefeuilleDomFTrait;

/**
 * Mise en portefeuille dom f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMiseEnPortefeuilleDomFTraitTest extends AbstractTestCase {

    /**
     * Tests the setMiseEnPortefeuilleDomF() method.
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleDomF() {

        $obj = new TestStringMiseEnPortefeuilleDomFTrait();

        $obj->setMiseEnPortefeuilleDomF("miseEnPortefeuilleDomF");
        $this->assertEquals("miseEnPortefeuilleDomF", $obj->getMiseEnPortefeuilleDomF());
    }
}
