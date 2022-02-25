<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\AbsEmpRemplacants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Abs emp remplacants test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AbsEmpRemplacantsTest extends AbstractTestCase {

    /**
     * Tests setAjouterEnHCompl()
     *
     * @return void
     */
    public function testSetAjouterEnHCompl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setAjouterEnHCompl(true);
        $this->assertEquals(true, $obj->getAjouterEnHCompl());
    }

    /**
     * Tests setAvenantHRempl()
     *
     * @return void
     */
    public function testSetAvenantHRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setAvenantHRempl(true);
        $this->assertEquals(true, $obj->getAvenantHRempl());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAffaireRempl()
     *
     * @return void
     */
    public function testSetCodeAffaireRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeAffaireRempl("codeAffaireRempl");
        $this->assertEquals("codeAffaireRempl", $obj->getCodeAffaireRempl());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeChantierRempl()
     *
     * @return void
     */
    public function testSetCodeChantierRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeChantierRempl("codeChantierRempl");
        $this->assertEquals("codeChantierRempl", $obj->getCodeChantierRempl());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeClientRempl()
     *
     * @return void
     */
    public function testSetCodeClientRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeClientRempl("codeClientRempl");
        $this->assertEquals("codeClientRempl", $obj->getCodeClientRempl());
    }

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodeRemplacant()
     *
     * @return void
     */
    public function testSetCodeRemplacant(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setCodeTacheRempl()
     *
     * @return void
     */
    public function testSetCodeTacheRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeTacheRempl("codeTacheRempl");
        $this->assertEquals("codeTacheRempl", $obj->getCodeTacheRempl());
    }

    /**
     * Tests setDateAbsDecalee()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAbsDecalee(): void {

        // Set a Date/time mock.
        $dateAbsDecalee = new DateTime("2018-09-10");

        $obj = new AbsEmpRemplacants();

        $obj->setDateAbsDecalee($dateAbsDecalee);
        $this->assertSame($dateAbsDecalee, $obj->getDateAbsDecalee());
    }

    /**
     * Tests setDateDebutAbs()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutAbs(): void {

        // Set a Date/time mock.
        $dateDebutAbs = new DateTime("2018-09-10");

        $obj = new AbsEmpRemplacants();

        $obj->setDateDebutAbs($dateDebutAbs);
        $this->assertSame($dateDebutAbs, $obj->getDateDebutAbs());
    }

    /**
     * Tests setDateDebutRempl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutRempl(): void {

        // Set a Date/time mock.
        $dateDebutRempl = new DateTime("2018-09-10");

        $obj = new AbsEmpRemplacants();

        $obj->setDateDebutRempl($dateDebutRempl);
        $this->assertSame($dateDebutRempl, $obj->getDateDebutRempl());
    }

    /**
     * Tests setDateFinRempl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinRempl(): void {

        // Set a Date/time mock.
        $dateFinRempl = new DateTime("2018-09-10");

        $obj = new AbsEmpRemplacants();

        $obj->setDateFinRempl($dateFinRempl);
        $this->assertSame($dateFinRempl, $obj->getDateFinRempl());
    }

    /**
     * Tests setDateValidationSynchro()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new AbsEmpRemplacants();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setDureeRemplacement()
     *
     * @return void
     */
    public function testSetDureeRemplacement(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setDureeRemplacement(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeRemplacement());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setNumBtRempl()
     *
     * @return void
     */
    public function testSetNumBtRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setNumBtRempl(10);
        $this->assertEquals(10, $obj->getNumBtRempl());
    }

    /**
     * Tests setNumRempl()
     *
     * @return void
     */
    public function testSetNumRempl(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setNumRempl(10);
        $this->assertEquals(10, $obj->getNumRempl());
    }

    /**
     * Tests setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests setRemplacantTravailleJf()
     *
     * @return void
     */
    public function testSetRemplacantTravailleJf(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setRemplacantTravailleJf(true);
        $this->assertEquals(true, $obj->getRemplacantTravailleJf());
    }

    /**
     * Tests setRemplacementComplet()
     *
     * @return void
     */
    public function testSetRemplacementComplet(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setRemplacementComplet(true);
        $this->assertEquals(true, $obj->getRemplacementComplet());
    }

    /**
     * Tests setRemplacementModifie()
     *
     * @return void
     */
    public function testSetRemplacementModifie(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setRemplacementModifie(true);
        $this->assertEquals(true, $obj->getRemplacementModifie());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new AbsEmpRemplacants();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AbsEmpRemplacants();

        $this->assertNull($obj->getAjouterEnHCompl());
        $this->assertNull($obj->getAvenantHRempl());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAffaireRempl());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeChantierRempl());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientRempl());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeRemplacant());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeTacheRempl());
        $this->assertNull($obj->getDateAbsDecalee());
        $this->assertNull($obj->getDateDebutAbs());
        $this->assertNull($obj->getDateDebutRempl());
        $this->assertNull($obj->getDateFinRempl());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getDureeRemplacement());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumBtRempl());
        $this->assertNull($obj->getNumRempl());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getRemplacantTravailleJf());
        $this->assertNull($obj->getRemplacementComplet());
        $this->assertNull($obj->getRemplacementModifie());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
