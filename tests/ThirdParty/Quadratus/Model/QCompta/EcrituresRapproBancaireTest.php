<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\EcrituresRapproBancaire;

/**
 * Ecritures rappro bancaire test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresRapproBancaireTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EcrituresRapproBancaire();

        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getDateRapproBancaire());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getJrnRapproBancaire());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getRapproBancaireOk());
    }
}
