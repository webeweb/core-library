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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ConstantesEntreprise2;

/**
 * Constantes entreprise2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2Test extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstantesEntreprise2();

        $this->assertNull($obj->getDateApplicationFSLisse());
        $this->assertNull($obj->getDateApplicationForfaitSocial8());
        $this->assertNull($obj->getGereEVTFinContratLot());
        $this->assertNull($obj->getGerePrevNormeDSN());
        $this->assertNull($obj->getGestionDSN());
        $this->assertNull($obj->getNEvenementDSN());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getRegimeMixteMSA());
        $this->assertNull($obj->getTauxPrimeAnnuellePropreteMoins20Ans());
        $this->assertNull($obj->getTauxPrimeAnnuellePropretePlus20Ans());
    }

    /**
     * Tests the setDateApplicationFSLisse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplicationFSLisse() {

        $obj = new ConstantesEntreprise2();

        $obj->setDateApplicationFSLisse(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplicationFSLisse());
    }

    /**
     * Tests the setDateApplicationForfaitSocial8() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplicationForfaitSocial8() {

        $obj = new ConstantesEntreprise2();

        $obj->setDateApplicationForfaitSocial8(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplicationForfaitSocial8());
    }

    /**
     * Tests the setGereEVTFinContratLot() method.
     *
     * @return void
     */
    public function testSetGereEVTFinContratLot() {

        $obj = new ConstantesEntreprise2();

        $obj->setGereEVTFinContratLot(true);
        $this->assertEquals(true, $obj->getGereEVTFinContratLot());
    }

    /**
     * Tests the setGerePrevNormeDSN() method.
     *
     * @return void
     */
    public function testSetGerePrevNormeDSN() {

        $obj = new ConstantesEntreprise2();

        $obj->setGerePrevNormeDSN(true);
        $this->assertEquals(true, $obj->getGerePrevNormeDSN());
    }

    /**
     * Tests the setGestionDSN() method.
     *
     * @return void
     */
    public function testSetGestionDSN() {

        $obj = new ConstantesEntreprise2();

        $obj->setGestionDSN(true);
        $this->assertEquals(true, $obj->getGestionDSN());
    }

    /**
     * Tests the setNEvenementDSN() method.
     *
     * @return void
     */
    public function testSetNEvenementDSN() {

        $obj = new ConstantesEntreprise2();

        $obj->setNEvenementDSN(10);
        $this->assertEquals(10, $obj->getNEvenementDSN());
    }

    /**
     * Tests the setNePasActiverPrimeAnnuelleProprete() method.
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete() {

        $obj = new ConstantesEntreprise2();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertEquals(true, $obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Tests the setRegimeMixteMSA() method.
     *
     * @return void
     */
    public function testSetRegimeMixteMSA() {

        $obj = new ConstantesEntreprise2();

        $obj->setRegimeMixteMSA(true);
        $this->assertEquals(true, $obj->getRegimeMixteMSA());
    }

    /**
     * Tests the setTauxPrimeAnnuellePropreteMoins20Ans() method.
     *
     * @return void
     */
    public function testSetTauxPrimeAnnuellePropreteMoins20Ans() {

        $obj = new ConstantesEntreprise2();

        $obj->setTauxPrimeAnnuellePropreteMoins20Ans(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrimeAnnuellePropreteMoins20Ans());
    }

    /**
     * Tests the setTauxPrimeAnnuellePropretePlus20Ans() method.
     *
     * @return void
     */
    public function testSetTauxPrimeAnnuellePropretePlus20Ans() {

        $obj = new ConstantesEntreprise2();

        $obj->setTauxPrimeAnnuellePropretePlus20Ans(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrimeAnnuellePropretePlus20Ans());
    }
}
