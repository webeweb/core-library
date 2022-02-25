<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\iComptaDroits;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i compta droits test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iComptaDroitsTest extends AbstractTestCase {

    /**
     * Tests setCodeCollabMessages()
     *
     * @return void
     */
    public function testSetCodeCollabMessages(): void {

        $obj = new iComptaDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Tests setCodeUser()
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new iComptaDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests setDateLimiteVisu()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteVisu(): void {

        // Set a Date/time mock.
        $dateLimiteVisu = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setDateLimiteVisu($dateLimiteVisu);
        $this->assertSame($dateLimiteVisu, $obj->getDateLimiteVisu());
    }

    /**
     * Tests setDroitClients()
     *
     * @return void
     */
    public function testSetDroitClients(): void {

        $obj = new iComptaDroits();

        $obj->setDroitClients("droitClients");
        $this->assertEquals("droitClients", $obj->getDroitClients());
    }

    /**
     * Tests setDroitFournisseurs()
     *
     * @return void
     */
    public function testSetDroitFournisseurs(): void {

        $obj = new iComptaDroits();

        $obj->setDroitFournisseurs("droitFournisseurs");
        $this->assertEquals("droitFournisseurs", $obj->getDroitFournisseurs());
    }

    /**
     * Tests setDroitGeneraux()
     *
     * @return void
     */
    public function testSetDroitGeneraux(): void {

        $obj = new iComptaDroits();

        $obj->setDroitGeneraux("droitGeneraux");
        $this->assertEquals("droitGeneraux", $obj->getDroitGeneraux());
    }

    /**
     * Tests setDroitModifCompte()
     *
     * @return void
     */
    public function testSetDroitModifCompte(): void {

        $obj = new iComptaDroits();

        $obj->setDroitModifCompte("droitModifCompte");
        $this->assertEquals("droitModifCompte", $obj->getDroitModifCompte());
    }

    /**
     * Tests setEspaceClient()
     *
     * @return void
     */
    public function testSetEspaceClient(): void {

        $obj = new iComptaDroits();

        $obj->setEspaceClient(true);
        $this->assertEquals(true, $obj->getEspaceClient());
    }

    /**
     * Tests setFctBalanceClient()
     *
     * @return void
     */
    public function testSetFctBalanceClient(): void {

        $obj = new iComptaDroits();

        $obj->setFctBalanceClient(true);
        $this->assertEquals(true, $obj->getFctBalanceClient());
    }

    /**
     * Tests setFctBalanceFournisseur()
     *
     * @return void
     */
    public function testSetFctBalanceFournisseur(): void {

        $obj = new iComptaDroits();

        $obj->setFctBalanceFournisseur(true);
        $this->assertEquals(true, $obj->getFctBalanceFournisseur());
    }

    /**
     * Tests setFctBalanceGenerale()
     *
     * @return void
     */
    public function testSetFctBalanceGenerale(): void {

        $obj = new iComptaDroits();

        $obj->setFctBalanceGenerale(true);
        $this->assertEquals(true, $obj->getFctBalanceGenerale());
    }

    /**
     * Tests setFctConsultDa()
     *
     * @return void
     */
    public function testSetFctConsultDa(): void {

        $obj = new iComptaDroits();

        $obj->setFctConsultDa(true);
        $this->assertEquals(true, $obj->getFctConsultDa());
    }

    /**
     * Tests setFctConsultDc()
     *
     * @return void
     */
    public function testSetFctConsultDc(): void {

        $obj = new iComptaDroits();

        $obj->setFctConsultDc(true);
        $this->assertEquals(true, $obj->getFctConsultDc());
    }

    /**
     * Tests setFctDeclareTva()
     *
     * @return void
     */
    public function testSetFctDeclareTva(): void {

        $obj = new iComptaDroits();

        $obj->setFctDeclareTva(true);
        $this->assertEquals(true, $obj->getFctDeclareTva());
    }

    /**
     * Tests setFctDelettrage()
     *
     * @return void
     */
    public function testSetFctDelettrage(): void {

        $obj = new iComptaDroits();

        $obj->setFctDelettrage(true);
        $this->assertEquals(true, $obj->getFctDelettrage());
    }

    /**
     * Tests setFctEditionJournaux()
     *
     * @return void
     */
    public function testSetFctEditionJournaux(): void {

        $obj = new iComptaDroits();

        $obj->setFctEditionJournaux(true);
        $this->assertEquals(true, $obj->getFctEditionJournaux());
    }

    /**
     * Tests setFctInterrogationCpt()
     *
     * @return void
     */
    public function testSetFctInterrogationCpt(): void {

        $obj = new iComptaDroits();

        $obj->setFctInterrogationCpt(true);
        $this->assertEquals(true, $obj->getFctInterrogationCpt());
    }

    /**
     * Tests setFctLettrage()
     *
     * @return void
     */
    public function testSetFctLettrage(): void {

        $obj = new iComptaDroits();

        $obj->setFctLettrage(true);
        $this->assertEquals(true, $obj->getFctLettrage());
    }

    /**
     * Tests setFctModifEcriture()
     *
     * @return void
     */
    public function testSetFctModifEcriture(): void {

        $obj = new iComptaDroits();

        $obj->setFctModifEcriture(true);
        $this->assertEquals(true, $obj->getFctModifEcriture());
    }

    /**
     * Tests setFctRapprochBanq()
     *
     * @return void
     */
    public function testSetFctRapprochBanq(): void {

        $obj = new iComptaDroits();

        $obj->setFctRapprochBanq(true);
        $this->assertEquals(true, $obj->getFctRapprochBanq());
    }

    /**
     * Tests setFctSaisieAchats()
     *
     * @return void
     */
    public function testSetFctSaisieAchats(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieAchats(true);
        $this->assertEquals(true, $obj->getFctSaisieAchats());
    }

    /**
     * Tests setFctSaisieBanques()
     *
     * @return void
     */
    public function testSetFctSaisieBanques(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieBanques(true);
        $this->assertEquals(true, $obj->getFctSaisieBanques());
    }

    /**
     * Tests setFctSaisieCaisseOrientee()
     *
     * @return void
     */
    public function testSetFctSaisieCaisseOrientee(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieCaisseOrientee(10);
        $this->assertEquals(10, $obj->getFctSaisieCaisseOrientee());
    }

    /**
     * Tests setFctSaisieEtebac()
     *
     * @return void
     */
    public function testSetFctSaisieEtebac(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieEtebac(true);
        $this->assertEquals(true, $obj->getFctSaisieEtebac());
    }

    /**
     * Tests setFctSaisieStandard()
     *
     * @return void
     */
    public function testSetFctSaisieStandard(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieStandard(true);
        $this->assertEquals(true, $obj->getFctSaisieStandard());
    }

    /**
     * Tests setFctSaisieTrame()
     *
     * @return void
     */
    public function testSetFctSaisieTrame(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieTrame(10);
        $this->assertEquals(10, $obj->getFctSaisieTrame());
    }

    /**
     * Tests setFctSaisieVentes()
     *
     * @return void
     */
    public function testSetFctSaisieVentes(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieVentes(true);
        $this->assertEquals(true, $obj->getFctSaisieVentes());
    }

    /**
     * Tests setFctSupprEcriture()
     *
     * @return void
     */
    public function testSetFctSupprEcriture(): void {

        $obj = new iComptaDroits();

        $obj->setFctSupprEcriture(true);
        $this->assertEquals(true, $obj->getFctSupprEcriture());
    }

    /**
     * Tests setFctTableBord()
     *
     * @return void
     */
    public function testSetFctTableBord(): void {

        $obj = new iComptaDroits();

        $obj->setFctTableBord(true);
        $this->assertEquals(true, $obj->getFctTableBord());
    }

    /**
     * Tests setFlag()
     *
     * @return void
     */
    public function testSetFlag(): void {

        $obj = new iComptaDroits();

        $obj->setFlag("flag");
        $this->assertEquals("flag", $obj->getFlag());
    }

    /**
     * Tests setNiveauDroitClients()
     *
     * @return void
     */
    public function testSetNiveauDroitClients(): void {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitClients("niveauDroitClients");
        $this->assertEquals("niveauDroitClients", $obj->getNiveauDroitClients());
    }

    /**
     * Tests setNiveauDroitFournisseurs()
     *
     * @return void
     */
    public function testSetNiveauDroitFournisseurs(): void {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitFournisseurs("niveauDroitFournisseurs");
        $this->assertEquals("niveauDroitFournisseurs", $obj->getNiveauDroitFournisseurs());
    }

    /**
     * Tests setNiveauDroitGeneraux()
     *
     * @return void
     */
    public function testSetNiveauDroitGeneraux(): void {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitGeneraux("niveauDroitGeneraux");
        $this->assertEquals("niveauDroitGeneraux", $obj->getNiveauDroitGeneraux());
    }

    /**
     * Tests setNoDossCpta()
     *
     * @return void
     */
    public function testSetNoDossCpta(): void {

        $obj = new iComptaDroits();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Tests setNomUser()
     *
     * @return void
     */
    public function testSetNomUser(): void {

        $obj = new iComptaDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Tests setNumiKey()
     *
     * @return void
     */
    public function testSetNumiKey(): void {

        $obj = new iComptaDroits();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Tests setPassword()
     *
     * @return void
     */
    public function testSetPassword(): void {

        $obj = new iComptaDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Tests setPeriodeSaisieDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieDeb(): void {

        // Set a Date/time mock.
        $periodeSaisieDeb = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setPeriodeSaisieDeb($periodeSaisieDeb);
        $this->assertSame($periodeSaisieDeb, $obj->getPeriodeSaisieDeb());
    }

    /**
     * Tests setPeriodeSaisieFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieFin(): void {

        // Set a Date/time mock.
        $periodeSaisieFin = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setPeriodeSaisieFin($periodeSaisieFin);
        $this->assertSame($periodeSaisieFin, $obj->getPeriodeSaisieFin());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
