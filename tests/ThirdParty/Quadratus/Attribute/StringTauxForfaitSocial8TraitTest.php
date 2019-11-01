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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTauxForfaitSocial8Trait;

/**
 * Taux forfait social8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTauxForfaitSocial8TraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetTauxForfaitSocial8() {

        $obj = new TestStringTauxForfaitSocial8Trait();

        $obj->setTauxForfaitSocial8("tauxForfaitSocial8");
        $this->assertEquals("tauxForfaitSocial8", $obj->getTauxForfaitSocial8());
    }
}
