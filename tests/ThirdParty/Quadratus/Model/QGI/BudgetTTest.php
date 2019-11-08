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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\BudgetT;

/**
 * Budget t test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BudgetTTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BudgetT();

        $this->assertNull($obj->getCodeAssistantJuridique());
        $this->assertNull($obj->getCodeAssistantSocial());
        $this->assertNull($obj->getCodeAutre1());
        $this->assertNull($obj->getCodeAutre2());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeExpert());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePortefeuille());
        $this->assertNull($obj->getCollabAuteur());
        $this->assertNull($obj->getCollabValideur());
        $this->assertNull($obj->getComment1());
        $this->assertNull($obj->getComment2());
        $this->assertNull($obj->getComment3());
        $this->assertNull($obj->getComment4());
        $this->assertNull($obj->getComment5());
        $this->assertNull($obj->getComment6());
        $this->assertNull($obj->getComment7());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateValid());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHonoPrev());
        $this->assertNull($obj->getLibelle1());
        $this->assertNull($obj->getLibelle2());
        $this->assertNull($obj->getLibelle3());
        $this->assertNull($obj->getLibelle4());
        $this->assertNull($obj->getLibelle5());
        $this->assertNull($obj->getLibelle6());
        $this->assertNull($obj->getLibelle7());
        $this->assertNull($obj->getNbrBulletins());
        $this->assertNull($obj->getNbrEcritures());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getPrix1());
        $this->assertNull($obj->getPrix2());
        $this->assertNull($obj->getPrix3());
        $this->assertNull($obj->getPrix4());
        $this->assertNull($obj->getPrix5());
        $this->assertNull($obj->getPrix6());
        $this->assertNull($obj->getPrix7());
        $this->assertNull($obj->getSaisieTache());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getValoRecap());
    }

    /**
     * Tests the setCodeAssistantJuridique() method.
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique() {

        $obj = new BudgetT();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Tests the setCodeAssistantSocial() method.
     *
     * @return void
     */
    public function testSetCodeAssistantSocial() {

        $obj = new BudgetT();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Tests the setCodeAutre1() method.
     *
     * @return void
     */
    public function testSetCodeAutre1() {

        $obj = new BudgetT();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Tests the setCodeAutre2() method.
     *
     * @return void
     */
    public function testSetCodeAutre2() {

        $obj = new BudgetT();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new BudgetT();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new BudgetT();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeExpert() method.
     *
     * @return void
     */
    public function testSetCodeExpert() {

        $obj = new BudgetT();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission() {

        $obj = new BudgetT();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodePortefeuille() method.
     *
     * @return void
     */
    public function testSetCodePortefeuille() {

        $obj = new BudgetT();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Tests the setCollabAuteur() method.
     *
     * @return void
     */
    public function testSetCollabAuteur() {

        $obj = new BudgetT();

        $obj->setCollabAuteur("collabAuteur");
        $this->assertEquals("collabAuteur", $obj->getCollabAuteur());
    }

    /**
     * Tests the setCollabValideur() method.
     *
     * @return void
     */
    public function testSetCollabValideur() {

        $obj = new BudgetT();

        $obj->setCollabValideur("collabValideur");
        $this->assertEquals("collabValideur", $obj->getCollabValideur());
    }

    /**
     * Tests the setComment1() method.
     *
     * @return void
     */
    public function testSetComment1() {

        $obj = new BudgetT();

        $obj->setComment1("comment1");
        $this->assertEquals("comment1", $obj->getComment1());
    }

    /**
     * Tests the setComment2() method.
     *
     * @return void
     */
    public function testSetComment2() {

        $obj = new BudgetT();

        $obj->setComment2("comment2");
        $this->assertEquals("comment2", $obj->getComment2());
    }

    /**
     * Tests the setComment3() method.
     *
     * @return void
     */
    public function testSetComment3() {

        $obj = new BudgetT();

        $obj->setComment3("comment3");
        $this->assertEquals("comment3", $obj->getComment3());
    }

    /**
     * Tests the setComment4() method.
     *
     * @return void
     */
    public function testSetComment4() {

        $obj = new BudgetT();

        $obj->setComment4("comment4");
        $this->assertEquals("comment4", $obj->getComment4());
    }

    /**
     * Tests the setComment5() method.
     *
     * @return void
     */
    public function testSetComment5() {

        $obj = new BudgetT();

        $obj->setComment5("comment5");
        $this->assertEquals("comment5", $obj->getComment5());
    }

    /**
     * Tests the setComment6() method.
     *
     * @return void
     */
    public function testSetComment6() {

        $obj = new BudgetT();

        $obj->setComment6("comment6");
        $this->assertEquals("comment6", $obj->getComment6());
    }

    /**
     * Tests the setComment7() method.
     *
     * @return void
     */
    public function testSetComment7() {

        $obj = new BudgetT();

        $obj->setComment7("comment7");
        $this->assertEquals("comment7", $obj->getComment7());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut() {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new BudgetT();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateValid() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValid() {

        // Set a Date/time mock.
        $dateValid = new DateTime("2018-09-10");

        $obj = new BudgetT();

        $obj->setDateValid($dateValid);
        $this->assertSame($dateValid, $obj->getDateValid());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new BudgetT();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setHonoPrev() method.
     *
     * @return void
     */
    public function testSetHonoPrev() {

        $obj = new BudgetT();

        $obj->setHonoPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getHonoPrev());
    }

    /**
     * Tests the setLibelle1() method.
     *
     * @return void
     */
    public function testSetLibelle1() {

        $obj = new BudgetT();

        $obj->setLibelle1("libelle1");
        $this->assertEquals("libelle1", $obj->getLibelle1());
    }

    /**
     * Tests the setLibelle2() method.
     *
     * @return void
     */
    public function testSetLibelle2() {

        $obj = new BudgetT();

        $obj->setLibelle2("libelle2");
        $this->assertEquals("libelle2", $obj->getLibelle2());
    }

    /**
     * Tests the setLibelle3() method.
     *
     * @return void
     */
    public function testSetLibelle3() {

        $obj = new BudgetT();

        $obj->setLibelle3("libelle3");
        $this->assertEquals("libelle3", $obj->getLibelle3());
    }

    /**
     * Tests the setLibelle4() method.
     *
     * @return void
     */
    public function testSetLibelle4() {

        $obj = new BudgetT();

        $obj->setLibelle4("libelle4");
        $this->assertEquals("libelle4", $obj->getLibelle4());
    }

    /**
     * Tests the setLibelle5() method.
     *
     * @return void
     */
    public function testSetLibelle5() {

        $obj = new BudgetT();

        $obj->setLibelle5("libelle5");
        $this->assertEquals("libelle5", $obj->getLibelle5());
    }

    /**
     * Tests the setLibelle6() method.
     *
     * @return void
     */
    public function testSetLibelle6() {

        $obj = new BudgetT();

        $obj->setLibelle6("libelle6");
        $this->assertEquals("libelle6", $obj->getLibelle6());
    }

    /**
     * Tests the setLibelle7() method.
     *
     * @return void
     */
    public function testSetLibelle7() {

        $obj = new BudgetT();

        $obj->setLibelle7("libelle7");
        $this->assertEquals("libelle7", $obj->getLibelle7());
    }

    /**
     * Tests the setNbrBulletins() method.
     *
     * @return void
     */
    public function testSetNbrBulletins() {

        $obj = new BudgetT();

        $obj->setNbrBulletins(10);
        $this->assertEquals(10, $obj->getNbrBulletins());
    }

    /**
     * Tests the setNbrEcritures() method.
     *
     * @return void
     */
    public function testSetNbrEcritures() {

        $obj = new BudgetT();

        $obj->setNbrEcritures(10);
        $this->assertEquals(10, $obj->getNbrEcritures());
    }

    /**
     * Tests the setNbrHeures() method.
     *
     * @return void
     */
    public function testSetNbrHeures() {

        $obj = new BudgetT();

        $obj->setNbrHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbrHeures());
    }

    /**
     * Tests the setPrix1() method.
     *
     * @return void
     */
    public function testSetPrix1() {

        $obj = new BudgetT();

        $obj->setPrix1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix1());
    }

    /**
     * Tests the setPrix2() method.
     *
     * @return void
     */
    public function testSetPrix2() {

        $obj = new BudgetT();

        $obj->setPrix2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix2());
    }

    /**
     * Tests the setPrix3() method.
     *
     * @return void
     */
    public function testSetPrix3() {

        $obj = new BudgetT();

        $obj->setPrix3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix3());
    }

    /**
     * Tests the setPrix4() method.
     *
     * @return void
     */
    public function testSetPrix4() {

        $obj = new BudgetT();

        $obj->setPrix4(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix4());
    }

    /**
     * Tests the setPrix5() method.
     *
     * @return void
     */
    public function testSetPrix5() {

        $obj = new BudgetT();

        $obj->setPrix5(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix5());
    }

    /**
     * Tests the setPrix6() method.
     *
     * @return void
     */
    public function testSetPrix6() {

        $obj = new BudgetT();

        $obj->setPrix6(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix6());
    }

    /**
     * Tests the setPrix7() method.
     *
     * @return void
     */
    public function testSetPrix7() {

        $obj = new BudgetT();

        $obj->setPrix7(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix7());
    }

    /**
     * Tests the setSaisieTache() method.
     *
     * @return void
     */
    public function testSetSaisieTache() {

        $obj = new BudgetT();

        $obj->setSaisieTache(true);
        $this->assertEquals(true, $obj->getSaisieTache());
    }

    /**
     * Tests the setTypeSuivi() method.
     *
     * @return void
     */
    public function testSetTypeSuivi() {

        $obj = new BudgetT();

        $obj->setTypeSuivi("typeSuivi");
        $this->assertEquals("typeSuivi", $obj->getTypeSuivi());
    }

    /**
     * Tests the setValoRecap() method.
     *
     * @return void
     */
    public function testSetValoRecap() {

        $obj = new BudgetT();

        $obj->setValoRecap(10);
        $this->assertEquals(10, $obj->getValoRecap());
    }
}
