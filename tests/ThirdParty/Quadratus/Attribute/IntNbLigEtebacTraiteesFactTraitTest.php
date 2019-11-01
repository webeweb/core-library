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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbLigEtebacTraiteesFactTrait;

/**
 * Nb lig etebac traitees fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbLigEtebacTraiteesFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbLigEtebacTraiteesFact() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraiteesFact() {

        $obj = new TestIntNbLigEtebacTraiteesFactTrait();

        $obj->setNbLigEtebacTraiteesFact(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraiteesFact());
    }
}
