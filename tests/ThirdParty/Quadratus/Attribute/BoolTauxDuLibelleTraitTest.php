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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTauxDuLibelleTrait;

/**
 * Taux du libelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTauxDuLibelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxDuLibelle() method.
     *
     * @return void
     */
    public function testSetTauxDuLibelle() {

        $obj = new TestBoolTauxDuLibelleTrait();

        $obj->setTauxDuLibelle(true);
        $this->assertEquals(true, $obj->getTauxDuLibelle());
    }
}
