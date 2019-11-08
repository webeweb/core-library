<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iComptaDroits;

/**
 * i compta droits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iComptaDroitsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iComptaDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateLimiteVisu());
        $this->assertNull($obj->getDroitClients());
        $this->assertNull($obj->getDroitFournisseurs());
        $this->assertNull($obj->getDroitGeneraux());
        $this->assertNull($obj->getDroitModifCompte());
        $this->assertNull($obj->getEspaceClient());
        $this->assertNull($obj->getFctBalanceClient());
        $this->assertNull($obj->getFctBalanceFournisseur());
        $this->assertNull($obj->getFctBalanceGenerale());
        $this->assertNull($obj->getFctConsultDa());
        $this->assertNull($obj->getFctConsultDc());
        $this->assertNull($obj->getFctDeclareTva());
        $this->assertNull($obj->getFctDelettrage());
        $this->assertNull($obj->getFctEditionJournaux());
        $this->assertNull($obj->getFctInterrogationCpt());
        $this->assertNull($obj->getFctLettrage());
        $this->assertNull($obj->getFctModifEcriture());
        $this->assertNull($obj->getFctRapprochBanq());
        $this->assertNull($obj->getFctSaisieAchats());
        $this->assertNull($obj->getFctSaisieBanques());
        $this->assertNull($obj->getFctSaisieCaisseOrientee());
        $this->assertNull($obj->getFctSaisieEtebac());
        $this->assertNull($obj->getFctSaisieStandard());
        $this->assertNull($obj->getFctSaisieTrame());
        $this->assertNull($obj->getFctSaisieVentes());
        $this->assertNull($obj->getFctSupprEcriture());
        $this->assertNull($obj->getFctTableBord());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getNiveauDroitClients());
        $this->assertNull($obj->getNiveauDroitFournisseurs());
        $this->assertNull($obj->getNiveauDroitGeneraux());
        $this->assertNull($obj->getNoDossCpta());
        $this->assertNull($obj->getNomUser());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getPeriodeSaisieDeb());
        $this->assertNull($obj->getPeriodeSaisieFin());
    }

    /**
     * Tests the setCodeCollabMessages() method.
     *
     * @return void
     */
    public function testSetCodeCollabMessages() {

        $obj = new iComptaDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser() {

        $obj = new iComptaDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setDateLimiteVisu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteVisu() {

        // Set a Date/time mock.
        $dateLimiteVisu = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setDateLimiteVisu($dateLimiteVisu);
        $this->assertSame($dateLimiteVisu, $obj->getDateLimiteVisu());
    }

    /**
     * Tests the setDroitClients() method.
     *
     * @return void
     */
    public function testSetDroitClients() {

        $obj = new iComptaDroits();

        $obj->setDroitClients("droitClients");
        $this->assertEquals("droitClients", $obj->getDroitClients());
    }

    /**
     * Tests the setDroitFournisseurs() method.
     *
     * @return void
     */
    public function testSetDroitFournisseurs() {

        $obj = new iComptaDroits();

        $obj->setDroitFournisseurs("droitFournisseurs");
        $this->assertEquals("droitFournisseurs", $obj->getDroitFournisseurs());
    }

    /**
     * Tests the setDroitGeneraux() method.
     *
     * @return void
     */
    public function testSetDroitGeneraux() {

        $obj = new iComptaDroits();

        $obj->setDroitGeneraux("droitGeneraux");
        $this->assertEquals("droitGeneraux", $obj->getDroitGeneraux());
    }

    /**
     * Tests the setDroitModifCompte() method.
     *
     * @return void
     */
    public function testSetDroitModifCompte() {

        $obj = new iComptaDroits();

        $obj->setDroitModifCompte("droitModifCompte");
        $this->assertEquals("droitModifCompte", $obj->getDroitModifCompte());
    }

    /**
     * Tests the setEspaceClient() method.
     *
     * @return void
     */
    public function testSetEspaceClient() {

        $obj = new iComptaDroits();

        $obj->setEspaceClient(true);
        $this->assertEquals(true, $obj->getEspaceClient());
    }

    /**
     * Tests the setFctBalanceClient() method.
     *
     * @return void
     */
    public function testSetFctBalanceClient() {

        $obj = new iComptaDroits();

        $obj->setFctBalanceClient(true);
        $this->assertEquals(true, $obj->getFctBalanceClient());
    }

    /**
     * Tests the setFctBalanceFournisseur() method.
     *
     * @return void
     */
    public function testSetFctBalanceFournisseur() {

        $obj = new iComptaDroits();

        $obj->setFctBalanceFournisseur(true);
        $this->assertEquals(true, $obj->getFctBalanceFournisseur());
    }

    /**
     * Tests the setFctBalanceGenerale() method.
     *
     * @return void
     */
    public function testSetFctBalanceGenerale() {

        $obj = new iComptaDroits();

        $obj->setFctBalanceGenerale(true);
        $this->assertEquals(true, $obj->getFctBalanceGenerale());
    }

    /**
     * Tests the setFctConsultDa() method.
     *
     * @return void
     */
    public function testSetFctConsultDa() {

        $obj = new iComptaDroits();

        $obj->setFctConsultDa(true);
        $this->assertEquals(true, $obj->getFctConsultDa());
    }

    /**
     * Tests the setFctConsultDc() method.
     *
     * @return void
     */
    public function testSetFctConsultDc() {

        $obj = new iComptaDroits();

        $obj->setFctConsultDc(true);
        $this->assertEquals(true, $obj->getFctConsultDc());
    }

    /**
     * Tests the setFctDeclareTva() method.
     *
     * @return void
     */
    public function testSetFctDeclareTva() {

        $obj = new iComptaDroits();

        $obj->setFctDeclareTva(true);
        $this->assertEquals(true, $obj->getFctDeclareTva());
    }

    /**
     * Tests the setFctDelettrage() method.
     *
     * @return void
     */
    public function testSetFctDelettrage() {

        $obj = new iComptaDroits();

        $obj->setFctDelettrage(true);
        $this->assertEquals(true, $obj->getFctDelettrage());
    }

    /**
     * Tests the setFctEditionJournaux() method.
     *
     * @return void
     */
    public function testSetFctEditionJournaux() {

        $obj = new iComptaDroits();

        $obj->setFctEditionJournaux(true);
        $this->assertEquals(true, $obj->getFctEditionJournaux());
    }

    /**
     * Tests the setFctInterrogationCpt() method.
     *
     * @return void
     */
    public function testSetFctInterrogationCpt() {

        $obj = new iComptaDroits();

        $obj->setFctInterrogationCpt(true);
        $this->assertEquals(true, $obj->getFctInterrogationCpt());
    }

    /**
     * Tests the setFctLettrage() method.
     *
     * @return void
     */
    public function testSetFctLettrage() {

        $obj = new iComptaDroits();

        $obj->setFctLettrage(true);
        $this->assertEquals(true, $obj->getFctLettrage());
    }

    /**
     * Tests the setFctModifEcriture() method.
     *
     * @return void
     */
    public function testSetFctModifEcriture() {

        $obj = new iComptaDroits();

        $obj->setFctModifEcriture(true);
        $this->assertEquals(true, $obj->getFctModifEcriture());
    }

    /**
     * Tests the setFctRapprochBanq() method.
     *
     * @return void
     */
    public function testSetFctRapprochBanq() {

        $obj = new iComptaDroits();

        $obj->setFctRapprochBanq(true);
        $this->assertEquals(true, $obj->getFctRapprochBanq());
    }

    /**
     * Tests the setFctSaisieAchats() method.
     *
     * @return void
     */
    public function testSetFctSaisieAchats() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieAchats(true);
        $this->assertEquals(true, $obj->getFctSaisieAchats());
    }

    /**
     * Tests the setFctSaisieBanques() method.
     *
     * @return void
     */
    public function testSetFctSaisieBanques() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieBanques(true);
        $this->assertEquals(true, $obj->getFctSaisieBanques());
    }

    /**
     * Tests the setFctSaisieCaisseOrientee() method.
     *
     * @return void
     */
    public function testSetFctSaisieCaisseOrientee() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieCaisseOrientee(10);
        $this->assertEquals(10, $obj->getFctSaisieCaisseOrientee());
    }

    /**
     * Tests the setFctSaisieEtebac() method.
     *
     * @return void
     */
    public function testSetFctSaisieEtebac() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieEtebac(true);
        $this->assertEquals(true, $obj->getFctSaisieEtebac());
    }

    /**
     * Tests the setFctSaisieStandard() method.
     *
     * @return void
     */
    public function testSetFctSaisieStandard() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieStandard(true);
        $this->assertEquals(true, $obj->getFctSaisieStandard());
    }

    /**
     * Tests the setFctSaisieTrame() method.
     *
     * @return void
     */
    public function testSetFctSaisieTrame() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieTrame(10);
        $this->assertEquals(10, $obj->getFctSaisieTrame());
    }

    /**
     * Tests the setFctSaisieVentes() method.
     *
     * @return void
     */
    public function testSetFctSaisieVentes() {

        $obj = new iComptaDroits();

        $obj->setFctSaisieVentes(true);
        $this->assertEquals(true, $obj->getFctSaisieVentes());
    }

    /**
     * Tests the setFctSupprEcriture() method.
     *
     * @return void
     */
    public function testSetFctSupprEcriture() {

        $obj = new iComptaDroits();

        $obj->setFctSupprEcriture(true);
        $this->assertEquals(true, $obj->getFctSupprEcriture());
    }

    /**
     * Tests the setFctTableBord() method.
     *
     * @return void
     */
    public function testSetFctTableBord() {

        $obj = new iComptaDroits();

        $obj->setFctTableBord(true);
        $this->assertEquals(true, $obj->getFctTableBord());
    }

    /**
     * Tests the setFlag() method.
     *
     * @return void
     */
    public function testSetFlag() {

        $obj = new iComptaDroits();

        $obj->setFlag("flag");
        $this->assertEquals("flag", $obj->getFlag());
    }

    /**
     * Tests the setNiveauDroitClients() method.
     *
     * @return void
     */
    public function testSetNiveauDroitClients() {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitClients("niveauDroitClients");
        $this->assertEquals("niveauDroitClients", $obj->getNiveauDroitClients());
    }

    /**
     * Tests the setNiveauDroitFournisseurs() method.
     *
     * @return void
     */
    public function testSetNiveauDroitFournisseurs() {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitFournisseurs("niveauDroitFournisseurs");
        $this->assertEquals("niveauDroitFournisseurs", $obj->getNiveauDroitFournisseurs());
    }

    /**
     * Tests the setNiveauDroitGeneraux() method.
     *
     * @return void
     */
    public function testSetNiveauDroitGeneraux() {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitGeneraux("niveauDroitGeneraux");
        $this->assertEquals("niveauDroitGeneraux", $obj->getNiveauDroitGeneraux());
    }

    /**
     * Tests the setNoDossCpta() method.
     *
     * @return void
     */
    public function testSetNoDossCpta() {

        $obj = new iComptaDroits();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Tests the setNomUser() method.
     *
     * @return void
     */
    public function testSetNomUser() {

        $obj = new iComptaDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Tests the setNumiKey() method.
     *
     * @return void
     */
    public function testSetNumiKey() {

        $obj = new iComptaDroits();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Tests the setPassword() method.
     *
     * @return void
     */
    public function testSetPassword() {

        $obj = new iComptaDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests the setPeriodeSaisieDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieDeb() {

        // Set a Date/time mock.
        $periodeSaisieDeb = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setPeriodeSaisieDeb($periodeSaisieDeb);
        $this->assertSame($periodeSaisieDeb, $obj->getPeriodeSaisieDeb());
    }

    /**
     * Tests the setPeriodeSaisieFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieFin() {

        // Set a Date/time mock.
        $periodeSaisieFin = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setPeriodeSaisieFin($periodeSaisieFin);
        $this->assertSame($periodeSaisieFin, $obj->getPeriodeSaisieFin());
    }
}
