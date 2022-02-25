<?php

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
use Exception;
use WBW\Library\Quadratus\Model\QPaie\LignesAta;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes ata test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesAtaTest extends AbstractTestCase {

    /**
     * Tests setAvantagesEuroOuFranc()
     *
     * @return void
     */
    public function testSetAvantagesEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setAvantagesEuroOuFranc("avantagesEuroOuFranc");
        $this->assertEquals("avantagesEuroOuFranc", $obj->getAvantagesEuroOuFranc());
    }

    /**
     * Tests setCsEuroOuFranc()
     *
     * @return void
     */
    public function testSetCsEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setCsEuroOuFranc("csEuroOuFranc");
        $this->assertEquals("csEuroOuFranc", $obj->getCsEuroOuFranc());
    }

    /**
     * Tests setDateEcheance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new LignesAta();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests setFraisProSoumis()
     *
     * @return void
     */
    public function testSetFraisProSoumis(): void {

        $obj = new LignesAta();

        $obj->setFraisProSoumis(10.092018);
        $this->assertEquals(10.092018, $obj->getFraisProSoumis());
    }

    /**
     * Tests setFraisPsEuroOuFranc()
     *
     * @return void
     */
    public function testSetFraisPsEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setFraisPsEuroOuFranc("fraisPsEuroOuFranc");
        $this->assertEquals("fraisPsEuroOuFranc", $obj->getFraisPsEuroOuFranc());
    }

    /**
     * Tests setIndemnitesEuroOuFranc()
     *
     * @return void
     */
    public function testSetIndemnitesEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setIndemnitesEuroOuFranc("indemnitesEuroOuFranc");
        $this->assertEquals("indemnitesEuroOuFranc", $obj->getIndemnitesEuroOuFranc());
    }

    /**
     * Tests setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesAta();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests setMontantAvantages()
     *
     * @return void
     */
    public function testSetMontantAvantages(): void {

        $obj = new LignesAta();

        $obj->setMontantAvantages(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantages());
    }

    /**
     * Tests setMontantCotis()
     *
     * @return void
     */
    public function testSetMontantCotis(): void {

        $obj = new LignesAta();

        $obj->setMontantCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotis());
    }

    /**
     * Tests setMontantEuroOuFranc()
     *
     * @return void
     */
    public function testSetMontantEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setMontantEuroOuFranc("montantEuroOuFranc");
        $this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
    }

    /**
     * Tests setMontantIndemnites()
     *
     * @return void
     */
    public function testSetMontantIndemnites(): void {

        $obj = new LignesAta();

        $obj->setMontantIndemnites(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIndemnites());
    }

    /**
     * Tests setNbHTrav()
     *
     * @return void
     */
    public function testSetNbHTrav(): void {

        $obj = new LignesAta();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesAta();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesAta();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setPeriodeDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new LignesAta();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Tests setPeriodeFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new LignesAta();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Tests setTauxDedSup()
     *
     * @return void
     */
    public function testSetTauxDedSup(): void {

        $obj = new LignesAta();

        $obj->setTauxDedSup(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDedSup());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesAta();

        $this->assertNull($obj->getAvantagesEuroOuFranc());
        $this->assertNull($obj->getCsEuroOuFranc());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getFraisPsEuroOuFranc());
        $this->assertNull($obj->getFraisProSoumis());
        $this->assertNull($obj->getIndemnitesEuroOuFranc());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantAvantages());
        $this->assertNull($obj->getMontantCotis());
        $this->assertNull($obj->getMontantEuroOuFranc());
        $this->assertNull($obj->getMontantIndemnites());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTauxDedSup());
    }
}
