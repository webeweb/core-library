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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AccesWeb;

/**
 * Acces web test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AccesWebTest extends AbstractTestCase {

    /**
     * Tests the setAccesAgenda() method.
     *
     * @return void
     */
    public function testSetAccesAgenda(): void {

        $obj = new AccesWeb();

        $obj->setAccesAgenda(true);
        $this->assertEquals(true, $obj->getAccesAgenda());
    }

    /**
     * Tests the setAccesArticles() method.
     *
     * @return void
     */
    public function testSetAccesArticles(): void {

        $obj = new AccesWeb();

        $obj->setAccesArticles(true);
        $this->assertEquals(true, $obj->getAccesArticles());
    }

    /**
     * Tests the setAccesArticlesConsommes() method.
     *
     * @return void
     */
    public function testSetAccesArticlesConsommes(): void {

        $obj = new AccesWeb();

        $obj->setAccesArticlesConsommes(true);
        $this->assertEquals(true, $obj->getAccesArticlesConsommes());
    }

    /**
     * Tests the setAccesClients() method.
     *
     * @return void
     */
    public function testSetAccesClients(): void {

        $obj = new AccesWeb();

        $obj->setAccesClients(true);
        $this->assertEquals(true, $obj->getAccesClients());
    }

    /**
     * Tests the setAccesClientsFavoris() method.
     *
     * @return void
     */
    public function testSetAccesClientsFavoris(): void {

        $obj = new AccesWeb();

        $obj->setAccesClientsFavoris(true);
        $this->assertEquals(true, $obj->getAccesClientsFavoris());
    }

    /**
     * Tests the setAccesConsultation() method.
     *
     * @return void
     */
    public function testSetAccesConsultation(): void {

        $obj = new AccesWeb();

        $obj->setAccesConsultation(true);
        $this->assertEquals(true, $obj->getAccesConsultation());
    }

    /**
     * Tests the setAccesDossierCabinet() method.
     *
     * @return void
     */
    public function testSetAccesDossierCabinet(): void {

        $obj = new AccesWeb();

        $obj->setAccesDossierCabinet(true);
        $this->assertEquals(true, $obj->getAccesDossierCabinet());
    }

    /**
     * Tests the setAccesFacture() method.
     *
     * @return void
     */
    public function testSetAccesFacture(): void {

        $obj = new AccesWeb();

        $obj->setAccesFacture(true);
        $this->assertEquals(true, $obj->getAccesFacture());
    }

    /**
     * Tests the setAccesIBureau() method.
     *
     * @return void
     */
    public function testSetAccesIBureau(): void {

        $obj = new AccesWeb();

        $obj->setAccesIBureau(true);
        $this->assertEquals(true, $obj->getAccesIBureau());
    }

    /**
     * Tests the setAccesInterventions() method.
     *
     * @return void
     */
    public function testSetAccesInterventions(): void {

        $obj = new AccesWeb();

        $obj->setAccesInterventions(true);
        $this->assertEquals(true, $obj->getAccesInterventions());
    }

    /**
     * Tests the setAccesListeCollab() method.
     *
     * @return void
     */
    public function testSetAccesListeCollab(): void {

        $obj = new AccesWeb();

        $obj->setAccesListeCollab(true);
        $this->assertEquals(true, $obj->getAccesListeCollab());
    }

    /**
     * Tests the setAccesMessages() method.
     *
     * @return void
     */
    public function testSetAccesMessages(): void {

        $obj = new AccesWeb();

        $obj->setAccesMessages(true);
        $this->assertEquals(true, $obj->getAccesMessages());
    }

    /**
     * Tests the setAccesNoteFrais() method.
     *
     * @return void
     */
    public function testSetAccesNoteFrais(): void {

        $obj = new AccesWeb();

        $obj->setAccesNoteFrais(true);
        $this->assertEquals(true, $obj->getAccesNoteFrais());
    }

    /**
     * Tests the setAccesRepertoire() method.
     *
     * @return void
     */
    public function testSetAccesRepertoire(): void {

        $obj = new AccesWeb();

        $obj->setAccesRepertoire(true);
        $this->assertEquals(true, $obj->getAccesRepertoire());
    }

    /**
     * Tests the setAccesSaisieCommande() method.
     *
     * @return void
     */
    public function testSetAccesSaisieCommande(): void {

        $obj = new AccesWeb();

        $obj->setAccesSaisieCommande(true);
        $this->assertEquals(true, $obj->getAccesSaisieCommande());
    }

    /**
     * Tests the setAccesSaisieTp() method.
     *
     * @return void
     */
    public function testSetAccesSaisieTp(): void {

        $obj = new AccesWeb();

        $obj->setAccesSaisieTp(true);
        $this->assertEquals(true, $obj->getAccesSaisieTp());
    }

    /**
     * Tests the setAccesSoldeCpta() method.
     *
     * @return void
     */
    public function testSetAccesSoldeCpta(): void {

        $obj = new AccesWeb();

        $obj->setAccesSoldeCpta(true);
        $this->assertEquals(true, $obj->getAccesSoldeCpta());
    }

    /**
     * Tests the setAccesTableauxBord() method.
     *
     * @return void
     */
    public function testSetAccesTableauxBord(): void {

        $obj = new AccesWeb();

        $obj->setAccesTableauxBord(true);
        $this->assertEquals(true, $obj->getAccesTableauxBord());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AccesWeb();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setDateActivation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateActivation(): void {

        // Set a Date/time mock.
        $dateActivation = new DateTime("2018-09-10");

        $obj = new AccesWeb();

        $obj->setDateActivation($dateActivation);
        $this->assertSame($dateActivation, $obj->getDateActivation());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new AccesWeb();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setDernTentative() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernTentative(): void {

        // Set a Date/time mock.
        $dernTentative = new DateTime("2018-09-10");

        $obj = new AccesWeb();

        $obj->setDernTentative($dernTentative);
        $this->assertSame($dernTentative, $obj->getDernTentative());
    }

    /**
     * Tests the setDossCpta() method.
     *
     * @return void
     */
    public function testSetDossCpta(): void {

        $obj = new AccesWeb();

        $obj->setDossCpta("dossCpta");
        $this->assertEquals("dossCpta", $obj->getDossCpta());
    }

    /**
     * Tests the setDossPaie() method.
     *
     * @return void
     */
    public function testSetDossPaie(): void {

        $obj = new AccesWeb();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Tests the setDossProp() method.
     *
     * @return void
     */
    public function testSetDossProp(): void {

        $obj = new AccesWeb();

        $obj->setDossProp("dossProp");
        $this->assertEquals("dossProp", $obj->getDossProp());
    }

    /**
     * Tests the setDupliqueIntervention() method.
     *
     * @return void
     */
    public function testSetDupliqueIntervention(): void {

        $obj = new AccesWeb();

        $obj->setDupliqueIntervention(true);
        $this->assertEquals(true, $obj->getDupliqueIntervention());
    }

    /**
     * Tests the setMemeMdpQueIBureau() method.
     *
     * @return void
     */
    public function testSetMemeMdpQueIBureau(): void {

        $obj = new AccesWeb();

        $obj->setMemeMdpQueIBureau(true);
        $this->assertEquals(true, $obj->getMemeMdpQueIBureau());
    }

    /**
     * Tests the setMotDePasse() method.
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new AccesWeb();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests the setRestrCliAssist1() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist1(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAssist1("restrCliAssist1");
        $this->assertEquals("restrCliAssist1", $obj->getRestrCliAssist1());
    }

    /**
     * Tests the setRestrCliAssist2() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist2(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAssist2("restrCliAssist2");
        $this->assertEquals("restrCliAssist2", $obj->getRestrCliAssist2());
    }

    /**
     * Tests the setRestrCliAutre1() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre1(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAutre1("restrCliAutre1");
        $this->assertEquals("restrCliAutre1", $obj->getRestrCliAutre1());
    }

    /**
     * Tests the setRestrCliAutre2() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre2(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliAutre2("restrCliAutre2");
        $this->assertEquals("restrCliAutre2", $obj->getRestrCliAutre2());
    }

    /**
     * Tests the setRestrCliCollab() method.
     *
     * @return void
     */
    public function testSetRestrCliCollab(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliCollab("restrCliCollab");
        $this->assertEquals("restrCliCollab", $obj->getRestrCliCollab());
    }

    /**
     * Tests the setRestrCliDebut() method.
     *
     * @return void
     */
    public function testSetRestrCliDebut(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliDebut("restrCliDebut");
        $this->assertEquals("restrCliDebut", $obj->getRestrCliDebut());
    }

    /**
     * Tests the setRestrCliExpert() method.
     *
     * @return void
     */
    public function testSetRestrCliExpert(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliExpert("restrCliExpert");
        $this->assertEquals("restrCliExpert", $obj->getRestrCliExpert());
    }

    /**
     * Tests the setRestrCliFin() method.
     *
     * @return void
     */
    public function testSetRestrCliFin(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliFin("restrCliFin");
        $this->assertEquals("restrCliFin", $obj->getRestrCliFin());
    }

    /**
     * Tests the setRestrCliPortef() method.
     *
     * @return void
     */
    public function testSetRestrCliPortef(): void {

        $obj = new AccesWeb();

        $obj->setRestrCliPortef("restrCliPortef");
        $this->assertEquals("restrCliPortef", $obj->getRestrCliPortef());
    }

    /**
     * Tests the setTentatives() method.
     *
     * @return void
     */
    public function testSetTentatives(): void {

        $obj = new AccesWeb();

        $obj->setTentatives("tentatives");
        $this->assertEquals("tentatives", $obj->getTentatives());
    }

    /**
     * Tests the setiKey() method.
     *
     * @return void
     */
    public function testSetiKey(): void {

        $obj = new AccesWeb();

        $obj->setiKey("iKey");
        $this->assertEquals("iKey", $obj->getiKey());
    }

    /**
     * Tests the __construct() method.
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
