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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Contratslocatifs;

/**
 * Contratslocatifs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ContratslocatifsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Contratslocatifs();

        $this->assertNull($obj->getCaution());
        $this->assertNull($obj->getCaution2());
        $this->assertNull($obj->getCaution3());
        $this->assertNull($obj->getCaution4());
        $this->assertNull($obj->getCaution5());
        $this->assertNull($obj->getClausespeciale());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getDateAnniversaire());
        $this->assertNull($obj->getDateCaution());
        $this->assertNull($obj->getDateCaution2());
        $this->assertNull($obj->getDateCaution3());
        $this->assertNull($obj->getDateCaution4());
        $this->assertNull($obj->getDateCaution5());
        $this->assertNull($obj->getDateSignature());
        $this->assertNull($obj->getDateSignature2());
        $this->assertNull($obj->getDateSignature3());
        $this->assertNull($obj->getDateSignature4());
        $this->assertNull($obj->getDateSignature5());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureePreavis());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaieCaution());
        $this->assertNull($obj->getMonnaieLoyer());
        $this->assertNull($obj->getMontantAnnuel());
        $this->assertNull($obj->getMontantAnnuel2());
        $this->assertNull($obj->getMontantAnnuel3());
        $this->assertNull($obj->getMontantAnnuel4());
        $this->assertNull($obj->getMontantAnnuel5());
        $this->assertNull($obj->getMontantCharges());
        $this->assertNull($obj->getMontantCharges2());
        $this->assertNull($obj->getMontantCharges3());
        $this->assertNull($obj->getMontantCharges4());
        $this->assertNull($obj->getMontantCharges5());
        $this->assertNull($obj->getNumCptCaution());
        $this->assertNull($obj->getNumCptCharges());
        $this->assertNull($obj->getNumCptLoyer());
        $this->assertNull($obj->getNumOrdre());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getUniteDuree());
    }
}
