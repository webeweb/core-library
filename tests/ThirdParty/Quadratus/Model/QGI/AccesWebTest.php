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
 * Acces web model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AccesWebTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
        $this->assertNull($obj->getAccesSaisieTP());
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
        $this->assertNull($obj->getMemeMDPQueIBureau());
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

    /**
     * Tests the setAccesAgenda() method.
     *
     * @return void
     */
    public function testSetAccesAgenda() {

        $obj = new AccesWeb();

        $obj->setAccesAgenda(true);
        $this->assertEquals(true, $obj->getAccesAgenda());
    }

    /**
     * Tests the setAccesArticles() method.
     *
     * @return void
     */
    public function testSetAccesArticles() {

        $obj = new AccesWeb();

        $obj->setAccesArticles(true);
        $this->assertEquals(true, $obj->getAccesArticles());
    }

    /**
     * Tests the setAccesArticlesConsommes() method.
     *
     * @return void
     */
    public function testSetAccesArticlesConsommes() {

        $obj = new AccesWeb();

        $obj->setAccesArticlesConsommes(true);
        $this->assertEquals(true, $obj->getAccesArticlesConsommes());
    }

    /**
     * Tests the setAccesClients() method.
     *
     * @return void
     */
    public function testSetAccesClients() {

        $obj = new AccesWeb();

        $obj->setAccesClients(true);
        $this->assertEquals(true, $obj->getAccesClients());
    }

    /**
     * Tests the setAccesClientsFavoris() method.
     *
     * @return void
     */
    public function testSetAccesClientsFavoris() {

        $obj = new AccesWeb();

        $obj->setAccesClientsFavoris(true);
        $this->assertEquals(true, $obj->getAccesClientsFavoris());
    }

    /**
     * Tests the setAccesConsultation() method.
     *
     * @return void
     */
    public function testSetAccesConsultation() {

        $obj = new AccesWeb();

        $obj->setAccesConsultation(true);
        $this->assertEquals(true, $obj->getAccesConsultation());
    }

    /**
     * Tests the setAccesDossierCabinet() method.
     *
     * @return void
     */
    public function testSetAccesDossierCabinet() {

        $obj = new AccesWeb();

        $obj->setAccesDossierCabinet(true);
        $this->assertEquals(true, $obj->getAccesDossierCabinet());
    }

    /**
     * Tests the setAccesFacture() method.
     *
     * @return void
     */
    public function testSetAccesFacture() {

        $obj = new AccesWeb();

        $obj->setAccesFacture(true);
        $this->assertEquals(true, $obj->getAccesFacture());
    }

    /**
     * Tests the setAccesIBureau() method.
     *
     * @return void
     */
    public function testSetAccesIBureau() {

        $obj = new AccesWeb();

        $obj->setAccesIBureau(true);
        $this->assertEquals(true, $obj->getAccesIBureau());
    }

    /**
     * Tests the setAccesInterventions() method.
     *
     * @return void
     */
    public function testSetAccesInterventions() {

        $obj = new AccesWeb();

        $obj->setAccesInterventions(true);
        $this->assertEquals(true, $obj->getAccesInterventions());
    }

    /**
     * Tests the setAccesListeCollab() method.
     *
     * @return void
     */
    public function testSetAccesListeCollab() {

        $obj = new AccesWeb();

        $obj->setAccesListeCollab(true);
        $this->assertEquals(true, $obj->getAccesListeCollab());
    }

    /**
     * Tests the setAccesMessages() method.
     *
     * @return void
     */
    public function testSetAccesMessages() {

        $obj = new AccesWeb();

        $obj->setAccesMessages(true);
        $this->assertEquals(true, $obj->getAccesMessages());
    }

    /**
     * Tests the setAccesNoteFrais() method.
     *
     * @return void
     */
    public function testSetAccesNoteFrais() {

        $obj = new AccesWeb();

        $obj->setAccesNoteFrais(true);
        $this->assertEquals(true, $obj->getAccesNoteFrais());
    }

    /**
     * Tests the setAccesRepertoire() method.
     *
     * @return void
     */
    public function testSetAccesRepertoire() {

        $obj = new AccesWeb();

        $obj->setAccesRepertoire(true);
        $this->assertEquals(true, $obj->getAccesRepertoire());
    }

    /**
     * Tests the setAccesSaisieCommande() method.
     *
     * @return void
     */
    public function testSetAccesSaisieCommande() {

        $obj = new AccesWeb();

        $obj->setAccesSaisieCommande(true);
        $this->assertEquals(true, $obj->getAccesSaisieCommande());
    }

    /**
     * Tests the setAccesSaisieTP() method.
     *
     * @return void
     */
    public function testSetAccesSaisieTP() {

        $obj = new AccesWeb();

        $obj->setAccesSaisieTP(true);
        $this->assertEquals(true, $obj->getAccesSaisieTP());
    }

    /**
     * Tests the setAccesSoldeCpta() method.
     *
     * @return void
     */
    public function testSetAccesSoldeCpta() {

        $obj = new AccesWeb();

        $obj->setAccesSoldeCpta(true);
        $this->assertEquals(true, $obj->getAccesSoldeCpta());
    }

    /**
     * Tests the setAccesTableauxBord() method.
     *
     * @return void
     */
    public function testSetAccesTableauxBord() {

        $obj = new AccesWeb();

        $obj->setAccesTableauxBord(true);
        $this->assertEquals(true, $obj->getAccesTableauxBord());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

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
    public function testSetDateActivation() {

        $obj = new AccesWeb();

        $obj->setDateActivation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateActivation());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin() {

        $obj = new AccesWeb();

        $obj->setDateFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
    }

    /**
     * Tests the setDernTentative() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDernTentative() {

        $obj = new AccesWeb();

        $obj->setDernTentative(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDernTentative());
    }

    /**
     * Tests the setDossCpta() method.
     *
     * @return void
     */
    public function testSetDossCpta() {

        $obj = new AccesWeb();

        $obj->setDossCpta("dossCpta");
        $this->assertEquals("dossCpta", $obj->getDossCpta());
    }

    /**
     * Tests the setDossPaie() method.
     *
     * @return void
     */
    public function testSetDossPaie() {

        $obj = new AccesWeb();

        $obj->setDossPaie("dossPaie");
        $this->assertEquals("dossPaie", $obj->getDossPaie());
    }

    /**
     * Tests the setDossProp() method.
     *
     * @return void
     */
    public function testSetDossProp() {

        $obj = new AccesWeb();

        $obj->setDossProp("dossProp");
        $this->assertEquals("dossProp", $obj->getDossProp());
    }

    /**
     * Tests the setDupliqueIntervention() method.
     *
     * @return void
     */
    public function testSetDupliqueIntervention() {

        $obj = new AccesWeb();

        $obj->setDupliqueIntervention(true);
        $this->assertEquals(true, $obj->getDupliqueIntervention());
    }

    /**
     * Tests the setMemeMDPQueIBureau() method.
     *
     * @return void
     */
    public function testSetMemeMDPQueIBureau() {

        $obj = new AccesWeb();

        $obj->setMemeMDPQueIBureau(true);
        $this->assertEquals(true, $obj->getMemeMDPQueIBureau());
    }

    /**
     * Tests the setMotDePasse() method.
     *
     * @return void
     */
    public function testSetMotDePasse() {

        $obj = new AccesWeb();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests the setRestrCliAssist1() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist1() {

        $obj = new AccesWeb();

        $obj->setRestrCliAssist1("restrCliAssist1");
        $this->assertEquals("restrCliAssist1", $obj->getRestrCliAssist1());
    }

    /**
     * Tests the setRestrCliAssist2() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist2() {

        $obj = new AccesWeb();

        $obj->setRestrCliAssist2("restrCliAssist2");
        $this->assertEquals("restrCliAssist2", $obj->getRestrCliAssist2());
    }

    /**
     * Tests the setRestrCliAutre1() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre1() {

        $obj = new AccesWeb();

        $obj->setRestrCliAutre1("restrCliAutre1");
        $this->assertEquals("restrCliAutre1", $obj->getRestrCliAutre1());
    }

    /**
     * Tests the setRestrCliAutre2() method.
     *
     * @return void
     */
    public function testSetRestrCliAutre2() {

        $obj = new AccesWeb();

        $obj->setRestrCliAutre2("restrCliAutre2");
        $this->assertEquals("restrCliAutre2", $obj->getRestrCliAutre2());
    }

    /**
     * Tests the setRestrCliCollab() method.
     *
     * @return void
     */
    public function testSetRestrCliCollab() {

        $obj = new AccesWeb();

        $obj->setRestrCliCollab("restrCliCollab");
        $this->assertEquals("restrCliCollab", $obj->getRestrCliCollab());
    }

    /**
     * Tests the setRestrCliDebut() method.
     *
     * @return void
     */
    public function testSetRestrCliDebut() {

        $obj = new AccesWeb();

        $obj->setRestrCliDebut("restrCliDebut");
        $this->assertEquals("restrCliDebut", $obj->getRestrCliDebut());
    }

    /**
     * Tests the setRestrCliExpert() method.
     *
     * @return void
     */
    public function testSetRestrCliExpert() {

        $obj = new AccesWeb();

        $obj->setRestrCliExpert("restrCliExpert");
        $this->assertEquals("restrCliExpert", $obj->getRestrCliExpert());
    }

    /**
     * Tests the setRestrCliFin() method.
     *
     * @return void
     */
    public function testSetRestrCliFin() {

        $obj = new AccesWeb();

        $obj->setRestrCliFin("restrCliFin");
        $this->assertEquals("restrCliFin", $obj->getRestrCliFin());
    }

    /**
     * Tests the setRestrCliPortef() method.
     *
     * @return void
     */
    public function testSetRestrCliPortef() {

        $obj = new AccesWeb();

        $obj->setRestrCliPortef("restrCliPortef");
        $this->assertEquals("restrCliPortef", $obj->getRestrCliPortef());
    }

    /**
     * Tests the setTentatives() method.
     *
     * @return void
     */
    public function testSetTentatives() {

        $obj = new AccesWeb();

        $obj->setTentatives("tentatives");
        $this->assertEquals("tentatives", $obj->getTentatives());
    }

    /**
     * Tests the setiKey() method.
     *
     * @return void
     */
    public function testSetiKey() {

        $obj = new AccesWeb();

        $obj->setiKey("iKey");
        $this->assertEquals("iKey", $obj->getiKey());
    }
}
