<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpRecapPenibilite;

/**
 * Emp recap penibilite test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpRecapPenibiliteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpRecapPenibilite();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getIdRecap());
        $this->assertNull($obj->getIndiceBul());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getReguleTraitee());
    }
}
