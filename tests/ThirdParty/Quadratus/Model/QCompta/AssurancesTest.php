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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Assurances;

/**
 * Assurances test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class AssurancesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Assurances();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getCompagnie());
        $this->assertNull($obj->getCourtier());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateInitiale());
        $this->assertNull($obj->getDateSignature1());
        $this->assertNull($obj->getDateSignature2());
        $this->assertNull($obj->getDateSignature3());
        $this->assertNull($obj->getDateSignature4());
        $this->assertNull($obj->getDateSignature5());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureePreavis());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantAnnuel1());
        $this->assertNull($obj->getMontantAnnuel2());
        $this->assertNull($obj->getMontantAnnuel3());
        $this->assertNull($obj->getMontantAnnuel4());
        $this->assertNull($obj->getMontantAnnuel5());
        $this->assertNull($obj->getMontantFixe());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptAssurance());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getUniteDuree());
    }
}
