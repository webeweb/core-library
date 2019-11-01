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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbLigEtebacTraiteesTrait;

/**
 * Nb lig etebac traitees trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbLigEtebacTraiteesTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbLigEtebacTraitees() method.
     *
     * @return void
     */
    public function testSetNbLigEtebacTraitees() {

        $obj = new TestIntNbLigEtebacTraiteesTrait();

        $obj->setNbLigEtebacTraitees(10);
        $this->assertEquals(10, $obj->getNbLigEtebacTraitees());
    }
}
