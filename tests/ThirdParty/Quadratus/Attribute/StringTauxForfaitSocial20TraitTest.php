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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTauxForfaitSocial20Trait;

/**
 * Taux forfait social20 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTauxForfaitSocial20TraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxForfaitSocial20() method.
     *
     * @return void
     */
    public function testSetTauxForfaitSocial20() {

        $obj = new TestStringTauxForfaitSocial20Trait();

        $obj->setTauxForfaitSocial20("tauxForfaitSocial20");
        $this->assertEquals("tauxForfaitSocial20", $obj->getTauxForfaitSocial20());
    }
}
