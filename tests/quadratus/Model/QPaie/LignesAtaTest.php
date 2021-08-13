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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesAtaTest extends AbstractTestCase {

    /**
     * Tests the setAvantagesEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetAvantagesEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setAvantagesEuroOuFranc("avantagesEuroOuFranc");
        $this->assertEquals("avantagesEuroOuFranc", $obj->getAvantagesEuroOuFranc());
    }

    /**
     * Tests the setCsEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetCsEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setCsEuroOuFranc("csEuroOuFranc");
        $this->assertEquals("csEuroOuFranc", $obj->getCsEuroOuFranc());
    }

    /**
     * Tests the setDateEcheance() method.
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
     * Tests the setFraisProSoumis() method.
     *
     * @return void
     */
    public function testSetFraisProSoumis(): void {

        $obj = new LignesAta();

        $obj->setFraisProSoumis(10.092018);
        $this->assertEquals(10.092018, $obj->getFraisProSoumis());
    }

    /**
     * Tests the setFraisPsEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetFraisPsEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setFraisPsEuroOuFranc("fraisPsEuroOuFranc");
        $this->assertEquals("fraisPsEuroOuFranc", $obj->getFraisPsEuroOuFranc());
    }

    /**
     * Tests the setIndemnitesEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetIndemnitesEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setIndemnitesEuroOuFranc("indemnitesEuroOuFranc");
        $this->assertEquals("indemnitesEuroOuFranc", $obj->getIndemnitesEuroOuFranc());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesAta();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setMontantAvantages() method.
     *
     * @return void
     */
    public function testSetMontantAvantages(): void {

        $obj = new LignesAta();

        $obj->setMontantAvantages(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAvantages());
    }

    /**
     * Tests the setMontantCotis() method.
     *
     * @return void
     */
    public function testSetMontantCotis(): void {

        $obj = new LignesAta();

        $obj->setMontantCotis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantCotis());
    }

    /**
     * Tests the setMontantEuroOuFranc() method.
     *
     * @return void
     */
    public function testSetMontantEuroOuFranc(): void {

        $obj = new LignesAta();

        $obj->setMontantEuroOuFranc("montantEuroOuFranc");
        $this->assertEquals("montantEuroOuFranc", $obj->getMontantEuroOuFranc());
    }

    /**
     * Tests the setMontantIndemnites() method.
     *
     * @return void
     */
    public function testSetMontantIndemnites(): void {

        $obj = new LignesAta();

        $obj->setMontantIndemnites(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantIndemnites());
    }

    /**
     * Tests the setNbHTrav() method.
     *
     * @return void
     */
    public function testSetNbHTrav(): void {

        $obj = new LignesAta();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesAta();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAttestation() method.
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesAta();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests the setPeriodeDeb() method.
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
     * Tests the setPeriodeFin() method.
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
     * Tests the setTauxDedSup() method.
     *
     * @return void
     */
    public function testSetTauxDedSup(): void {

        $obj = new LignesAta();

        $obj->setTauxDedSup(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDedSup());
    }

    /**
     * Tests the __construct() method.
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
