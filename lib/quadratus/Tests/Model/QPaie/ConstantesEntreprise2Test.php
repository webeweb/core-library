<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\ConstantesEntreprise2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes entreprise2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ConstantesEntreprise2Test extends AbstractTestCase {

    /**
     * Test setDateApplicationForfaitSocial8()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateApplicationForfaitSocial8(): void {

        // Set a Date/time mock.
        $dateApplicationForfaitSocial8 = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise2();

        $obj->setDateApplicationForfaitSocial8($dateApplicationForfaitSocial8);
        $this->assertSame($dateApplicationForfaitSocial8, $obj->getDateApplicationForfaitSocial8());
    }

    /**
     * Test setDateApplicationFsLisse()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateApplicationFsLisse(): void {

        // Set a Date/time mock.
        $dateApplicationFsLisse = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise2();

        $obj->setDateApplicationFsLisse($dateApplicationFsLisse);
        $this->assertSame($dateApplicationFsLisse, $obj->getDateApplicationFsLisse());
    }

    /**
     * Test setGereEvtFinContratLot()
     *
     * @return void
     */
    public function testSetGereEvtFinContratLot(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setGereEvtFinContratLot(true);
        $this->assertTrue($obj->getGereEvtFinContratLot());
    }

    /**
     * Test setGerePrevNormeDsn()
     *
     * @return void
     */
    public function testSetGerePrevNormeDsn(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setGerePrevNormeDsn(true);
        $this->assertTrue($obj->getGerePrevNormeDsn());
    }

    /**
     * Test setGestionDsn()
     *
     * @return void
     */
    public function testSetGestionDsn(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setGestionDsn(true);
        $this->assertTrue($obj->getGestionDsn());
    }

    /**
     * Test setNEvenementDsn()
     *
     * @return void
     */
    public function testSetNEvenementDsn(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setNEvenementDsn(10);
        $this->assertEquals(10, $obj->getNEvenementDsn());
    }

    /**
     * Test setNePasActiverPrimeAnnuelleProprete()
     *
     * @return void
     */
    public function testSetNePasActiverPrimeAnnuelleProprete(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setNePasActiverPrimeAnnuelleProprete(true);
        $this->assertTrue($obj->getNePasActiverPrimeAnnuelleProprete());
    }

    /**
     * Test setRegimeMixteMsa()
     *
     * @return void
     */
    public function testSetRegimeMixteMsa(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setRegimeMixteMsa(true);
        $this->assertTrue($obj->getRegimeMixteMsa());
    }

    /**
     * Test setTauxPrimeAnnuellePropreteMoins20Ans()
     *
     * @return void
     */
    public function testSetTauxPrimeAnnuellePropreteMoins20Ans(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setTauxPrimeAnnuellePropreteMoins20Ans(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrimeAnnuellePropreteMoins20Ans());
    }

    /**
     * Test setTauxPrimeAnnuellePropretePlus20Ans()
     *
     * @return void
     */
    public function testSetTauxPrimeAnnuellePropretePlus20Ans(): void {

        $obj = new ConstantesEntreprise2();

        $obj->setTauxPrimeAnnuellePropretePlus20Ans(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrimeAnnuellePropretePlus20Ans());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
