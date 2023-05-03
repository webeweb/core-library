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
use Throwable;
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
     * Test setCodeCollabMessages()
     *
     * @return void
     */
    public function testSetCodeCollabMessages(): void {

        $obj = new iComptaDroits();

        $obj->setCodeCollabMessages("codeCollabMessages");
        $this->assertEquals("codeCollabMessages", $obj->getCodeCollabMessages());
    }

    /**
     * Test setCodeUser()
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new iComptaDroits();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Test setDateLimiteVisu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateLimiteVisu(): void {

        // Set a Date/time mock.
        $dateLimiteVisu = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setDateLimiteVisu($dateLimiteVisu);
        $this->assertSame($dateLimiteVisu, $obj->getDateLimiteVisu());
    }

    /**
     * Test setDroitClients()
     *
     * @return void
     */
    public function testSetDroitClients(): void {

        $obj = new iComptaDroits();

        $obj->setDroitClients("droitClients");
        $this->assertEquals("droitClients", $obj->getDroitClients());
    }

    /**
     * Test setDroitFournisseurs()
     *
     * @return void
     */
    public function testSetDroitFournisseurs(): void {

        $obj = new iComptaDroits();

        $obj->setDroitFournisseurs("droitFournisseurs");
        $this->assertEquals("droitFournisseurs", $obj->getDroitFournisseurs());
    }

    /**
     * Test setDroitGeneraux()
     *
     * @return void
     */
    public function testSetDroitGeneraux(): void {

        $obj = new iComptaDroits();

        $obj->setDroitGeneraux("droitGeneraux");
        $this->assertEquals("droitGeneraux", $obj->getDroitGeneraux());
    }

    /**
     * Test setDroitModifCompte()
     *
     * @return void
     */
    public function testSetDroitModifCompte(): void {

        $obj = new iComptaDroits();

        $obj->setDroitModifCompte("droitModifCompte");
        $this->assertEquals("droitModifCompte", $obj->getDroitModifCompte());
    }

    /**
     * Test setEspaceClient()
     *
     * @return void
     */
    public function testSetEspaceClient(): void {

        $obj = new iComptaDroits();

        $obj->setEspaceClient(true);
        $this->assertTrue($obj->getEspaceClient());
    }

    /**
     * Test setFctBalanceClient()
     *
     * @return void
     */
    public function testSetFctBalanceClient(): void {

        $obj = new iComptaDroits();

        $obj->setFctBalanceClient(true);
        $this->assertTrue($obj->getFctBalanceClient());
    }

    /**
     * Test setFctBalanceFournisseur()
     *
     * @return void
     */
    public function testSetFctBalanceFournisseur(): void {

        $obj = new iComptaDroits();

        $obj->setFctBalanceFournisseur(true);
        $this->assertTrue($obj->getFctBalanceFournisseur());
    }

    /**
     * Test setFctBalanceGenerale()
     *
     * @return void
     */
    public function testSetFctBalanceGenerale(): void {

        $obj = new iComptaDroits();

        $obj->setFctBalanceGenerale(true);
        $this->assertTrue($obj->getFctBalanceGenerale());
    }

    /**
     * Test setFctConsultDa()
     *
     * @return void
     */
    public function testSetFctConsultDa(): void {

        $obj = new iComptaDroits();

        $obj->setFctConsultDa(true);
        $this->assertTrue($obj->getFctConsultDa());
    }

    /**
     * Test setFctConsultDc()
     *
     * @return void
     */
    public function testSetFctConsultDc(): void {

        $obj = new iComptaDroits();

        $obj->setFctConsultDc(true);
        $this->assertTrue($obj->getFctConsultDc());
    }

    /**
     * Test setFctDeclareTva()
     *
     * @return void
     */
    public function testSetFctDeclareTva(): void {

        $obj = new iComptaDroits();

        $obj->setFctDeclareTva(true);
        $this->assertTrue($obj->getFctDeclareTva());
    }

    /**
     * Test setFctDelettrage()
     *
     * @return void
     */
    public function testSetFctDelettrage(): void {

        $obj = new iComptaDroits();

        $obj->setFctDelettrage(true);
        $this->assertTrue($obj->getFctDelettrage());
    }

    /**
     * Test setFctEditionJournaux()
     *
     * @return void
     */
    public function testSetFctEditionJournaux(): void {

        $obj = new iComptaDroits();

        $obj->setFctEditionJournaux(true);
        $this->assertTrue($obj->getFctEditionJournaux());
    }

    /**
     * Test setFctInterrogationCpt()
     *
     * @return void
     */
    public function testSetFctInterrogationCpt(): void {

        $obj = new iComptaDroits();

        $obj->setFctInterrogationCpt(true);
        $this->assertTrue($obj->getFctInterrogationCpt());
    }

    /**
     * Test setFctLettrage()
     *
     * @return void
     */
    public function testSetFctLettrage(): void {

        $obj = new iComptaDroits();

        $obj->setFctLettrage(true);
        $this->assertTrue($obj->getFctLettrage());
    }

    /**
     * Test setFctModifEcriture()
     *
     * @return void
     */
    public function testSetFctModifEcriture(): void {

        $obj = new iComptaDroits();

        $obj->setFctModifEcriture(true);
        $this->assertTrue($obj->getFctModifEcriture());
    }

    /**
     * Test setFctRapprochBanq()
     *
     * @return void
     */
    public function testSetFctRapprochBanq(): void {

        $obj = new iComptaDroits();

        $obj->setFctRapprochBanq(true);
        $this->assertTrue($obj->getFctRapprochBanq());
    }

    /**
     * Test setFctSaisieAchats()
     *
     * @return void
     */
    public function testSetFctSaisieAchats(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieAchats(true);
        $this->assertTrue($obj->getFctSaisieAchats());
    }

    /**
     * Test setFctSaisieBanques()
     *
     * @return void
     */
    public function testSetFctSaisieBanques(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieBanques(true);
        $this->assertTrue($obj->getFctSaisieBanques());
    }

    /**
     * Test setFctSaisieCaisseOrientee()
     *
     * @return void
     */
    public function testSetFctSaisieCaisseOrientee(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieCaisseOrientee(10);
        $this->assertEquals(10, $obj->getFctSaisieCaisseOrientee());
    }

    /**
     * Test setFctSaisieEtebac()
     *
     * @return void
     */
    public function testSetFctSaisieEtebac(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieEtebac(true);
        $this->assertTrue($obj->getFctSaisieEtebac());
    }

    /**
     * Test setFctSaisieStandard()
     *
     * @return void
     */
    public function testSetFctSaisieStandard(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieStandard(true);
        $this->assertTrue($obj->getFctSaisieStandard());
    }

    /**
     * Test setFctSaisieTrame()
     *
     * @return void
     */
    public function testSetFctSaisieTrame(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieTrame(10);
        $this->assertEquals(10, $obj->getFctSaisieTrame());
    }

    /**
     * Test setFctSaisieVentes()
     *
     * @return void
     */
    public function testSetFctSaisieVentes(): void {

        $obj = new iComptaDroits();

        $obj->setFctSaisieVentes(true);
        $this->assertTrue($obj->getFctSaisieVentes());
    }

    /**
     * Test setFctSupprEcriture()
     *
     * @return void
     */
    public function testSetFctSupprEcriture(): void {

        $obj = new iComptaDroits();

        $obj->setFctSupprEcriture(true);
        $this->assertTrue($obj->getFctSupprEcriture());
    }

    /**
     * Test setFctTableBord()
     *
     * @return void
     */
    public function testSetFctTableBord(): void {

        $obj = new iComptaDroits();

        $obj->setFctTableBord(true);
        $this->assertTrue($obj->getFctTableBord());
    }

    /**
     * Test setFlag()
     *
     * @return void
     */
    public function testSetFlag(): void {

        $obj = new iComptaDroits();

        $obj->setFlag("flag");
        $this->assertEquals("flag", $obj->getFlag());
    }

    /**
     * Test setNiveauDroitClients()
     *
     * @return void
     */
    public function testSetNiveauDroitClients(): void {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitClients("niveauDroitClients");
        $this->assertEquals("niveauDroitClients", $obj->getNiveauDroitClients());
    }

    /**
     * Test setNiveauDroitFournisseurs()
     *
     * @return void
     */
    public function testSetNiveauDroitFournisseurs(): void {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitFournisseurs("niveauDroitFournisseurs");
        $this->assertEquals("niveauDroitFournisseurs", $obj->getNiveauDroitFournisseurs());
    }

    /**
     * Test setNiveauDroitGeneraux()
     *
     * @return void
     */
    public function testSetNiveauDroitGeneraux(): void {

        $obj = new iComptaDroits();

        $obj->setNiveauDroitGeneraux("niveauDroitGeneraux");
        $this->assertEquals("niveauDroitGeneraux", $obj->getNiveauDroitGeneraux());
    }

    /**
     * Test setNoDossCpta()
     *
     * @return void
     */
    public function testSetNoDossCpta(): void {

        $obj = new iComptaDroits();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Test setNomUser()
     *
     * @return void
     */
    public function testSetNomUser(): void {

        $obj = new iComptaDroits();

        $obj->setNomUser("nomUser");
        $this->assertEquals("nomUser", $obj->getNomUser());
    }

    /**
     * Test setNumiKey()
     *
     * @return void
     */
    public function testSetNumiKey(): void {

        $obj = new iComptaDroits();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Test setPassword()
     *
     * @return void
     */
    public function testSetPassword(): void {

        $obj = new iComptaDroits();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Test setPeriodeSaisieDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieDeb(): void {

        // Set a Date/time mock.
        $periodeSaisieDeb = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setPeriodeSaisieDeb($periodeSaisieDeb);
        $this->assertSame($periodeSaisieDeb, $obj->getPeriodeSaisieDeb());
    }

    /**
     * Test setPeriodeSaisieFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeSaisieFin(): void {

        // Set a Date/time mock.
        $periodeSaisieFin = new DateTime("2018-09-10");

        $obj = new iComptaDroits();

        $obj->setPeriodeSaisieFin($periodeSaisieFin);
        $this->assertSame($periodeSaisieFin, $obj->getPeriodeSaisieFin());
    }

    /**
     * Test __construct()
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
