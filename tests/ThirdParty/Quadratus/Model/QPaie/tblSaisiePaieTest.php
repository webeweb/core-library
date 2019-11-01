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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\tblSaisiePaie;

/**
 * tbl saisie paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class tblSaisiePaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new tblSaisiePaie();

        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getMoisDebFixe());
        $this->assertNull($obj->getMoisFinFixe());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodeRappel());
        $this->assertNull($obj->getPosit());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getValeur1());
        $this->assertNull($obj->getValeur2());
    }
}
