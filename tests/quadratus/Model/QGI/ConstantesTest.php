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
use WBW\Library\Quadratus\Model\QGI\Constantes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ConstantesTest extends AbstractTestCase {

    /**
     * Tests the setAccesAutoriseBonsTravaux() method.
     *
     * @return void
     */
    public function testSetAccesAutoriseBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setAccesAutoriseBonsTravaux(true);
        $this->assertEquals(true, $obj->getAccesAutoriseBonsTravaux());
    }

    /**
     * Tests the setAccesAutorisePlanFacturation() method.
     *
     * @return void
     */
    public function testSetAccesAutorisePlanFacturation(): void {

        $obj = new Constantes();

        $obj->setAccesAutorisePlanFacturation(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanFacturation());
    }

    /**
     * Tests the setAccesAutorisePlanTache() method.
     *
     * @return void
     */
    public function testSetAccesAutorisePlanTache(): void {

        $obj = new Constantes();

        $obj->setAccesAutorisePlanTache(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanTache());
    }

    /**
     * Tests the setAccesDocsCab() method.
     *
     * @return void
     */
    public function testSetAccesDocsCab(): void {

        $obj = new Constantes();

        $obj->setAccesDocsCab(true);
        $this->assertEquals(true, $obj->getAccesDocsCab());
    }

    /**
     * Tests the setAccesDossierCpta() method.
     *
     * @return void
     */
    public function testSetAccesDossierCpta(): void {

        $obj = new Constantes();

        $obj->setAccesDossierCpta("accesDossierCpta");
        $this->assertEquals("accesDossierCpta", $obj->getAccesDossierCpta());
    }

    /**
     * Tests the setAccesDossierPaie() method.
     *
     * @return void
     */
    public function testSetAccesDossierPaie(): void {

        $obj = new Constantes();

        $obj->setAccesDossierPaie("accesDossierPaie");
        $this->assertEquals("accesDossierPaie", $obj->getAccesDossierPaie());
    }

    /**
     * Tests the setAccesStatCab() method.
     *
     * @return void
     */
    public function testSetAccesStatCab(): void {

        $obj = new Constantes();

        $obj->setAccesStatCab(true);
        $this->assertEquals(true, $obj->getAccesStatCab());
    }

    /**
     * Tests the setActivationConfCmavCli() method.
     *
     * @return void
     */
    public function testSetActivationConfCmavCli(): void {

        $obj = new Constantes();

        $obj->setActivationConfCmavCli(true);
        $this->assertEquals(true, $obj->getActivationConfCmavCli());
    }

    /**
     * Tests the setActivationConfControle() method.
     *
     * @return void
     */
    public function testSetActivationConfControle(): void {

        $obj = new Constantes();

        $obj->setActivationConfControle(true);
        $this->assertEquals(true, $obj->getActivationConfControle());
    }

    /**
     * Tests the setActivationLstRestri() method.
     *
     * @return void
     */
    public function testSetActivationLstRestri(): void {

        $obj = new Constantes();

        $obj->setActivationLstRestri(true);
        $this->assertEquals(true, $obj->getActivationLstRestri());
    }

    /**
     * Tests the setActivationNiveau2() method.
     *
     * @return void
     */
    public function testSetActivationNiveau2(): void {

        $obj = new Constantes();

        $obj->setActivationNiveau2(true);
        $this->assertEquals(true, $obj->getActivationNiveau2());
    }

    /**
     * Tests the setActivationNiveau3() method.
     *
     * @return void
     */
    public function testSetActivationNiveau3(): void {

        $obj = new Constantes();

        $obj->setActivationNiveau3(true);
        $this->assertEquals(true, $obj->getActivationNiveau3());
    }

    /**
     * Tests the setAffichePoint() method.
     *
     * @return void
     */
    public function testSetAffichePoint(): void {

        $obj = new Constantes();

        $obj->setAffichePoint(true);
        $this->assertEquals(true, $obj->getAffichePoint());
    }

    /**
     * Tests the setAfficheSemaine() method.
     *
     * @return void
     */
    public function testSetAfficheSemaine(): void {

        $obj = new Constantes();

        $obj->setAfficheSemaine(true);
        $this->assertEquals(true, $obj->getAfficheSemaine());
    }

    /**
     * Tests the setAnnulationAffaire() method.
     *
     * @return void
     */
    public function testSetAnnulationAffaire(): void {

        $obj = new Constantes();

        $obj->setAnnulationAffaire(true);
        $this->assertEquals(true, $obj->getAnnulationAffaire());
    }

    /**
     * Tests the setAnnulationArticle() method.
     *
     * @return void
     */
    public function testSetAnnulationArticle(): void {

        $obj = new Constantes();

        $obj->setAnnulationArticle(true);
        $this->assertEquals(true, $obj->getAnnulationArticle());
    }

    /**
     * Tests the setAnnulationBonsTravaux() method.
     *
     * @return void
     */
    public function testSetAnnulationBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setAnnulationBonsTravaux(true);
        $this->assertEquals(true, $obj->getAnnulationBonsTravaux());
    }

    /**
     * Tests the setAnnulationChantier() method.
     *
     * @return void
     */
    public function testSetAnnulationChantier(): void {

        $obj = new Constantes();

        $obj->setAnnulationChantier(true);
        $this->assertEquals(true, $obj->getAnnulationChantier());
    }

    /**
     * Tests the setAnnulationClient() method.
     *
     * @return void
     */
    public function testSetAnnulationClient(): void {

        $obj = new Constantes();

        $obj->setAnnulationClient(true);
        $this->assertEquals(true, $obj->getAnnulationClient());
    }

    /**
     * Tests the setAnnulationCommission() method.
     *
     * @return void
     */
    public function testSetAnnulationCommission(): void {

        $obj = new Constantes();

        $obj->setAnnulationCommission(true);
        $this->assertEquals(true, $obj->getAnnulationCommission());
    }

    /**
     * Tests the setAnnulationDossierCpta() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierCpta(): void {

        $obj = new Constantes();

        $obj->setAnnulationDossierCpta(true);
        $this->assertEquals(true, $obj->getAnnulationDossierCpta());
    }

    /**
     * Tests the setAnnulationDossierFact() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierFact(): void {

        $obj = new Constantes();

        $obj->setAnnulationDossierFact(true);
        $this->assertEquals(true, $obj->getAnnulationDossierFact());
    }

    /**
     * Tests the setAnnulationDossierPaie() method.
     *
     * @return void
     */
    public function testSetAnnulationDossierPaie(): void {

        $obj = new Constantes();

        $obj->setAnnulationDossierPaie(true);
        $this->assertEquals(true, $obj->getAnnulationDossierPaie());
    }

    /**
     * Tests the setAnnulationFournisseur() method.
     *
     * @return void
     */
    public function testSetAnnulationFournisseur(): void {

        $obj = new Constantes();

        $obj->setAnnulationFournisseur(true);
        $this->assertEquals(true, $obj->getAnnulationFournisseur());
    }

    /**
     * Tests the setAnnulationPlanFacturation() method.
     *
     * @return void
     */
    public function testSetAnnulationPlanFacturation(): void {

        $obj = new Constantes();

        $obj->setAnnulationPlanFacturation(true);
        $this->assertEquals(true, $obj->getAnnulationPlanFacturation());
    }

    /**
     * Tests the setAnnulationPlanTache() method.
     *
     * @return void
     */
    public function testSetAnnulationPlanTache(): void {

        $obj = new Constantes();

        $obj->setAnnulationPlanTache(true);
        $this->assertEquals(true, $obj->getAnnulationPlanTache());
    }

    /**
     * Tests the setAnnulationTache() method.
     *
     * @return void
     */
    public function testSetAnnulationTache(): void {

        $obj = new Constantes();

        $obj->setAnnulationTache(true);
        $this->assertEquals(true, $obj->getAnnulationTache());
    }

    /**
     * Tests the setAnnulationTarif() method.
     *
     * @return void
     */
    public function testSetAnnulationTarif(): void {

        $obj = new Constantes();

        $obj->setAnnulationTarif(true);
        $this->assertEquals(true, $obj->getAnnulationTarif());
    }

    /**
     * Tests the setBlocageEdCli() method.
     *
     * @return void
     */
    public function testSetBlocageEdCli(): void {

        $obj = new Constantes();

        $obj->setBlocageEdCli(true);
        $this->assertEquals(true, $obj->getBlocageEdCli());
    }

    /**
     * Tests the setBudgetTypeSaisie() method.
     *
     * @return void
     */
    public function testSetBudgetTypeSaisie(): void {

        $obj = new Constantes();

        $obj->setBudgetTypeSaisie(10);
        $this->assertEquals(10, $obj->getBudgetTypeSaisie());
    }

    /**
     * Tests the setChampsCritere1() method.
     *
     * @return void
     */
    public function testSetChampsCritere1(): void {

        $obj = new Constantes();

        $obj->setChampsCritere1("champsCritere1");
        $this->assertEquals("champsCritere1", $obj->getChampsCritere1());
    }

    /**
     * Tests the setChampsCritere10() method.
     *
     * @return void
     */
    public function testSetChampsCritere10(): void {

        $obj = new Constantes();

        $obj->setChampsCritere10("champsCritere10");
        $this->assertEquals("champsCritere10", $obj->getChampsCritere10());
    }

    /**
     * Tests the setChampsCritere2() method.
     *
     * @return void
     */
    public function testSetChampsCritere2(): void {

        $obj = new Constantes();

        $obj->setChampsCritere2("champsCritere2");
        $this->assertEquals("champsCritere2", $obj->getChampsCritere2());
    }

    /**
     * Tests the setChampsCritere3() method.
     *
     * @return void
     */
    public function testSetChampsCritere3(): void {

        $obj = new Constantes();

        $obj->setChampsCritere3("champsCritere3");
        $this->assertEquals("champsCritere3", $obj->getChampsCritere3());
    }

    /**
     * Tests the setChampsCritere4() method.
     *
     * @return void
     */
    public function testSetChampsCritere4(): void {

        $obj = new Constantes();

        $obj->setChampsCritere4("champsCritere4");
        $this->assertEquals("champsCritere4", $obj->getChampsCritere4());
    }

    /**
     * Tests the setChampsCritere5() method.
     *
     * @return void
     */
    public function testSetChampsCritere5(): void {

        $obj = new Constantes();

        $obj->setChampsCritere5("champsCritere5");
        $this->assertEquals("champsCritere5", $obj->getChampsCritere5());
    }

    /**
     * Tests the setChampsCritere6() method.
     *
     * @return void
     */
    public function testSetChampsCritere6(): void {

        $obj = new Constantes();

        $obj->setChampsCritere6("champsCritere6");
        $this->assertEquals("champsCritere6", $obj->getChampsCritere6());
    }

    /**
     * Tests the setChampsCritere7() method.
     *
     * @return void
     */
    public function testSetChampsCritere7(): void {

        $obj = new Constantes();

        $obj->setChampsCritere7("champsCritere7");
        $this->assertEquals("champsCritere7", $obj->getChampsCritere7());
    }

    /**
     * Tests the setChampsCritere8() method.
     *
     * @return void
     */
    public function testSetChampsCritere8(): void {

        $obj = new Constantes();

        $obj->setChampsCritere8("champsCritere8");
        $this->assertEquals("champsCritere8", $obj->getChampsCritere8());
    }

    /**
     * Tests the setChampsCritere9() method.
     *
     * @return void
     */
    public function testSetChampsCritere9(): void {

        $obj = new Constantes();

        $obj->setChampsCritere9("champsCritere9");
        $this->assertEquals("champsCritere9", $obj->getChampsCritere9());
    }

    /**
     * Tests the setChampsCritereAffaire1() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire1(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire1("champsCritereAffaire1");
        $this->assertEquals("champsCritereAffaire1", $obj->getChampsCritereAffaire1());
    }

    /**
     * Tests the setChampsCritereAffaire10() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire10(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire10("champsCritereAffaire10");
        $this->assertEquals("champsCritereAffaire10", $obj->getChampsCritereAffaire10());
    }

    /**
     * Tests the setChampsCritereAffaire2() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire2(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire2("champsCritereAffaire2");
        $this->assertEquals("champsCritereAffaire2", $obj->getChampsCritereAffaire2());
    }

    /**
     * Tests the setChampsCritereAffaire3() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire3(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire3("champsCritereAffaire3");
        $this->assertEquals("champsCritereAffaire3", $obj->getChampsCritereAffaire3());
    }

    /**
     * Tests the setChampsCritereAffaire4() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire4(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire4("champsCritereAffaire4");
        $this->assertEquals("champsCritereAffaire4", $obj->getChampsCritereAffaire4());
    }

    /**
     * Tests the setChampsCritereAffaire5() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire5(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire5("champsCritereAffaire5");
        $this->assertEquals("champsCritereAffaire5", $obj->getChampsCritereAffaire5());
    }

    /**
     * Tests the setChampsCritereAffaire6() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire6(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire6("champsCritereAffaire6");
        $this->assertEquals("champsCritereAffaire6", $obj->getChampsCritereAffaire6());
    }

    /**
     * Tests the setChampsCritereAffaire7() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire7(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire7("champsCritereAffaire7");
        $this->assertEquals("champsCritereAffaire7", $obj->getChampsCritereAffaire7());
    }

    /**
     * Tests the setChampsCritereAffaire8() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire8(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire8("champsCritereAffaire8");
        $this->assertEquals("champsCritereAffaire8", $obj->getChampsCritereAffaire8());
    }

    /**
     * Tests the setChampsCritereAffaire9() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire9(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire9("champsCritereAffaire9");
        $this->assertEquals("champsCritereAffaire9", $obj->getChampsCritereAffaire9());
    }

    /**
     * Tests the setChampsCritereArticle1() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle1(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle1("champsCritereArticle1");
        $this->assertEquals("champsCritereArticle1", $obj->getChampsCritereArticle1());
    }

    /**
     * Tests the setChampsCritereArticle10() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle10(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle10("champsCritereArticle10");
        $this->assertEquals("champsCritereArticle10", $obj->getChampsCritereArticle10());
    }

    /**
     * Tests the setChampsCritereArticle2() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle2(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle2("champsCritereArticle2");
        $this->assertEquals("champsCritereArticle2", $obj->getChampsCritereArticle2());
    }

    /**
     * Tests the setChampsCritereArticle3() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle3(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle3("champsCritereArticle3");
        $this->assertEquals("champsCritereArticle3", $obj->getChampsCritereArticle3());
    }

    /**
     * Tests the setChampsCritereArticle4() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle4(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle4("champsCritereArticle4");
        $this->assertEquals("champsCritereArticle4", $obj->getChampsCritereArticle4());
    }

    /**
     * Tests the setChampsCritereArticle5() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle5(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle5("champsCritereArticle5");
        $this->assertEquals("champsCritereArticle5", $obj->getChampsCritereArticle5());
    }

    /**
     * Tests the setChampsCritereArticle6() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle6(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle6("champsCritereArticle6");
        $this->assertEquals("champsCritereArticle6", $obj->getChampsCritereArticle6());
    }

    /**
     * Tests the setChampsCritereArticle7() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle7(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle7("champsCritereArticle7");
        $this->assertEquals("champsCritereArticle7", $obj->getChampsCritereArticle7());
    }

    /**
     * Tests the setChampsCritereArticle8() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle8(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle8("champsCritereArticle8");
        $this->assertEquals("champsCritereArticle8", $obj->getChampsCritereArticle8());
    }

    /**
     * Tests the setChampsCritereArticle9() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle9(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle9("champsCritereArticle9");
        $this->assertEquals("champsCritereArticle9", $obj->getChampsCritereArticle9());
    }

    /**
     * Tests the setChampsCritereEntPiece1() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece1(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece1("champsCritereEntPiece1");
        $this->assertEquals("champsCritereEntPiece1", $obj->getChampsCritereEntPiece1());
    }

    /**
     * Tests the setChampsCritereEntPiece10() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece10(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece10("champsCritereEntPiece10");
        $this->assertEquals("champsCritereEntPiece10", $obj->getChampsCritereEntPiece10());
    }

    /**
     * Tests the setChampsCritereEntPiece2() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece2(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece2("champsCritereEntPiece2");
        $this->assertEquals("champsCritereEntPiece2", $obj->getChampsCritereEntPiece2());
    }

    /**
     * Tests the setChampsCritereEntPiece3() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece3(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece3("champsCritereEntPiece3");
        $this->assertEquals("champsCritereEntPiece3", $obj->getChampsCritereEntPiece3());
    }

    /**
     * Tests the setChampsCritereEntPiece4() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece4(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece4("champsCritereEntPiece4");
        $this->assertEquals("champsCritereEntPiece4", $obj->getChampsCritereEntPiece4());
    }

    /**
     * Tests the setChampsCritereEntPiece5() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece5(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece5("champsCritereEntPiece5");
        $this->assertEquals("champsCritereEntPiece5", $obj->getChampsCritereEntPiece5());
    }

    /**
     * Tests the setChampsCritereEntPiece6() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece6(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece6("champsCritereEntPiece6");
        $this->assertEquals("champsCritereEntPiece6", $obj->getChampsCritereEntPiece6());
    }

    /**
     * Tests the setChampsCritereEntPiece7() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece7(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece7("champsCritereEntPiece7");
        $this->assertEquals("champsCritereEntPiece7", $obj->getChampsCritereEntPiece7());
    }

    /**
     * Tests the setChampsCritereEntPiece8() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece8(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece8("champsCritereEntPiece8");
        $this->assertEquals("champsCritereEntPiece8", $obj->getChampsCritereEntPiece8());
    }

    /**
     * Tests the setChampsCritereEntPiece9() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece9(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece9("champsCritereEntPiece9");
        $this->assertEquals("champsCritereEntPiece9", $obj->getChampsCritereEntPiece9());
    }

    /**
     * Tests the setChronoActivation() method.
     *
     * @return void
     */
    public function testSetChronoActivation(): void {

        $obj = new Constantes();

        $obj->setChronoActivation(true);
        $this->assertEquals(true, $obj->getChronoActivation());
    }

    /**
     * Tests the setChronoPrefixe() method.
     *
     * @return void
     */
    public function testSetChronoPrefixe(): void {

        $obj = new Constantes();

        $obj->setChronoPrefixe("chronoPrefixe");
        $this->assertEquals("chronoPrefixe", $obj->getChronoPrefixe());
    }

    /**
     * Tests the setChronoProchainNum() method.
     *
     * @return void
     */
    public function testSetChronoProchainNum(): void {

        $obj = new Constantes();

        $obj->setChronoProchainNum(10);
        $this->assertEquals(10, $obj->getChronoProchainNum());
    }

    /**
     * Tests the setCleAccesCnPaie() method.
     *
     * @return void
     */
    public function testSetCleAccesCnPaie(): void {

        $obj = new Constantes();

        $obj->setCleAccesCnPaie("cleAccesCnPaie");
        $this->assertEquals("cleAccesCnPaie", $obj->getCleAccesCnPaie());
    }

    /**
     * Tests the setCleAccesFicheClient() method.
     *
     * @return void
     */
    public function testSetCleAccesFicheClient(): void {

        $obj = new Constantes();

        $obj->setCleAccesFicheClient("cleAccesFicheClient");
        $this->assertEquals("cleAccesFicheClient", $obj->getCleAccesFicheClient());
    }

    /**
     * Tests the setCleAccesMenus() method.
     *
     * @return void
     */
    public function testSetCleAccesMenus(): void {

        $obj = new Constantes();

        $obj->setCleAccesMenus("cleAccesMenus");
        $this->assertEquals("cleAccesMenus", $obj->getCleAccesMenus());
    }

    /**
     * Tests the setCleAccesParam() method.
     *
     * @return void
     */
    public function testSetCleAccesParam(): void {

        $obj = new Constantes();

        $obj->setCleAccesParam("cleAccesParam");
        $this->assertEquals("cleAccesParam", $obj->getCleAccesParam());
    }

    /**
     * Tests the setCleDesEtrCommuns() method.
     *
     * @return void
     */
    public function testSetCleDesEtrCommuns(): void {

        $obj = new Constantes();

        $obj->setCleDesEtrCommuns("cleDesEtrCommuns");
        $this->assertEquals("cleDesEtrCommuns", $obj->getCleDesEtrCommuns());
    }

    /**
     * Tests the setCleJrnLibCommuns() method.
     *
     * @return void
     */
    public function testSetCleJrnLibCommuns(): void {

        $obj = new Constantes();

        $obj->setCleJrnLibCommuns("cleJrnLibCommuns");
        $this->assertEquals("cleJrnLibCommuns", $obj->getCleJrnLibCommuns());
    }

    /**
     * Tests the setCodeEmetteur() method.
     *
     * @return void
     */
    public function testSetCodeEmetteur(): void {

        $obj = new Constantes();

        $obj->setCodeEmetteur("codeEmetteur");
        $this->assertEquals("codeEmetteur", $obj->getCodeEmetteur());
    }

    /**
     * Tests the setCodeExpertDefaut() method.
     *
     * @return void
     */
    public function testSetCodeExpertDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeExpertDefaut("codeExpertDefaut");
        $this->assertEquals("codeExpertDefaut", $obj->getCodeExpertDefaut());
    }

    /**
     * Tests the setCodeRegroupementPreFact() method.
     *
     * @return void
     */
    public function testSetCodeRegroupementPreFact(): void {

        $obj = new Constantes();

        $obj->setCodeRegroupementPreFact("codeRegroupementPreFact");
        $this->assertEquals("codeRegroupementPreFact", $obj->getCodeRegroupementPreFact());
    }

    /**
     * Tests the setConversionPwd() method.
     *
     * @return void
     */
    public function testSetConversionPwd(): void {

        $obj = new Constantes();

        $obj->setConversionPwd(true);
        $this->assertEquals(true, $obj->getConversionPwd());
    }

    /**
     * Tests the setCpteCollectifCli() method.
     *
     * @return void
     */
    public function testSetCpteCollectifCli(): void {

        $obj = new Constantes();

        $obj->setCpteCollectifCli("cpteCollectifCli");
        $this->assertEquals("cpteCollectifCli", $obj->getCpteCollectifCli());
    }

    /**
     * Tests the setCpteCollectifFrn() method.
     *
     * @return void
     */
    public function testSetCpteCollectifFrn(): void {

        $obj = new Constantes();

        $obj->setCpteCollectifFrn("cpteCollectifFrn");
        $this->assertEquals("cpteCollectifFrn", $obj->getCpteCollectifFrn());
    }

    /**
     * Tests the setCreationAffaire() method.
     *
     * @return void
     */
    public function testSetCreationAffaire(): void {

        $obj = new Constantes();

        $obj->setCreationAffaire(true);
        $this->assertEquals(true, $obj->getCreationAffaire());
    }

    /**
     * Tests the setCreationArticle() method.
     *
     * @return void
     */
    public function testSetCreationArticle(): void {

        $obj = new Constantes();

        $obj->setCreationArticle(true);
        $this->assertEquals(true, $obj->getCreationArticle());
    }

    /**
     * Tests the setCreationBonsTravaux() method.
     *
     * @return void
     */
    public function testSetCreationBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setCreationBonsTravaux(true);
        $this->assertEquals(true, $obj->getCreationBonsTravaux());
    }

    /**
     * Tests the setCreationChantier() method.
     *
     * @return void
     */
    public function testSetCreationChantier(): void {

        $obj = new Constantes();

        $obj->setCreationChantier(true);
        $this->assertEquals(true, $obj->getCreationChantier());
    }

    /**
     * Tests the setCreationClient() method.
     *
     * @return void
     */
    public function testSetCreationClient(): void {

        $obj = new Constantes();

        $obj->setCreationClient(true);
        $this->assertEquals(true, $obj->getCreationClient());
    }

    /**
     * Tests the setCreationCommission() method.
     *
     * @return void
     */
    public function testSetCreationCommission(): void {

        $obj = new Constantes();

        $obj->setCreationCommission(true);
        $this->assertEquals(true, $obj->getCreationCommission());
    }

    /**
     * Tests the setCreationDossierCpta() method.
     *
     * @return void
     */
    public function testSetCreationDossierCpta(): void {

        $obj = new Constantes();

        $obj->setCreationDossierCpta(true);
        $this->assertEquals(true, $obj->getCreationDossierCpta());
    }

    /**
     * Tests the setCreationDossierFact() method.
     *
     * @return void
     */
    public function testSetCreationDossierFact(): void {

        $obj = new Constantes();

        $obj->setCreationDossierFact(true);
        $this->assertEquals(true, $obj->getCreationDossierFact());
    }

    /**
     * Tests the setCreationDossierPaie() method.
     *
     * @return void
     */
    public function testSetCreationDossierPaie(): void {

        $obj = new Constantes();

        $obj->setCreationDossierPaie(true);
        $this->assertEquals(true, $obj->getCreationDossierPaie());
    }

    /**
     * Tests the setCreationFournisseur() method.
     *
     * @return void
     */
    public function testSetCreationFournisseur(): void {

        $obj = new Constantes();

        $obj->setCreationFournisseur(true);
        $this->assertEquals(true, $obj->getCreationFournisseur());
    }

    /**
     * Tests the setCreationPlanFacturation() method.
     *
     * @return void
     */
    public function testSetCreationPlanFacturation(): void {

        $obj = new Constantes();

        $obj->setCreationPlanFacturation(true);
        $this->assertEquals(true, $obj->getCreationPlanFacturation());
    }

    /**
     * Tests the setCreationPlanTache() method.
     *
     * @return void
     */
    public function testSetCreationPlanTache(): void {

        $obj = new Constantes();

        $obj->setCreationPlanTache(true);
        $this->assertEquals(true, $obj->getCreationPlanTache());
    }

    /**
     * Tests the setCreationProspect() method.
     *
     * @return void
     */
    public function testSetCreationProspect(): void {

        $obj = new Constantes();

        $obj->setCreationProspect(true);
        $this->assertEquals(true, $obj->getCreationProspect());
    }

    /**
     * Tests the setCreationTache() method.
     *
     * @return void
     */
    public function testSetCreationTache(): void {

        $obj = new Constantes();

        $obj->setCreationTache(true);
        $this->assertEquals(true, $obj->getCreationTache());
    }

    /**
     * Tests the setCreationTarif() method.
     *
     * @return void
     */
    public function testSetCreationTarif(): void {

        $obj = new Constantes();

        $obj->setCreationTarif(true);
        $this->assertEquals(true, $obj->getCreationTarif());
    }

    /**
     * Tests the setDateCloture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCloture(): void {

        // Set a Date/time mock.
        $dateCloture = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateCloture($dateCloture);
        $this->assertSame($dateCloture, $obj->getDateCloture());
    }

    /**
     * Tests the setDtDernModifConfZone() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernModifConfZone(): void {

        // Set a Date/time mock.
        $dtDernModifConfZone = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDtDernModifConfZone($dtDernModifConfZone);
        $this->assertSame($dtDernModifConfZone, $obj->getDtDernModifConfZone());
    }

    /**
     * Tests the setEchAffEnMt() method.
     *
     * @return void
     */
    public function testSetEchAffEnMt(): void {

        $obj = new Constantes();

        $obj->setEchAffEnMt(true);
        $this->assertEquals(true, $obj->getEchAffEnMt());
    }

    /**
     * Tests the setFonctionnementCga() method.
     *
     * @return void
     */
    public function testSetFonctionnementCga(): void {

        $obj = new Constantes();

        $obj->setFonctionnementCga(true);
        $this->assertEquals(true, $obj->getFonctionnementCga());
    }

    /**
     * Tests the setHeuresTrav1() method.
     *
     * @return void
     */
    public function testSetHeuresTrav1(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav1(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav1());
    }

    /**
     * Tests the setHeuresTrav2() method.
     *
     * @return void
     */
    public function testSetHeuresTrav2(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav2());
    }

    /**
     * Tests the setHeuresTrav3() method.
     *
     * @return void
     */
    public function testSetHeuresTrav3(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav3());
    }

    /**
     * Tests the setHeuresTrav4() method.
     *
     * @return void
     */
    public function testSetHeuresTrav4(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav4());
    }

    /**
     * Tests the setIncremAuto() method.
     *
     * @return void
     */
    public function testSetIncremAuto(): void {

        $obj = new Constantes();

        $obj->setIncremAuto(true);
        $this->assertEquals(true, $obj->getIncremAuto());
    }

    /**
     * Tests the setIncremAutoAff() method.
     *
     * @return void
     */
    public function testSetIncremAutoAff(): void {

        $obj = new Constantes();

        $obj->setIncremAutoAff(true);
        $this->assertEquals(true, $obj->getIncremAutoAff());
    }

    /**
     * Tests the setIncremAutoFrn() method.
     *
     * @return void
     */
    public function testSetIncremAutoFrn(): void {

        $obj = new Constantes();

        $obj->setIncremAutoFrn(true);
        $this->assertEquals(true, $obj->getIncremAutoFrn());
    }

    /**
     * Tests the setIncremCpteCliAuto() method.
     *
     * @return void
     */
    public function testSetIncremCpteCliAuto(): void {

        $obj = new Constantes();

        $obj->setIncremCpteCliAuto(true);
        $this->assertEquals(true, $obj->getIncremCpteCliAuto());
    }

    /**
     * Tests the setIncremCpteFrnAuto() method.
     *
     * @return void
     */
    public function testSetIncremCpteFrnAuto(): void {

        $obj = new Constantes();

        $obj->setIncremCpteFrnAuto(true);
        $this->assertEquals(true, $obj->getIncremCpteFrnAuto());
    }

    /**
     * Tests the setIncrementCpteCli() method.
     *
     * @return void
     */
    public function testSetIncrementCpteCli(): void {

        $obj = new Constantes();

        $obj->setIncrementCpteCli(10);
        $this->assertEquals(10, $obj->getIncrementCpteCli());
    }

    /**
     * Tests the setIncrementCpteFrn() method.
     *
     * @return void
     */
    public function testSetIncrementCpteFrn(): void {

        $obj = new Constantes();

        $obj->setIncrementCpteFrn(10);
        $this->assertEquals(10, $obj->getIncrementCpteFrn());
    }

    /**
     * Tests the setLiaisonBuCpta() method.
     *
     * @return void
     */
    public function testSetLiaisonBuCpta(): void {

        $obj = new Constantes();

        $obj->setLiaisonBuCpta(true);
        $this->assertEquals(true, $obj->getLiaisonBuCpta());
    }

    /**
     * Tests the setLibAffectation1() method.
     *
     * @return void
     */
    public function testSetLibAffectation1(): void {

        $obj = new Constantes();

        $obj->setLibAffectation1("libAffectation1");
        $this->assertEquals("libAffectation1", $obj->getLibAffectation1());
    }

    /**
     * Tests the setLibAffectation2() method.
     *
     * @return void
     */
    public function testSetLibAffectation2(): void {

        $obj = new Constantes();

        $obj->setLibAffectation2("libAffectation2");
        $this->assertEquals("libAffectation2", $obj->getLibAffectation2());
    }

    /**
     * Tests the setLibAffectation3() method.
     *
     * @return void
     */
    public function testSetLibAffectation3(): void {

        $obj = new Constantes();

        $obj->setLibAffectation3("libAffectation3");
        $this->assertEquals("libAffectation3", $obj->getLibAffectation3());
    }

    /**
     * Tests the setLibAffectation4() method.
     *
     * @return void
     */
    public function testSetLibAffectation4(): void {

        $obj = new Constantes();

        $obj->setLibAffectation4("libAffectation4");
        $this->assertEquals("libAffectation4", $obj->getLibAffectation4());
    }

    /**
     * Tests the setLibAffectation5() method.
     *
     * @return void
     */
    public function testSetLibAffectation5(): void {

        $obj = new Constantes();

        $obj->setLibAffectation5("libAffectation5");
        $this->assertEquals("libAffectation5", $obj->getLibAffectation5());
    }

    /**
     * Tests the setLibAffectation6() method.
     *
     * @return void
     */
    public function testSetLibAffectation6(): void {

        $obj = new Constantes();

        $obj->setLibAffectation6("libAffectation6");
        $this->assertEquals("libAffectation6", $obj->getLibAffectation6());
    }

    /**
     * Tests the setLibAffectation7() method.
     *
     * @return void
     */
    public function testSetLibAffectation7(): void {

        $obj = new Constantes();

        $obj->setLibAffectation7("libAffectation7");
        $this->assertEquals("libAffectation7", $obj->getLibAffectation7());
    }

    /**
     * Tests the setLibCritere1() method.
     *
     * @return void
     */
    public function testSetLibCritere1(): void {

        $obj = new Constantes();

        $obj->setLibCritere1("libCritere1");
        $this->assertEquals("libCritere1", $obj->getLibCritere1());
    }

    /**
     * Tests the setLibCritere10() method.
     *
     * @return void
     */
    public function testSetLibCritere10(): void {

        $obj = new Constantes();

        $obj->setLibCritere10("libCritere10");
        $this->assertEquals("libCritere10", $obj->getLibCritere10());
    }

    /**
     * Tests the setLibCritere2() method.
     *
     * @return void
     */
    public function testSetLibCritere2(): void {

        $obj = new Constantes();

        $obj->setLibCritere2("libCritere2");
        $this->assertEquals("libCritere2", $obj->getLibCritere2());
    }

    /**
     * Tests the setLibCritere3() method.
     *
     * @return void
     */
    public function testSetLibCritere3(): void {

        $obj = new Constantes();

        $obj->setLibCritere3("libCritere3");
        $this->assertEquals("libCritere3", $obj->getLibCritere3());
    }

    /**
     * Tests the setLibCritere4() method.
     *
     * @return void
     */
    public function testSetLibCritere4(): void {

        $obj = new Constantes();

        $obj->setLibCritere4("libCritere4");
        $this->assertEquals("libCritere4", $obj->getLibCritere4());
    }

    /**
     * Tests the setLibCritere5() method.
     *
     * @return void
     */
    public function testSetLibCritere5(): void {

        $obj = new Constantes();

        $obj->setLibCritere5("libCritere5");
        $this->assertEquals("libCritere5", $obj->getLibCritere5());
    }

    /**
     * Tests the setLibCritere6() method.
     *
     * @return void
     */
    public function testSetLibCritere6(): void {

        $obj = new Constantes();

        $obj->setLibCritere6("libCritere6");
        $this->assertEquals("libCritere6", $obj->getLibCritere6());
    }

    /**
     * Tests the setLibCritere7() method.
     *
     * @return void
     */
    public function testSetLibCritere7(): void {

        $obj = new Constantes();

        $obj->setLibCritere7("libCritere7");
        $this->assertEquals("libCritere7", $obj->getLibCritere7());
    }

    /**
     * Tests the setLibCritere8() method.
     *
     * @return void
     */
    public function testSetLibCritere8(): void {

        $obj = new Constantes();

        $obj->setLibCritere8("libCritere8");
        $this->assertEquals("libCritere8", $obj->getLibCritere8());
    }

    /**
     * Tests the setLibCritere9() method.
     *
     * @return void
     */
    public function testSetLibCritere9(): void {

        $obj = new Constantes();

        $obj->setLibCritere9("libCritere9");
        $this->assertEquals("libCritere9", $obj->getLibCritere9());
    }

    /**
     * Tests the setLibCritereAffaire1() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire1(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire1("libCritereAffaire1");
        $this->assertEquals("libCritereAffaire1", $obj->getLibCritereAffaire1());
    }

    /**
     * Tests the setLibCritereAffaire10() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire10(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire10("libCritereAffaire10");
        $this->assertEquals("libCritereAffaire10", $obj->getLibCritereAffaire10());
    }

    /**
     * Tests the setLibCritereAffaire2() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire2(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire2("libCritereAffaire2");
        $this->assertEquals("libCritereAffaire2", $obj->getLibCritereAffaire2());
    }

    /**
     * Tests the setLibCritereAffaire3() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire3(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire3("libCritereAffaire3");
        $this->assertEquals("libCritereAffaire3", $obj->getLibCritereAffaire3());
    }

    /**
     * Tests the setLibCritereAffaire4() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire4(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire4("libCritereAffaire4");
        $this->assertEquals("libCritereAffaire4", $obj->getLibCritereAffaire4());
    }

    /**
     * Tests the setLibCritereAffaire5() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire5(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire5("libCritereAffaire5");
        $this->assertEquals("libCritereAffaire5", $obj->getLibCritereAffaire5());
    }

    /**
     * Tests the setLibCritereAffaire6() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire6(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire6("libCritereAffaire6");
        $this->assertEquals("libCritereAffaire6", $obj->getLibCritereAffaire6());
    }

    /**
     * Tests the setLibCritereAffaire7() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire7(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire7("libCritereAffaire7");
        $this->assertEquals("libCritereAffaire7", $obj->getLibCritereAffaire7());
    }

    /**
     * Tests the setLibCritereAffaire8() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire8(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire8("libCritereAffaire8");
        $this->assertEquals("libCritereAffaire8", $obj->getLibCritereAffaire8());
    }

    /**
     * Tests the setLibCritereAffaire9() method.
     *
     * @return void
     */
    public function testSetLibCritereAffaire9(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire9("libCritereAffaire9");
        $this->assertEquals("libCritereAffaire9", $obj->getLibCritereAffaire9());
    }

    /**
     * Tests the setLibCritereArticle1() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle1(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle1("libCritereArticle1");
        $this->assertEquals("libCritereArticle1", $obj->getLibCritereArticle1());
    }

    /**
     * Tests the setLibCritereArticle10() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle10(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle10("libCritereArticle10");
        $this->assertEquals("libCritereArticle10", $obj->getLibCritereArticle10());
    }

    /**
     * Tests the setLibCritereArticle2() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle2(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle2("libCritereArticle2");
        $this->assertEquals("libCritereArticle2", $obj->getLibCritereArticle2());
    }

    /**
     * Tests the setLibCritereArticle3() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle3(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle3("libCritereArticle3");
        $this->assertEquals("libCritereArticle3", $obj->getLibCritereArticle3());
    }

    /**
     * Tests the setLibCritereArticle4() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle4(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle4("libCritereArticle4");
        $this->assertEquals("libCritereArticle4", $obj->getLibCritereArticle4());
    }

    /**
     * Tests the setLibCritereArticle5() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle5(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle5("libCritereArticle5");
        $this->assertEquals("libCritereArticle5", $obj->getLibCritereArticle5());
    }

    /**
     * Tests the setLibCritereArticle6() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle6(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle6("libCritereArticle6");
        $this->assertEquals("libCritereArticle6", $obj->getLibCritereArticle6());
    }

    /**
     * Tests the setLibCritereArticle7() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle7(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle7("libCritereArticle7");
        $this->assertEquals("libCritereArticle7", $obj->getLibCritereArticle7());
    }

    /**
     * Tests the setLibCritereArticle8() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle8(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle8("libCritereArticle8");
        $this->assertEquals("libCritereArticle8", $obj->getLibCritereArticle8());
    }

    /**
     * Tests the setLibCritereArticle9() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle9(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle9("libCritereArticle9");
        $this->assertEquals("libCritereArticle9", $obj->getLibCritereArticle9());
    }

    /**
     * Tests the setLibCritereEntPiece1() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece1(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece1("libCritereEntPiece1");
        $this->assertEquals("libCritereEntPiece1", $obj->getLibCritereEntPiece1());
    }

    /**
     * Tests the setLibCritereEntPiece10() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece10(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece10("libCritereEntPiece10");
        $this->assertEquals("libCritereEntPiece10", $obj->getLibCritereEntPiece10());
    }

    /**
     * Tests the setLibCritereEntPiece2() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece2(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece2("libCritereEntPiece2");
        $this->assertEquals("libCritereEntPiece2", $obj->getLibCritereEntPiece2());
    }

    /**
     * Tests the setLibCritereEntPiece3() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece3(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece3("libCritereEntPiece3");
        $this->assertEquals("libCritereEntPiece3", $obj->getLibCritereEntPiece3());
    }

    /**
     * Tests the setLibCritereEntPiece4() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece4(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece4("libCritereEntPiece4");
        $this->assertEquals("libCritereEntPiece4", $obj->getLibCritereEntPiece4());
    }

    /**
     * Tests the setLibCritereEntPiece5() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece5(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece5("libCritereEntPiece5");
        $this->assertEquals("libCritereEntPiece5", $obj->getLibCritereEntPiece5());
    }

    /**
     * Tests the setLibCritereEntPiece6() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece6(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece6("libCritereEntPiece6");
        $this->assertEquals("libCritereEntPiece6", $obj->getLibCritereEntPiece6());
    }

    /**
     * Tests the setLibCritereEntPiece7() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece7(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece7("libCritereEntPiece7");
        $this->assertEquals("libCritereEntPiece7", $obj->getLibCritereEntPiece7());
    }

    /**
     * Tests the setLibCritereEntPiece8() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece8(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece8("libCritereEntPiece8");
        $this->assertEquals("libCritereEntPiece8", $obj->getLibCritereEntPiece8());
    }

    /**
     * Tests the setLibCritereEntPiece9() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece9(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece9("libCritereEntPiece9");
        $this->assertEquals("libCritereEntPiece9", $obj->getLibCritereEntPiece9());
    }

    /**
     * Tests the setLibCritereInterloc() method.
     *
     * @return void
     */
    public function testSetLibCritereInterloc(): void {

        $obj = new Constantes();

        $obj->setLibCritereInterloc("libCritereInterloc");
        $this->assertEquals("libCritereInterloc", $obj->getLibCritereInterloc());
    }

    /**
     * Tests the setLibCritereInterloc2() method.
     *
     * @return void
     */
    public function testSetLibCritereInterloc2(): void {

        $obj = new Constantes();

        $obj->setLibCritereInterloc2("libCritereInterloc2");
        $this->assertEquals("libCritereInterloc2", $obj->getLibCritereInterloc2());
    }

    /**
     * Tests the setMajorHeuresTrav1() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav1(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav1(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav1());
    }

    /**
     * Tests the setMajorHeuresTrav2() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav2(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav2());
    }

    /**
     * Tests the setMajorHeuresTrav3() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav3(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav3());
    }

    /**
     * Tests the setMajorHeuresTrav4() method.
     *
     * @return void
     */
    public function testSetMajorHeuresTrav4(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav4());
    }

    /**
     * Tests the setMntTicketRestoA() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoA(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoA(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoA());
    }

    /**
     * Tests the setMntTicketRestoB() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoB(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoB(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoB());
    }

    /**
     * Tests the setMntTicketRestoC() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoC(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoC(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoC());
    }

    /**
     * Tests the setMntTicketRestoD() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoD(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoD(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoD());
    }

    /**
     * Tests the setMntTicketRestoE() method.
     *
     * @return void
     */
    public function testSetMntTicketRestoE(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoE(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoE());
    }

    /**
     * Tests the setModifAffaire() method.
     *
     * @return void
     */
    public function testSetModifAffaire(): void {

        $obj = new Constantes();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Tests the setModifArticle() method.
     *
     * @return void
     */
    public function testSetModifArticle(): void {

        $obj = new Constantes();

        $obj->setModifArticle("modifArticle");
        $this->assertEquals("modifArticle", $obj->getModifArticle());
    }

    /**
     * Tests the setModifBonsTravaux() method.
     *
     * @return void
     */
    public function testSetModifBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setModifBonsTravaux("modifBonsTravaux");
        $this->assertEquals("modifBonsTravaux", $obj->getModifBonsTravaux());
    }

    /**
     * Tests the setModifChantier() method.
     *
     * @return void
     */
    public function testSetModifChantier(): void {

        $obj = new Constantes();

        $obj->setModifChantier("modifChantier");
        $this->assertEquals("modifChantier", $obj->getModifChantier());
    }

    /**
     * Tests the setModifClient() method.
     *
     * @return void
     */
    public function testSetModifClient(): void {

        $obj = new Constantes();

        $obj->setModifClient("modifClient");
        $this->assertEquals("modifClient", $obj->getModifClient());
    }

    /**
     * Tests the setModifCommission() method.
     *
     * @return void
     */
    public function testSetModifCommission(): void {

        $obj = new Constantes();

        $obj->setModifCommission("modifCommission");
        $this->assertEquals("modifCommission", $obj->getModifCommission());
    }

    /**
     * Tests the setModifDossierFact() method.
     *
     * @return void
     */
    public function testSetModifDossierFact(): void {

        $obj = new Constantes();

        $obj->setModifDossierFact("modifDossierFact");
        $this->assertEquals("modifDossierFact", $obj->getModifDossierFact());
    }

    /**
     * Tests the setModifFournisseur() method.
     *
     * @return void
     */
    public function testSetModifFournisseur(): void {

        $obj = new Constantes();

        $obj->setModifFournisseur("modifFournisseur");
        $this->assertEquals("modifFournisseur", $obj->getModifFournisseur());
    }

    /**
     * Tests the setModifPlanFacturation() method.
     *
     * @return void
     */
    public function testSetModifPlanFacturation(): void {

        $obj = new Constantes();

        $obj->setModifPlanFacturation("modifPlanFacturation");
        $this->assertEquals("modifPlanFacturation", $obj->getModifPlanFacturation());
    }

    /**
     * Tests the setModifPlanTache() method.
     *
     * @return void
     */
    public function testSetModifPlanTache(): void {

        $obj = new Constantes();

        $obj->setModifPlanTache("modifPlanTache");
        $this->assertEquals("modifPlanTache", $obj->getModifPlanTache());
    }

    /**
     * Tests the setModifTache() method.
     *
     * @return void
     */
    public function testSetModifTache(): void {

        $obj = new Constantes();

        $obj->setModifTache("modifTache");
        $this->assertEquals("modifTache", $obj->getModifTache());
    }

    /**
     * Tests the setModifTarif() method.
     *
     * @return void
     */
    public function testSetModifTarif(): void {

        $obj = new Constantes();

        $obj->setModifTarif("modifTarif");
        $this->assertEquals("modifTarif", $obj->getModifTarif());
    }

    /**
     * Tests the setMonnaie() method.
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new Constantes();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Tests the setNbDecMonnaie() method.
     *
     * @return void
     */
    public function testSetNbDecMonnaie(): void {

        $obj = new Constantes();

        $obj->setNbDecMonnaie(10);
        $this->assertEquals(10, $obj->getNbDecMonnaie());
    }

    /**
     * Tests the setNoDossCpta() method.
     *
     * @return void
     */
    public function testSetNoDossCpta(): void {

        $obj = new Constantes();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Tests the setNoDossPaie() method.
     *
     * @return void
     */
    public function testSetNoDossPaie(): void {

        $obj = new Constantes();

        $obj->setNoDossPaie("noDossPaie");
        $this->assertEquals("noDossPaie", $obj->getNoDossPaie());
    }

    /**
     * Tests the setPrefixeAff() method.
     *
     * @return void
     */
    public function testSetPrefixeAff(): void {

        $obj = new Constantes();

        $obj->setPrefixeAff("prefixeAff");
        $this->assertEquals("prefixeAff", $obj->getPrefixeAff());
    }

    /**
     * Tests the setPrioriteSaisieAff() method.
     *
     * @return void
     */
    public function testSetPrioriteSaisieAff(): void {

        $obj = new Constantes();

        $obj->setPrioriteSaisieAff(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieAff());
    }

    /**
     * Tests the setPrioriteSaisieClient() method.
     *
     * @return void
     */
    public function testSetPrioriteSaisieClient(): void {

        $obj = new Constantes();

        $obj->setPrioriteSaisieClient(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieClient());
    }

    /**
     * Tests the setPrioriteSaisieFrn() method.
     *
     * @return void
     */
    public function testSetPrioriteSaisieFrn(): void {

        $obj = new Constantes();

        $obj->setPrioriteSaisieFrn(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieFrn());
    }

    /**
     * Tests the setProchainCpteCli() method.
     *
     * @return void
     */
    public function testSetProchainCpteCli(): void {

        $obj = new Constantes();

        $obj->setProchainCpteCli("prochainCpteCli");
        $this->assertEquals("prochainCpteCli", $obj->getProchainCpteCli());
    }

    /**
     * Tests the setProchainCpteFrn() method.
     *
     * @return void
     */
    public function testSetProchainCpteFrn(): void {

        $obj = new Constantes();

        $obj->setProchainCpteFrn("prochainCpteFrn");
        $this->assertEquals("prochainCpteFrn", $obj->getProchainCpteFrn());
    }

    /**
     * Tests the setProchainMoisOblig() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetProchainMoisOblig(): void {

        // Set a Date/time mock.
        $prochainMoisOblig = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setProchainMoisOblig($prochainMoisOblig);
        $this->assertSame($prochainMoisOblig, $obj->getProchainMoisOblig());
    }

    /**
     * Tests the setProchainNumAff() method.
     *
     * @return void
     */
    public function testSetProchainNumAff(): void {

        $obj = new Constantes();

        $obj->setProchainNumAff(10);
        $this->assertEquals(10, $obj->getProchainNumAff());
    }

    /**
     * Tests the setPxKmA() method.
     *
     * @return void
     */
    public function testSetPxKmA(): void {

        $obj = new Constantes();

        $obj->setPxKmA(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmA());
    }

    /**
     * Tests the setPxKmB() method.
     *
     * @return void
     */
    public function testSetPxKmB(): void {

        $obj = new Constantes();

        $obj->setPxKmB(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmB());
    }

    /**
     * Tests the setPxKmC() method.
     *
     * @return void
     */
    public function testSetPxKmC(): void {

        $obj = new Constantes();

        $obj->setPxKmC(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmC());
    }

    /**
     * Tests the setPxKmD() method.
     *
     * @return void
     */
    public function testSetPxKmD(): void {

        $obj = new Constantes();

        $obj->setPxKmD(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmD());
    }

    /**
     * Tests the setPxKmE() method.
     *
     * @return void
     */
    public function testSetPxKmE(): void {

        $obj = new Constantes();

        $obj->setPxKmE(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmE());
    }

    /**
     * Tests the setQetCodeCollaborateurDest() method.
     *
     * @return void
     */
    public function testSetQetCodeCollaborateurDest(): void {

        $obj = new Constantes();

        $obj->setQetCodeCollaborateurDest("qetCodeCollaborateurDest");
        $this->assertEquals("qetCodeCollaborateurDest", $obj->getQetCodeCollaborateurDest());
    }

    /**
     * Tests the setQtelCodeMission() method.
     *
     * @return void
     */
    public function testSetQtelCodeMission(): void {

        $obj = new Constantes();

        $obj->setQtelCodeMission("qtelCodeMission");
        $this->assertEquals("qtelCodeMission", $obj->getQtelCodeMission());
    }

    /**
     * Tests the setQtelCodeTache() method.
     *
     * @return void
     */
    public function testSetQtelCodeTache(): void {

        $obj = new Constantes();

        $obj->setQtelCodeTache("qtelCodeTache");
        $this->assertEquals("qtelCodeTache", $obj->getQtelCodeTache());
    }

    /**
     * Tests the setQtelSpecial() method.
     *
     * @return void
     */
    public function testSetQtelSpecial(): void {

        $obj = new Constantes();

        $obj->setQtelSpecial(10);
        $this->assertEquals(10, $obj->getQtelSpecial());
    }

    /**
     * Tests the setRacDataCpta() method.
     *
     * @return void
     */
    public function testSetRacDataCpta(): void {

        $obj = new Constantes();

        $obj->setRacDataCpta("racDataCpta");
        $this->assertEquals("racDataCpta", $obj->getRacDataCpta());
    }

    /**
     * Tests the setRacDataPaie() method.
     *
     * @return void
     */
    public function testSetRacDataPaie(): void {

        $obj = new Constantes();

        $obj->setRacDataPaie("racDataPaie");
        $this->assertEquals("racDataPaie", $obj->getRacDataPaie());
    }

    /**
     * Tests the setRadicalCompteCli() method.
     *
     * @return void
     */
    public function testSetRadicalCompteCli(): void {

        $obj = new Constantes();

        $obj->setRadicalCompteCli("radicalCompteCli");
        $this->assertEquals("radicalCompteCli", $obj->getRadicalCompteCli());
    }

    /**
     * Tests the setRadicalCompteFrn() method.
     *
     * @return void
     */
    public function testSetRadicalCompteFrn(): void {

        $obj = new Constantes();

        $obj->setRadicalCompteFrn("radicalCompteFrn");
        $this->assertEquals("radicalCompteFrn", $obj->getRadicalCompteFrn());
    }

    /**
     * Tests the setSaisDateFin() method.
     *
     * @return void
     */
    public function testSetSaisDateFin(): void {

        $obj = new Constantes();

        $obj->setSaisDateFin(true);
        $this->assertEquals(true, $obj->getSaisDateFin());
    }

    /**
     * Tests the setTdfcAdhesionTotale() method.
     *
     * @return void
     */
    public function testSetTdfcAdhesionTotale(): void {

        $obj = new Constantes();

        $obj->setTdfcAdhesionTotale(true);
        $this->assertEquals(true, $obj->getTdfcAdhesionTotale());
    }

    /**
     * Tests the setTdfcEmetteur() method.
     *
     * @return void
     */
    public function testSetTdfcEmetteur(): void {

        $obj = new Constantes();

        $obj->setTdfcEmetteur("tdfcEmetteur");
        $this->assertEquals("tdfcEmetteur", $obj->getTdfcEmetteur());
    }

    /**
     * Tests the setTdfcFacturant() method.
     *
     * @return void
     */
    public function testSetTdfcFacturant(): void {

        $obj = new Constantes();

        $obj->setTdfcFacturant("tdfcFacturant");
        $this->assertEquals("tdfcFacturant", $obj->getTdfcFacturant());
    }

    /**
     * Tests the setTdfcInfoTrans() method.
     *
     * @return void
     */
    public function testSetTdfcInfoTrans(): void {

        $obj = new Constantes();

        $obj->setTdfcInfoTrans("tdfcInfoTrans");
        $this->assertEquals("tdfcInfoTrans", $obj->getTdfcInfoTrans());
    }

    /**
     * Tests the setTpInterditCreatMillesime() method.
     *
     * @return void
     */
    public function testSetTpInterditCreatMillesime(): void {

        $obj = new Constantes();

        $obj->setTpInterditCreatMillesime(true);
        $this->assertEquals(true, $obj->getTpInterditCreatMillesime());
    }

    /**
     * Tests the setTpInterditCreatMission() method.
     *
     * @return void
     */
    public function testSetTpInterditCreatMission(): void {

        $obj = new Constantes();

        $obj->setTpInterditCreatMission(true);
        $this->assertEquals(true, $obj->getTpInterditCreatMission());
    }

    /**
     * Tests the setTpPasClientsSortis() method.
     *
     * @return void
     */
    public function testSetTpPasClientsSortis(): void {

        $obj = new Constantes();

        $obj->setTpPasClientsSortis(true);
        $this->assertEquals(true, $obj->getTpPasClientsSortis());
    }

    /**
     * Tests the setTpPasIntervenants() method.
     *
     * @return void
     */
    public function testSetTpPasIntervenants(): void {

        $obj = new Constantes();

        $obj->setTpPasIntervenants(true);
        $this->assertEquals(true, $obj->getTpPasIntervenants());
    }

    /**
     * Tests the setTpPrixInvisible() method.
     *
     * @return void
     */
    public function testSetTpPrixInvisible(): void {

        $obj = new Constantes();

        $obj->setTpPrixInvisible(true);
        $this->assertEquals(true, $obj->getTpPrixInvisible());
    }

    /**
     * Tests the setTpRempliPrefAuto() method.
     *
     * @return void
     */
    public function testSetTpRempliPrefAuto(): void {

        $obj = new Constantes();

        $obj->setTpRempliPrefAuto(true);
        $this->assertEquals(true, $obj->getTpRempliPrefAuto());
    }

    /**
     * Tests the setTpSaisieDos() method.
     *
     * @return void
     */
    public function testSetTpSaisieDos(): void {

        $obj = new Constantes();

        $obj->setTpSaisieDos(true);
        $this->assertEquals(true, $obj->getTpSaisieDos());
    }

    /**
     * Tests the setTpsPassesInterditPrix() method.
     *
     * @return void
     */
    public function testSetTpsPassesInterditPrix(): void {

        $obj = new Constantes();

        $obj->setTpsPassesInterditPrix(true);
        $this->assertEquals(true, $obj->getTpsPassesInterditPrix());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Constantes();

        $this->assertNull($obj->getAccesAutoriseBonsTravaux());
        $this->assertNull($obj->getAccesAutorisePlanFacturation());
        $this->assertNull($obj->getAccesAutorisePlanTache());
        $this->assertNull($obj->getAccesDocsCab());
        $this->assertNull($obj->getAccesDossierCpta());
        $this->assertNull($obj->getAccesDossierPaie());
        $this->assertNull($obj->getAccesStatCab());
        $this->assertNull($obj->getActivationConfCmavCli());
        $this->assertNull($obj->getActivationConfControle());
        $this->assertNull($obj->getActivationLstRestri());
        $this->assertNull($obj->getActivationNiveau2());
        $this->assertNull($obj->getActivationNiveau3());
        $this->assertNull($obj->getAffichePoint());
        $this->assertNull($obj->getAfficheSemaine());
        $this->assertNull($obj->getAnnulationAffaire());
        $this->assertNull($obj->getAnnulationArticle());
        $this->assertNull($obj->getAnnulationBonsTravaux());
        $this->assertNull($obj->getAnnulationChantier());
        $this->assertNull($obj->getAnnulationClient());
        $this->assertNull($obj->getAnnulationCommission());
        $this->assertNull($obj->getAnnulationDossierCpta());
        $this->assertNull($obj->getAnnulationDossierFact());
        $this->assertNull($obj->getAnnulationDossierPaie());
        $this->assertNull($obj->getAnnulationFournisseur());
        $this->assertNull($obj->getAnnulationPlanFacturation());
        $this->assertNull($obj->getAnnulationPlanTache());
        $this->assertNull($obj->getAnnulationTache());
        $this->assertNull($obj->getAnnulationTarif());
        $this->assertNull($obj->getBlocageEdCli());
        $this->assertNull($obj->getBudgetTypeSaisie());
        $this->assertNull($obj->getChampsCritere1());
        $this->assertNull($obj->getChampsCritere10());
        $this->assertNull($obj->getChampsCritere2());
        $this->assertNull($obj->getChampsCritere3());
        $this->assertNull($obj->getChampsCritere4());
        $this->assertNull($obj->getChampsCritere5());
        $this->assertNull($obj->getChampsCritere6());
        $this->assertNull($obj->getChampsCritere7());
        $this->assertNull($obj->getChampsCritere8());
        $this->assertNull($obj->getChampsCritere9());
        $this->assertNull($obj->getChampsCritereAffaire1());
        $this->assertNull($obj->getChampsCritereAffaire10());
        $this->assertNull($obj->getChampsCritereAffaire2());
        $this->assertNull($obj->getChampsCritereAffaire3());
        $this->assertNull($obj->getChampsCritereAffaire4());
        $this->assertNull($obj->getChampsCritereAffaire5());
        $this->assertNull($obj->getChampsCritereAffaire6());
        $this->assertNull($obj->getChampsCritereAffaire7());
        $this->assertNull($obj->getChampsCritereAffaire8());
        $this->assertNull($obj->getChampsCritereAffaire9());
        $this->assertNull($obj->getChampsCritereArticle1());
        $this->assertNull($obj->getChampsCritereArticle10());
        $this->assertNull($obj->getChampsCritereArticle2());
        $this->assertNull($obj->getChampsCritereArticle3());
        $this->assertNull($obj->getChampsCritereArticle4());
        $this->assertNull($obj->getChampsCritereArticle5());
        $this->assertNull($obj->getChampsCritereArticle6());
        $this->assertNull($obj->getChampsCritereArticle7());
        $this->assertNull($obj->getChampsCritereArticle8());
        $this->assertNull($obj->getChampsCritereArticle9());
        $this->assertNull($obj->getChampsCritereEntPiece1());
        $this->assertNull($obj->getChampsCritereEntPiece10());
        $this->assertNull($obj->getChampsCritereEntPiece2());
        $this->assertNull($obj->getChampsCritereEntPiece3());
        $this->assertNull($obj->getChampsCritereEntPiece4());
        $this->assertNull($obj->getChampsCritereEntPiece5());
        $this->assertNull($obj->getChampsCritereEntPiece6());
        $this->assertNull($obj->getChampsCritereEntPiece7());
        $this->assertNull($obj->getChampsCritereEntPiece8());
        $this->assertNull($obj->getChampsCritereEntPiece9());
        $this->assertNull($obj->getChronoActivation());
        $this->assertNull($obj->getChronoPrefixe());
        $this->assertNull($obj->getChronoProchainNum());
        $this->assertNull($obj->getCleAccesCnPaie());
        $this->assertNull($obj->getCleAccesFicheClient());
        $this->assertNull($obj->getCleAccesMenus());
        $this->assertNull($obj->getCleAccesParam());
        $this->assertNull($obj->getCleDesEtrCommuns());
        $this->assertNull($obj->getCleJrnLibCommuns());
        $this->assertNull($obj->getCodeEmetteur());
        $this->assertNull($obj->getCodeExpertDefaut());
        $this->assertNull($obj->getCodeRegroupementPreFact());
        $this->assertNull($obj->getConversionPwd());
        $this->assertNull($obj->getCpteCollectifCli());
        $this->assertNull($obj->getCpteCollectifFrn());
        $this->assertNull($obj->getCreationAffaire());
        $this->assertNull($obj->getCreationArticle());
        $this->assertNull($obj->getCreationBonsTravaux());
        $this->assertNull($obj->getCreationChantier());
        $this->assertNull($obj->getCreationClient());
        $this->assertNull($obj->getCreationCommission());
        $this->assertNull($obj->getCreationDossierCpta());
        $this->assertNull($obj->getCreationDossierFact());
        $this->assertNull($obj->getCreationDossierPaie());
        $this->assertNull($obj->getCreationFournisseur());
        $this->assertNull($obj->getCreationPlanFacturation());
        $this->assertNull($obj->getCreationPlanTache());
        $this->assertNull($obj->getCreationProspect());
        $this->assertNull($obj->getCreationTache());
        $this->assertNull($obj->getCreationTarif());
        $this->assertNull($obj->getDateCloture());
        $this->assertNull($obj->getDtDernModifConfZone());
        $this->assertNull($obj->getEchAffEnMt());
        $this->assertNull($obj->getFonctionnementCga());
        $this->assertNull($obj->getHeuresTrav1());
        $this->assertNull($obj->getHeuresTrav2());
        $this->assertNull($obj->getHeuresTrav3());
        $this->assertNull($obj->getHeuresTrav4());
        $this->assertNull($obj->getIncremAuto());
        $this->assertNull($obj->getIncremAutoAff());
        $this->assertNull($obj->getIncremAutoFrn());
        $this->assertNull($obj->getIncremCpteCliAuto());
        $this->assertNull($obj->getIncremCpteFrnAuto());
        $this->assertNull($obj->getIncrementCpteCli());
        $this->assertNull($obj->getIncrementCpteFrn());
        $this->assertNull($obj->getLiaisonBuCpta());
        $this->assertNull($obj->getLibAffectation1());
        $this->assertNull($obj->getLibAffectation2());
        $this->assertNull($obj->getLibAffectation3());
        $this->assertNull($obj->getLibAffectation4());
        $this->assertNull($obj->getLibAffectation5());
        $this->assertNull($obj->getLibAffectation6());
        $this->assertNull($obj->getLibAffectation7());
        $this->assertNull($obj->getLibCritere1());
        $this->assertNull($obj->getLibCritere10());
        $this->assertNull($obj->getLibCritere2());
        $this->assertNull($obj->getLibCritere3());
        $this->assertNull($obj->getLibCritere4());
        $this->assertNull($obj->getLibCritere5());
        $this->assertNull($obj->getLibCritere6());
        $this->assertNull($obj->getLibCritere7());
        $this->assertNull($obj->getLibCritere8());
        $this->assertNull($obj->getLibCritere9());
        $this->assertNull($obj->getLibCritereAffaire1());
        $this->assertNull($obj->getLibCritereAffaire10());
        $this->assertNull($obj->getLibCritereAffaire2());
        $this->assertNull($obj->getLibCritereAffaire3());
        $this->assertNull($obj->getLibCritereAffaire4());
        $this->assertNull($obj->getLibCritereAffaire5());
        $this->assertNull($obj->getLibCritereAffaire6());
        $this->assertNull($obj->getLibCritereAffaire7());
        $this->assertNull($obj->getLibCritereAffaire8());
        $this->assertNull($obj->getLibCritereAffaire9());
        $this->assertNull($obj->getLibCritereArticle1());
        $this->assertNull($obj->getLibCritereArticle10());
        $this->assertNull($obj->getLibCritereArticle2());
        $this->assertNull($obj->getLibCritereArticle3());
        $this->assertNull($obj->getLibCritereArticle4());
        $this->assertNull($obj->getLibCritereArticle5());
        $this->assertNull($obj->getLibCritereArticle6());
        $this->assertNull($obj->getLibCritereArticle7());
        $this->assertNull($obj->getLibCritereArticle8());
        $this->assertNull($obj->getLibCritereArticle9());
        $this->assertNull($obj->getLibCritereEntPiece1());
        $this->assertNull($obj->getLibCritereEntPiece10());
        $this->assertNull($obj->getLibCritereEntPiece2());
        $this->assertNull($obj->getLibCritereEntPiece3());
        $this->assertNull($obj->getLibCritereEntPiece4());
        $this->assertNull($obj->getLibCritereEntPiece5());
        $this->assertNull($obj->getLibCritereEntPiece6());
        $this->assertNull($obj->getLibCritereEntPiece7());
        $this->assertNull($obj->getLibCritereEntPiece8());
        $this->assertNull($obj->getLibCritereEntPiece9());
        $this->assertNull($obj->getLibCritereInterloc());
        $this->assertNull($obj->getLibCritereInterloc2());
        $this->assertNull($obj->getMajorHeuresTrav1());
        $this->assertNull($obj->getMajorHeuresTrav2());
        $this->assertNull($obj->getMajorHeuresTrav3());
        $this->assertNull($obj->getMajorHeuresTrav4());
        $this->assertNull($obj->getMntTicketRestoA());
        $this->assertNull($obj->getMntTicketRestoB());
        $this->assertNull($obj->getMntTicketRestoC());
        $this->assertNull($obj->getMntTicketRestoD());
        $this->assertNull($obj->getMntTicketRestoE());
        $this->assertNull($obj->getModifAffaire());
        $this->assertNull($obj->getModifArticle());
        $this->assertNull($obj->getModifBonsTravaux());
        $this->assertNull($obj->getModifChantier());
        $this->assertNull($obj->getModifClient());
        $this->assertNull($obj->getModifCommission());
        $this->assertNull($obj->getModifDossierFact());
        $this->assertNull($obj->getModifFournisseur());
        $this->assertNull($obj->getModifPlanFacturation());
        $this->assertNull($obj->getModifPlanTache());
        $this->assertNull($obj->getModifTache());
        $this->assertNull($obj->getModifTarif());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getNbDecMonnaie());
        $this->assertNull($obj->getNoDossCpta());
        $this->assertNull($obj->getNoDossPaie());
        $this->assertNull($obj->getPrefixeAff());
        $this->assertNull($obj->getPrioriteSaisieAff());
        $this->assertNull($obj->getPrioriteSaisieClient());
        $this->assertNull($obj->getPrioriteSaisieFrn());
        $this->assertNull($obj->getProchainCpteCli());
        $this->assertNull($obj->getProchainCpteFrn());
        $this->assertNull($obj->getProchainMoisOblig());
        $this->assertNull($obj->getProchainNumAff());
        $this->assertNull($obj->getPxKmA());
        $this->assertNull($obj->getPxKmB());
        $this->assertNull($obj->getPxKmC());
        $this->assertNull($obj->getPxKmD());
        $this->assertNull($obj->getPxKmE());
        $this->assertNull($obj->getQetCodeCollaborateurDest());
        $this->assertNull($obj->getQtelCodeMission());
        $this->assertNull($obj->getQtelCodeTache());
        $this->assertNull($obj->getQtelSpecial());
        $this->assertNull($obj->getRacDataCpta());
        $this->assertNull($obj->getRacDataPaie());
        $this->assertNull($obj->getRadicalCompteCli());
        $this->assertNull($obj->getRadicalCompteFrn());
        $this->assertNull($obj->getSaisDateFin());
        $this->assertNull($obj->getTdfcAdhesionTotale());
        $this->assertNull($obj->getTdfcEmetteur());
        $this->assertNull($obj->getTdfcFacturant());
        $this->assertNull($obj->getTdfcInfoTrans());
        $this->assertNull($obj->getTpInterditCreatMillesime());
        $this->assertNull($obj->getTpInterditCreatMission());
        $this->assertNull($obj->getTpPasClientsSortis());
        $this->assertNull($obj->getTpPasIntervenants());
        $this->assertNull($obj->getTpPrixInvisible());
        $this->assertNull($obj->getTpRempliPrefAuto());
        $this->assertNull($obj->getTpSaisieDos());
        $this->assertNull($obj->getTpsPassesInterditPrix());
    }
}
