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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\ConstantesEntreprise2;

/**
 * Constantes entreprise2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ConstantesEntreprise2();

        $this->assertNull($obj->getDateApplicationFsLisse());
        $this->assertNull($obj->getDateApplicationForfaitSocial8());
        $this->assertNull($obj->getGereEvtFinContratLot());
        $this->assertNull($obj->getGerePrevNormeDsn());
        $this->assertNull($obj->getGestionDsn());
        $this->assertNull($obj->getNEvenementDsn());
        $this->assertNull($obj->getNePasActiverPrimeAnnuelleProprete());
        $this->assertNull($obj->getRegimeMixteMsa());
        $this->assertNull($obj->getTauxPrimeAnnuellePropreteMoins20Ans());
        $this->assertNull($obj->getTauxPrimeAnnuellePropretePlus20Ans());
    }

    /**
     * Tests the setDateApplicationForfaitSocial8() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplicationForfaitSocial8() {

        // Set a Date/time mock.
        $dateApplicationForfaitSocial8 = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise2();

        $obj->setDateApplicationForfaitSocial8($dateApplicationForfaitSocial8);
        $this->assertSame($dateApplicationForfaitSocial8, $obj->getDateApplicationForfaitSocial8());
    }

    /**
     * Tests the setDateApplicationFsLisse() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplicationFsLisse() {

        // Set a Date/time mock.
        $dateApplicationFsLisse = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise2();

        $obj->setDateApplicationFsLisse($dateApplicationFsLisse);
        $this->assertSame($dateApplicationFsLisse, $obj->getDateApplicationFsLisse());
    }

    /**
     * Tests the setGereEvtFinContratLot() method.
     *
     * @return void
     */
    public function testSetGereEvtFinContratLot() {

        $obj = new ConstantesEntreprise2();

        $obj->setGereEvtFinContratLot(true);
        $this->assertEquals(true, $obj->getGereEvtFinContratLot());
    }

    /**
     * Tests the setGerePrevNormeDsn() method.
     *
     * @return void
     */
    public function testSetGerePrevNormeDsn() {

        $obj = new ConstantesEntreprise2();

        $obj->setGerePrevNormeDsn(true);
        $this->assertEquals(true, $obj->getGerePrevNormeDsn());
    }

    /**
     * Tests the setGestionDsn() method.
     *
     * @return void
     */
    public function testSetGestionDsn() {

        $obj = new ConstantesEntreprise2();

        $obj->setGestionDsn(true);
        $this->assertEquals(true, $obj->getGestionDsn());
    }

    /**
     * Tests the setNEvenementDsn() method.
     *
     * @return void
     */
    public function testSetNEvenementDsn() {

        $obj = new ConstantesEntreprise2();

        $obj->setNEvenementDsn(10);
        $this->assertEquals(10, $obj->getNEvenementDsn());
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
     * Tests the setRegimeMixteMsa() method.
     *
     * @return void
     */
    public function testSetRegimeMixteMsa() {

        $obj = new ConstantesEntreprise2();

        $obj->setRegimeMixteMsa(true);
        $this->assertEquals(true, $obj->getRegimeMixteMsa());
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
