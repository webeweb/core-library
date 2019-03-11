<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AbsEmpRemplacants;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Abs emp remplacants model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AbsEmpRemplacantsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumBTRempl());
        $this->assertNull($obj->getNumRempl());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getRemplacantTravailleJF());
        $this->assertNull($obj->getRemplacementComplet());
        $this->assertNull($obj->getRemplacementModifie());
        $this->assertNull($obj->getUniqIDSynchro());
    }

    /**
     * Tests the setAjouterEnHCompl() method.
     *
     * @return void
     */
    public function testSetAjouterEnHCompl() {

        $obj = new AbsEmpRemplacants();

        $obj->setAjouterEnHCompl(true);
        $this->assertEquals(true, $obj->getAjouterEnHCompl());
    }

    /**
     * Tests the setAvenantHRempl() method.
     *
     * @return void
     */
    public function testSetAvenantHRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setAvenantHRempl(true);
        $this->assertEquals(true, $obj->getAvenantHRempl());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAffaireRempl() method.
     *
     * @return void
     */
    public function testSetCodeAffaireRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeAffaireRempl("codeAffaireRempl");
        $this->assertEquals("codeAffaireRempl", $obj->getCodeAffaireRempl());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeChantierRempl() method.
     *
     * @return void
     */
    public function testSetCodeChantierRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeChantierRempl("codeChantierRempl");
        $this->assertEquals("codeChantierRempl", $obj->getCodeChantierRempl());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeClientRempl() method.
     *
     * @return void
     */
    public function testSetCodeClientRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeClientRempl("codeClientRempl");
        $this->assertEquals("codeClientRempl", $obj->getCodeClientRempl());
    }

    /**
     * Tests the setCodeCollaboValid() method.
     *
     * @return void
     */
    public function testSetCodeCollaboValid() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeRemplacant() method.
     *
     * @return void
     */
    public function testSetCodeRemplacant() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeRemplacant("codeRemplacant");
        $this->assertEquals("codeRemplacant", $obj->getCodeRemplacant());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setCodeTacheRempl() method.
     *
     * @return void
     */
    public function testSetCodeTacheRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setCodeTacheRempl("codeTacheRempl");
        $this->assertEquals("codeTacheRempl", $obj->getCodeTacheRempl());
    }

    /**
     * Tests the setDateAbsDecalee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAbsDecalee() {

        $obj = new AbsEmpRemplacants();

        $obj->setDateAbsDecalee(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAbsDecalee());
    }

    /**
     * Tests the setDateDebutAbs() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutAbs() {

        $obj = new AbsEmpRemplacants();

        $obj->setDateDebutAbs(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutAbs());
    }

    /**
     * Tests the setDateDebutRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setDateDebutRempl(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebutRempl());
    }

    /**
     * Tests the setDateFinRempl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setDateFinRempl(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinRempl());
    }

    /**
     * Tests the setDateValidationSynchro() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro() {

        $obj = new AbsEmpRemplacants();

        $obj->setDateValidationSynchro(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidationSynchro());
    }

    /**
     * Tests the setDureeRemplacement() method.
     *
     * @return void
     */
    public function testSetDureeRemplacement() {

        $obj = new AbsEmpRemplacants();

        $obj->setDureeRemplacement(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeRemplacement());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new AbsEmpRemplacants();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new AbsEmpRemplacants();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumBTRempl() method.
     *
     * @return void
     */
    public function testSetNumBTRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setNumBTRempl(10);
        $this->assertEquals(10, $obj->getNumBTRempl());
    }

    /**
     * Tests the setNumRempl() method.
     *
     * @return void
     */
    public function testSetNumRempl() {

        $obj = new AbsEmpRemplacants();

        $obj->setNumRempl(10);
        $this->assertEquals(10, $obj->getNumRempl());
    }

    /**
     * Tests the setNumeroAvenant() method.
     *
     * @return void
     */
    public function testSetNumeroAvenant() {

        $obj = new AbsEmpRemplacants();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Tests the setRemplacantTravailleJF() method.
     *
     * @return void
     */
    public function testSetRemplacantTravailleJF() {

        $obj = new AbsEmpRemplacants();

        $obj->setRemplacantTravailleJF(true);
        $this->assertEquals(true, $obj->getRemplacantTravailleJF());
    }

    /**
     * Tests the setRemplacementComplet() method.
     *
     * @return void
     */
    public function testSetRemplacementComplet() {

        $obj = new AbsEmpRemplacants();

        $obj->setRemplacementComplet(true);
        $this->assertEquals(true, $obj->getRemplacementComplet());
    }

    /**
     * Tests the setRemplacementModifie() method.
     *
     * @return void
     */
    public function testSetRemplacementModifie() {

        $obj = new AbsEmpRemplacants();

        $obj->setRemplacementModifie(true);
        $this->assertEquals(true, $obj->getRemplacementModifie());
    }

    /**
     * Tests the setUniqIDSynchro() method.
     *
     * @return void
     */
    public function testSetUniqIDSynchro() {

        $obj = new AbsEmpRemplacants();

        $obj->setUniqIDSynchro("uniqIDSynchro");
        $this->assertEquals("uniqIDSynchro", $obj->getUniqIDSynchro());
    }
}
