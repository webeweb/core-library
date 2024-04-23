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

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\AccesWeb;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Acces web test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AccesWebTest extends AbstractTestCase {

    /**
     * Test setAccesAgenda()
     *
     * @return void
     */
    public function testSetAccesAgenda(): void {

        $obj = new AccesWeb();

        $obj->setAccesAgenda(true);
        $this->assertTrue($obj->getAccesAgenda());
    }

    /**
     * Test setAccesArticles()
     *
     * @return void
     */
    public function testSetAccesArticles(): void {

        $obj = new AccesWeb();

        $obj->setAccesArticles(true);
        $this->assertTrue($obj->getAccesArticles());
    }

    /**
     * Test setAccesArticlesConsommes()
     *
     * @return void
     */
    public function testSetAccesArticlesConsommes(): void {

        $obj = new AccesWeb();

        $obj->setAccesArticlesConsommes(true);
        $this->assertTrue($obj->getAccesArticlesConsommes());
    }

    /**
     * Test setAccesClients()
     *
     * @return void
     */
    public function testSetAccesClients(): void {

        $obj = new AccesWeb();

        $obj->setAccesClients(true);
        $this->assertTrue($obj->getAccesClients());
    }

    /**
     * Test setAccesClientsFavoris()
     *
     * @return void
     */
    public function testSetAccesClientsFavoris(): void {

        $obj = new AccesWeb();

        $obj->setAccesClientsFavoris(true);
        $this->assertTrue($obj->getAccesClientsFavoris());
    }

    /**
     * Test setAccesConsultation()
     *
     * @return void
     */
    public function testSetAccesConsultation(): void {

        $obj = new AccesWeb();

        $obj->setAccesConsultation(true);
        $this->assertTrue($obj->getAccesConsultation());
    }

    /**
     * Test setAccesDossierCabinet()
     *
     * @return void
     */
    public function testSetAccesDossierCabinet(): void {

        $obj = new AccesWeb();

        $obj->setAccesDossierCabinet(true);
        $this->assertTrue($obj->getAccesDossierCabinet());
    }

    /**
     * Test setAccesFacture()
     *
     * @return void
     */
    public function testSetAccesFacture(): void {

        $obj = new AccesWeb();

        $obj->setAccesFacture(true);
        $this->assertTrue($obj->getAccesFacture());
    }

    /**
     * Test setAccesIBureau()
     *
     * @return void
     */
    public function testSetAccesIBureau(): void {

        $obj = new AccesWeb();

        $obj->setAccesIBureau(true);
        $this->assertTrue($obj->getAccesIBureau());
    }

    /**
     * Test setAccesInterventions()
     *
     * @return void
     */
    public function testSetAccesInterventions(): void {

        $obj = new AccesWeb();

        $obj->setAccesInterventions(true);
        $this->assertTrue($obj->getAccesInterventions());
    }

    /**
     * Test setAccesListeCollab()
     *
     * @return void
     */
    public function testSetAccesListeCollab(): void {

        $obj = new AccesWeb();

        $obj->setAccesListeCollab(true);
        $this->assertTrue($obj->getAccesListeCollab());
    }

    /**
     * Test setAccesMessages()
     *
     * @return void
     */
    public function testSetAccesMessages(): void {

        $obj = new AccesWeb();

        $obj->setAccesMessages(true);
        $this->assertTrue($obj->getAccesMessages());
    }

    /**
     * Test setAccesNoteFrais()
     *
     * @return void
     */
    public function testSetAccesNoteFrais(): void {

        $obj = new AccesWeb();

        $obj->setAccesNoteFrais(true);
        $this->assertTrue($obj->getAccesNoteFrais());
    }

    /**
     * Test setAccesRepertoire()
     *
     * @return void
     */
    public function testSetAccesRepertoire(): void {

        $obj = new AccesWeb();

        $obj->setAccesRepertoire(true);
        $this->assertTrue($obj->getAccesRepertoire());
    }

    /**
     * Test setAccesSaisieCommande()
     *
     * @return void
     */
    public function testSetAccesSaisieCommande(): void {

        $obj = new AccesWeb();

        $obj->setAccesSaisieCommande(true);
        $this->assertTrue($obj->getAccesSaisieCommande());
    }

    /**
     * Test setAccesSaisieTp()
     *
     * @return void
     */
    public function testSetAccesSaisieTp(): void {

        $obj = new AccesWeb();

        $obj->setAccesSaisieTp(true);
        $this->assertTrue($obj->getAccesSaisieTp());
    }

    /**
     * Test setAccesSoldeCpta()
     *
     * @return void
     */
    public function testSetAccesSoldeCpta(): void {

        $obj = new AccesWeb();

        $obj->setAccesSoldeCpta(true);
        $this->assertTrue($obj->getAccesSoldeCpta());
    }

    /**
     * Test setAccesTableauxBord()
     *
     * @return void
     */
    public function testSetAccesTableauxBord(): void {

        $obj = new AccesWeb();

        $obj->setAccesTableauxBord(true);
        $this->assertTrue($obj->getAccesTableauxBord());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AccesWeb();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setDateActivation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateActivation(): void {

        // Set a Date/time mock.
        $dateActivation = new DateTime("2018-09-10");

        $obj = new AccesWeb();

        $obj->setDateActivation($dateActivation);
        $this->assertSame($dateActivation, $obj->getDateActivation());
    }

    /**
     * Test setDateFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new AccesWeb();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Test setDernTentative()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDernTentative(): void {

        // Set a Date/time mock.
        $dernTentative = new DateTime("2018-09-10");

        $obj = new AccesWeb();

        $obj->setDernTentative($dernTentative);
        $this->assertSame($dernTentative, $obj->getDernTentative());
    }

    /**
     * Test setDossCpta()
     *
     * @return void
     */
    public function testSetDossCpta(): void {

        $obj = new AccesWeb();

        $obj->setDossCpta("dossCpta");
        $this->assertEquals("dossCpta", $obj->getDossCpta());
    }

    /**
     * Test setDossPaie()
     *
     * @return void
     */
    public function testSetDossPaie(): void {

        $obj = new AccesWeb();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Test setDossProp()
     *
     * @return void
     */
    public function testSetDossProp(): void {

        $obj = new AccesWeb();

        $obj->setDossProp("dossProp");
        $this->assertEquals("dossProp", $obj->getDossProp());
    }

    /**
     * Test setDupliqueIntervention()
     *
     * @return void
     */
    public function testSetDupliqueIntervention(): void {

        $obj = new AccesWeb();

        $obj->setDupliqueIntervention(true);
        $this->assertTrue($obj->getDupliqueIntervention());
    }

    /**
     * Test setMemeMdpQueIBureau()
     *
     * @return void
     */
    public function testSetMemeMdpQueIBureau(): void {

        $obj = new AccesWeb();

        $obj->setMemeMdpQueIBureau(true);
        $this->assertTrue($obj->getMemeMdpQueIBureau());
    }

    /**
     * Test setMotDePasse()
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new AccesWeb();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Test setRestrCliAssist1()
     *
     * @return void
     */
    public function testSetRestrCliAssist1(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAssist1("restrCliAssist1");
        $this->assertEquals("restrCliAssist1", $obj->getRestrCliAssist1());
    }

    /**
     * Test setRestrCliAssist2()
     *
     * @return void
     */
    public function testSetRestrCliAssist2(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAssist2("restrCliAssist2");
        $this->assertEquals("restrCliAssist2", $obj->getRestrCliAssist2());
    }

    /**
     * Test setRestrCliAutre1()
     *
     * @return void
     */
    public function testSetRestrCliAutre1(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAutre1("restrCliAutre1");
        $this->assertEquals("restrCliAutre1", $obj->getRestrCliAutre1());
    }

    /**
     * Test setRestrCliAutre2()
     *
     * @return void
     */
    public function testSetRestrCliAutre2(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAutre2("restrCliAutre2");
        $this->assertEquals("restrCliAutre2", $obj->getRestrCliAutre2());
    }

    /**
     * Test setRestrCliCollab()
     *
     * @return void
     */
    public function testSetRestrCliCollab(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliCollab("restrCliCollab");
        $this->assertEquals("restrCliCollab", $obj->getRestrCliCollab());
    }

    /**
     * Test setRestrCliDebut()
     *
     * @return void
     */
    public function testSetRestrCliDebut(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliDebut("restrCliDebut");
        $this->assertEquals("restrCliDebut", $obj->getRestrCliDebut());
    }

    /**
     * Test setRestrCliExpert()
     *
     * @return void
     */
    public function testSetRestrCliExpert(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliExpert("restrCliExpert");
        $this->assertEquals("restrCliExpert", $obj->getRestrCliExpert());
    }

    /**
     * Test setRestrCliFin()
     *
     * @return void
     */
    public function testSetRestrCliFin(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliFin("restrCliFin");
        $this->assertEquals("restrCliFin", $obj->getRestrCliFin());
    }

    /**
     * Test setRestrCliPortef()
     *
     * @return void
     */
    public function testSetRestrCliPortef(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliPortef("restrCliPortef");
        $this->assertEquals("restrCliPortef", $obj->getRestrCliPortef());
    }

    /**
     * Test setTentatives()
     *
     * @return void
     */
    public function testSetTentatives(): void {

        $obj = new AccesWeb();

        $obj->setTentatives("tentatives");
        $this->assertEquals("tentatives", $obj->getTentatives());
    }

    /**
     * Test setiKey()
     *
     * @return void
     */
    public function testSetiKey(): void {

        $obj = new AccesWeb();

        $obj->setiKey("iKey");
        $this->assertEquals("iKey", $obj->getiKey());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AccesWeb();

        $this->assertNull($obj->getAccesAgenda());
        $this->assertNull($obj->getAccesArticles());
        $this->assertNull($obj->getAccesArticlesConsommes());
        $this->assertNull($obj->getAccesClients());
        $this->assertNull($obj->getAccesClientsFavoris());
        $this->assertNull($obj->getAccesConsultation());
        $this->assertNull($obj->getAccesDossierCabinet());
        $this->assertNull($obj->getAccesFacture());
        $this->assertNull($obj->getAccesIBureau());
        $this->assertNull($obj->getAccesInterventions());
        $this->assertNull($obj->getAccesListeCollab());
        $this->assertNull($obj->getAccesMessages());
        $this->assertNull($obj->getAccesNoteFrais());
        $this->assertNull($obj->getAccesRepertoire());
        $this->assertNull($obj->getAccesSaisieCommande());
        $this->assertNull($obj->getAccesSaisieTp());
        $this->assertNull($obj->getAccesSoldeCpta());
        $this->assertNull($obj->getAccesTableauxBord());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDateActivation());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDernTentative());
        $this->assertNull($obj->getDossCpta());
        $this->assertNull($obj->getDossPaie());
        $this->assertNull($obj->getDossProp());
        $this->assertNull($obj->getDupliqueIntervention());
        $this->assertNull($obj->getMemeMdpQueIBureau());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getRestrCliAssist1());
        $this->assertNull($obj->getRestrCliAssist2());
        $this->assertNull($obj->getRestrCliAutre1());
        $this->assertNull($obj->getRestrCliAutre2());
        $this->assertNull($obj->getRestrCliCollab());
        $this->assertNull($obj->getRestrCliDebut());
        $this->assertNull($obj->getRestrCliExpert());
        $this->assertNull($obj->getRestrCliFin());
        $this->assertNull($obj->getRestrCliPortef());
        $this->assertNull($obj->getTentatives());
        $this->assertNull($obj->getiKey());
    }
}
