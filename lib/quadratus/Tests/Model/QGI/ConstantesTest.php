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
use WBW\Library\Quadratus\Model\QGI\Constantes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ConstantesTest extends AbstractTestCase {

    /**
     * Test setAccesAutoriseBonsTravaux()
     *
     * @return void
     */
    public function testSetAccesAutoriseBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setAccesAutoriseBonsTravaux(true);
        $this->assertTrue($obj->getAccesAutoriseBonsTravaux());
    }

    /**
     * Test setAccesAutorisePlanFacturation()
     *
     * @return void
     */
    public function testSetAccesAutorisePlanFacturation(): void {

        $obj = new Constantes();

        $obj->setAccesAutorisePlanFacturation(true);
        $this->assertTrue($obj->getAccesAutorisePlanFacturation());
    }

    /**
     * Test setAccesAutorisePlanTache()
     *
     * @return void
     */
    public function testSetAccesAutorisePlanTache(): void {

        $obj = new Constantes();

        $obj->setAccesAutorisePlanTache(true);
        $this->assertTrue($obj->getAccesAutorisePlanTache());
    }

    /**
     * Test setAccesDocsCab()
     *
     * @return void
     */
    public function testSetAccesDocsCab(): void {

        $obj = new Constantes();

        $obj->setAccesDocsCab(true);
        $this->assertTrue($obj->getAccesDocsCab());
    }

    /**
     * Test setAccesDossierCpta()
     *
     * @return void
     */
    public function testSetAccesDossierCpta(): void {

        $obj = new Constantes();

        $obj->setAccesDossierCpta("accesDossierCpta");
        $this->assertEquals("accesDossierCpta", $obj->getAccesDossierCpta());
    }

    /**
     * Test setAccesDossierPaie()
     *
     * @return void
     */
    public function testSetAccesDossierPaie(): void {

        $obj = new Constantes();

        $obj->setAccesDossierPaie("accesDossierPaie");
        $this->assertEquals("accesDossierPaie", $obj->getAccesDossierPaie());
    }

    /**
     * Test setAccesStatCab()
     *
     * @return void
     */
    public function testSetAccesStatCab(): void {

        $obj = new Constantes();

        $obj->setAccesStatCab(true);
        $this->assertTrue($obj->getAccesStatCab());
    }

    /**
     * Test setActivationConfCmavCli()
     *
     * @return void
     */
    public function testSetActivationConfCmavCli(): void {

        $obj = new Constantes();

        $obj->setActivationConfCmavCli(true);
        $this->assertTrue($obj->getActivationConfCmavCli());
    }

    /**
     * Test setActivationConfControle()
     *
     * @return void
     */
    public function testSetActivationConfControle(): void {

        $obj = new Constantes();

        $obj->setActivationConfControle(true);
        $this->assertTrue($obj->getActivationConfControle());
    }

    /**
     * Test setActivationLstRestri()
     *
     * @return void
     */
    public function testSetActivationLstRestri(): void {

        $obj = new Constantes();

        $obj->setActivationLstRestri(true);
        $this->assertTrue($obj->getActivationLstRestri());
    }

    /**
     * Test setActivationNiveau2()
     *
     * @return void
     */
    public function testSetActivationNiveau2(): void {

        $obj = new Constantes();

        $obj->setActivationNiveau2(true);
        $this->assertTrue($obj->getActivationNiveau2());
    }

    /**
     * Test setActivationNiveau3()
     *
     * @return void
     */
    public function testSetActivationNiveau3(): void {

        $obj = new Constantes();

        $obj->setActivationNiveau3(true);
        $this->assertTrue($obj->getActivationNiveau3());
    }

    /**
     * Test setAffichePoint()
     *
     * @return void
     */
    public function testSetAffichePoint(): void {

        $obj = new Constantes();

        $obj->setAffichePoint(true);
        $this->assertTrue($obj->getAffichePoint());
    }

    /**
     * Test setAfficheSemaine()
     *
     * @return void
     */
    public function testSetAfficheSemaine(): void {

        $obj = new Constantes();

        $obj->setAfficheSemaine(true);
        $this->assertTrue($obj->getAfficheSemaine());
    }

    /**
     * Test setAnnulationAffaire()
     *
     * @return void
     */
    public function testSetAnnulationAffaire(): void {

        $obj = new Constantes();

        $obj->setAnnulationAffaire(true);
        $this->assertTrue($obj->getAnnulationAffaire());
    }

    /**
     * Test setAnnulationArticle()
     *
     * @return void
     */
    public function testSetAnnulationArticle(): void {

        $obj = new Constantes();

        $obj->setAnnulationArticle(true);
        $this->assertTrue($obj->getAnnulationArticle());
    }

    /**
     * Test setAnnulationBonsTravaux()
     *
     * @return void
     */
    public function testSetAnnulationBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setAnnulationBonsTravaux(true);
        $this->assertTrue($obj->getAnnulationBonsTravaux());
    }

    /**
     * Test setAnnulationChantier()
     *
     * @return void
     */
    public function testSetAnnulationChantier(): void {

        $obj = new Constantes();

        $obj->setAnnulationChantier(true);
        $this->assertTrue($obj->getAnnulationChantier());
    }

    /**
     * Test setAnnulationClient()
     *
     * @return void
     */
    public function testSetAnnulationClient(): void {

        $obj = new Constantes();

        $obj->setAnnulationClient(true);
        $this->assertTrue($obj->getAnnulationClient());
    }

    /**
     * Test setAnnulationCommission()
     *
     * @return void
     */
    public function testSetAnnulationCommission(): void {

        $obj = new Constantes();

        $obj->setAnnulationCommission(true);
        $this->assertTrue($obj->getAnnulationCommission());
    }

    /**
     * Test setAnnulationDossierCpta()
     *
     * @return void
     */
    public function testSetAnnulationDossierCpta(): void {

        $obj = new Constantes();

        $obj->setAnnulationDossierCpta(true);
        $this->assertTrue($obj->getAnnulationDossierCpta());
    }

    /**
     * Test setAnnulationDossierFact()
     *
     * @return void
     */
    public function testSetAnnulationDossierFact(): void {

        $obj = new Constantes();

        $obj->setAnnulationDossierFact(true);
        $this->assertTrue($obj->getAnnulationDossierFact());
    }

    /**
     * Test setAnnulationDossierPaie()
     *
     * @return void
     */
    public function testSetAnnulationDossierPaie(): void {

        $obj = new Constantes();

        $obj->setAnnulationDossierPaie(true);
        $this->assertTrue($obj->getAnnulationDossierPaie());
    }

    /**
     * Test setAnnulationFournisseur()
     *
     * @return void
     */
    public function testSetAnnulationFournisseur(): void {

        $obj = new Constantes();

        $obj->setAnnulationFournisseur(true);
        $this->assertTrue($obj->getAnnulationFournisseur());
    }

    /**
     * Test setAnnulationPlanFacturation()
     *
     * @return void
     */
    public function testSetAnnulationPlanFacturation(): void {

        $obj = new Constantes();

        $obj->setAnnulationPlanFacturation(true);
        $this->assertTrue($obj->getAnnulationPlanFacturation());
    }

    /**
     * Test setAnnulationPlanTache()
     *
     * @return void
     */
    public function testSetAnnulationPlanTache(): void {

        $obj = new Constantes();

        $obj->setAnnulationPlanTache(true);
        $this->assertTrue($obj->getAnnulationPlanTache());
    }

    /**
     * Test setAnnulationTache()
     *
     * @return void
     */
    public function testSetAnnulationTache(): void {

        $obj = new Constantes();

        $obj->setAnnulationTache(true);
        $this->assertTrue($obj->getAnnulationTache());
    }

    /**
     * Test setAnnulationTarif()
     *
     * @return void
     */
    public function testSetAnnulationTarif(): void {

        $obj = new Constantes();

        $obj->setAnnulationTarif(true);
        $this->assertTrue($obj->getAnnulationTarif());
    }

    /**
     * Test setBlocageEdCli()
     *
     * @return void
     */
    public function testSetBlocageEdCli(): void {

        $obj = new Constantes();

        $obj->setBlocageEdCli(true);
        $this->assertTrue($obj->getBlocageEdCli());
    }

    /**
     * Test setBudgetTypeSaisie()
     *
     * @return void
     */
    public function testSetBudgetTypeSaisie(): void {

        $obj = new Constantes();

        $obj->setBudgetTypeSaisie(10);
        $this->assertEquals(10, $obj->getBudgetTypeSaisie());
    }

    /**
     * Test setChampsCritere1()
     *
     * @return void
     */
    public function testSetChampsCritere1(): void {

        $obj = new Constantes();

        $obj->setChampsCritere1("champsCritere1");
        $this->assertEquals("champsCritere1", $obj->getChampsCritere1());
    }

    /**
     * Test setChampsCritere10()
     *
     * @return void
     */
    public function testSetChampsCritere10(): void {

        $obj = new Constantes();

        $obj->setChampsCritere10("champsCritere10");
        $this->assertEquals("champsCritere10", $obj->getChampsCritere10());
    }

    /**
     * Test setChampsCritere2()
     *
     * @return void
     */
    public function testSetChampsCritere2(): void {

        $obj = new Constantes();

        $obj->setChampsCritere2("champsCritere2");
        $this->assertEquals("champsCritere2", $obj->getChampsCritere2());
    }

    /**
     * Test setChampsCritere3()
     *
     * @return void
     */
    public function testSetChampsCritere3(): void {

        $obj = new Constantes();

        $obj->setChampsCritere3("champsCritere3");
        $this->assertEquals("champsCritere3", $obj->getChampsCritere3());
    }

    /**
     * Test setChampsCritere4()
     *
     * @return void
     */
    public function testSetChampsCritere4(): void {

        $obj = new Constantes();

        $obj->setChampsCritere4("champsCritere4");
        $this->assertEquals("champsCritere4", $obj->getChampsCritere4());
    }

    /**
     * Test setChampsCritere5()
     *
     * @return void
     */
    public function testSetChampsCritere5(): void {

        $obj = new Constantes();

        $obj->setChampsCritere5("champsCritere5");
        $this->assertEquals("champsCritere5", $obj->getChampsCritere5());
    }

    /**
     * Test setChampsCritere6()
     *
     * @return void
     */
    public function testSetChampsCritere6(): void {

        $obj = new Constantes();

        $obj->setChampsCritere6("champsCritere6");
        $this->assertEquals("champsCritere6", $obj->getChampsCritere6());
    }

    /**
     * Test setChampsCritere7()
     *
     * @return void
     */
    public function testSetChampsCritere7(): void {

        $obj = new Constantes();

        $obj->setChampsCritere7("champsCritere7");
        $this->assertEquals("champsCritere7", $obj->getChampsCritere7());
    }

    /**
     * Test setChampsCritere8()
     *
     * @return void
     */
    public function testSetChampsCritere8(): void {

        $obj = new Constantes();

        $obj->setChampsCritere8("champsCritere8");
        $this->assertEquals("champsCritere8", $obj->getChampsCritere8());
    }

    /**
     * Test setChampsCritere9()
     *
     * @return void
     */
    public function testSetChampsCritere9(): void {

        $obj = new Constantes();

        $obj->setChampsCritere9("champsCritere9");
        $this->assertEquals("champsCritere9", $obj->getChampsCritere9());
    }

    /**
     * Test setChampsCritereAffaire1()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire1(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire1("champsCritereAffaire1");
        $this->assertEquals("champsCritereAffaire1", $obj->getChampsCritereAffaire1());
    }

    /**
     * Test setChampsCritereAffaire10()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire10(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire10("champsCritereAffaire10");
        $this->assertEquals("champsCritereAffaire10", $obj->getChampsCritereAffaire10());
    }

    /**
     * Test setChampsCritereAffaire2()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire2(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire2("champsCritereAffaire2");
        $this->assertEquals("champsCritereAffaire2", $obj->getChampsCritereAffaire2());
    }

    /**
     * Test setChampsCritereAffaire3()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire3(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire3("champsCritereAffaire3");
        $this->assertEquals("champsCritereAffaire3", $obj->getChampsCritereAffaire3());
    }

    /**
     * Test setChampsCritereAffaire4()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire4(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire4("champsCritereAffaire4");
        $this->assertEquals("champsCritereAffaire4", $obj->getChampsCritereAffaire4());
    }

    /**
     * Test setChampsCritereAffaire5()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire5(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire5("champsCritereAffaire5");
        $this->assertEquals("champsCritereAffaire5", $obj->getChampsCritereAffaire5());
    }

    /**
     * Test setChampsCritereAffaire6()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire6(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire6("champsCritereAffaire6");
        $this->assertEquals("champsCritereAffaire6", $obj->getChampsCritereAffaire6());
    }

    /**
     * Test setChampsCritereAffaire7()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire7(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire7("champsCritereAffaire7");
        $this->assertEquals("champsCritereAffaire7", $obj->getChampsCritereAffaire7());
    }

    /**
     * Test setChampsCritereAffaire8()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire8(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire8("champsCritereAffaire8");
        $this->assertEquals("champsCritereAffaire8", $obj->getChampsCritereAffaire8());
    }

    /**
     * Test setChampsCritereAffaire9()
     *
     * @return void
     */
    public function testSetChampsCritereAffaire9(): void {

        $obj = new Constantes();

        $obj->setChampsCritereAffaire9("champsCritereAffaire9");
        $this->assertEquals("champsCritereAffaire9", $obj->getChampsCritereAffaire9());
    }

    /**
     * Test setChampsCritereArticle1()
     *
     * @return void
     */
    public function testSetChampsCritereArticle1(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle1("champsCritereArticle1");
        $this->assertEquals("champsCritereArticle1", $obj->getChampsCritereArticle1());
    }

    /**
     * Test setChampsCritereArticle10()
     *
     * @return void
     */
    public function testSetChampsCritereArticle10(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle10("champsCritereArticle10");
        $this->assertEquals("champsCritereArticle10", $obj->getChampsCritereArticle10());
    }

    /**
     * Test setChampsCritereArticle2()
     *
     * @return void
     */
    public function testSetChampsCritereArticle2(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle2("champsCritereArticle2");
        $this->assertEquals("champsCritereArticle2", $obj->getChampsCritereArticle2());
    }

    /**
     * Test setChampsCritereArticle3()
     *
     * @return void
     */
    public function testSetChampsCritereArticle3(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle3("champsCritereArticle3");
        $this->assertEquals("champsCritereArticle3", $obj->getChampsCritereArticle3());
    }

    /**
     * Test setChampsCritereArticle4()
     *
     * @return void
     */
    public function testSetChampsCritereArticle4(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle4("champsCritereArticle4");
        $this->assertEquals("champsCritereArticle4", $obj->getChampsCritereArticle4());
    }

    /**
     * Test setChampsCritereArticle5()
     *
     * @return void
     */
    public function testSetChampsCritereArticle5(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle5("champsCritereArticle5");
        $this->assertEquals("champsCritereArticle5", $obj->getChampsCritereArticle5());
    }

    /**
     * Test setChampsCritereArticle6()
     *
     * @return void
     */
    public function testSetChampsCritereArticle6(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle6("champsCritereArticle6");
        $this->assertEquals("champsCritereArticle6", $obj->getChampsCritereArticle6());
    }

    /**
     * Test setChampsCritereArticle7()
     *
     * @return void
     */
    public function testSetChampsCritereArticle7(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle7("champsCritereArticle7");
        $this->assertEquals("champsCritereArticle7", $obj->getChampsCritereArticle7());
    }

    /**
     * Test setChampsCritereArticle8()
     *
     * @return void
     */
    public function testSetChampsCritereArticle8(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle8("champsCritereArticle8");
        $this->assertEquals("champsCritereArticle8", $obj->getChampsCritereArticle8());
    }

    /**
     * Test setChampsCritereArticle9()
     *
     * @return void
     */
    public function testSetChampsCritereArticle9(): void {

        $obj = new Constantes();

        $obj->setChampsCritereArticle9("champsCritereArticle9");
        $this->assertEquals("champsCritereArticle9", $obj->getChampsCritereArticle9());
    }

    /**
     * Test setChampsCritereEntPiece1()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece1(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece1("champsCritereEntPiece1");
        $this->assertEquals("champsCritereEntPiece1", $obj->getChampsCritereEntPiece1());
    }

    /**
     * Test setChampsCritereEntPiece10()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece10(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece10("champsCritereEntPiece10");
        $this->assertEquals("champsCritereEntPiece10", $obj->getChampsCritereEntPiece10());
    }

    /**
     * Test setChampsCritereEntPiece2()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece2(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece2("champsCritereEntPiece2");
        $this->assertEquals("champsCritereEntPiece2", $obj->getChampsCritereEntPiece2());
    }

    /**
     * Test setChampsCritereEntPiece3()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece3(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece3("champsCritereEntPiece3");
        $this->assertEquals("champsCritereEntPiece3", $obj->getChampsCritereEntPiece3());
    }

    /**
     * Test setChampsCritereEntPiece4()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece4(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece4("champsCritereEntPiece4");
        $this->assertEquals("champsCritereEntPiece4", $obj->getChampsCritereEntPiece4());
    }

    /**
     * Test setChampsCritereEntPiece5()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece5(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece5("champsCritereEntPiece5");
        $this->assertEquals("champsCritereEntPiece5", $obj->getChampsCritereEntPiece5());
    }

    /**
     * Test setChampsCritereEntPiece6()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece6(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece6("champsCritereEntPiece6");
        $this->assertEquals("champsCritereEntPiece6", $obj->getChampsCritereEntPiece6());
    }

    /**
     * Test setChampsCritereEntPiece7()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece7(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece7("champsCritereEntPiece7");
        $this->assertEquals("champsCritereEntPiece7", $obj->getChampsCritereEntPiece7());
    }

    /**
     * Test setChampsCritereEntPiece8()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece8(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece8("champsCritereEntPiece8");
        $this->assertEquals("champsCritereEntPiece8", $obj->getChampsCritereEntPiece8());
    }

    /**
     * Test setChampsCritereEntPiece9()
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece9(): void {

        $obj = new Constantes();

        $obj->setChampsCritereEntPiece9("champsCritereEntPiece9");
        $this->assertEquals("champsCritereEntPiece9", $obj->getChampsCritereEntPiece9());
    }

    /**
     * Test setChronoActivation()
     *
     * @return void
     */
    public function testSetChronoActivation(): void {

        $obj = new Constantes();

        $obj->setChronoActivation(true);
        $this->assertTrue($obj->getChronoActivation());
    }

    /**
     * Test setChronoPrefixe()
     *
     * @return void
     */
    public function testSetChronoPrefixe(): void {

        $obj = new Constantes();

        $obj->setChronoPrefixe("chronoPrefixe");
        $this->assertEquals("chronoPrefixe", $obj->getChronoPrefixe());
    }

    /**
     * Test setChronoProchainNum()
     *
     * @return void
     */
    public function testSetChronoProchainNum(): void {

        $obj = new Constantes();

        $obj->setChronoProchainNum(10);
        $this->assertEquals(10, $obj->getChronoProchainNum());
    }

    /**
     * Test setCleAccesCnPaie()
     *
     * @return void
     */
    public function testSetCleAccesCnPaie(): void {

        $obj = new Constantes();

        $obj->setCleAccesCnPaie("cleAccesCnPaie");
        $this->assertEquals("cleAccesCnPaie", $obj->getCleAccesCnPaie());
    }

    /**
     * Test setCleAccesFicheClient()
     *
     * @return void
     */
    public function testSetCleAccesFicheClient(): void {

        $obj = new Constantes();

        $obj->setCleAccesFicheClient("cleAccesFicheClient");
        $this->assertEquals("cleAccesFicheClient", $obj->getCleAccesFicheClient());
    }

    /**
     * Test setCleAccesMenus()
     *
     * @return void
     */
    public function testSetCleAccesMenus(): void {

        $obj = new Constantes();

        $obj->setCleAccesMenus("cleAccesMenus");
        $this->assertEquals("cleAccesMenus", $obj->getCleAccesMenus());
    }

    /**
     * Test setCleAccesParam()
     *
     * @return void
     */
    public function testSetCleAccesParam(): void {

        $obj = new Constantes();

        $obj->setCleAccesParam("cleAccesParam");
        $this->assertEquals("cleAccesParam", $obj->getCleAccesParam());
    }

    /**
     * Test setCleDesEtrCommuns()
     *
     * @return void
     */
    public function testSetCleDesEtrCommuns(): void {

        $obj = new Constantes();

        $obj->setCleDesEtrCommuns("cleDesEtrCommuns");
        $this->assertEquals("cleDesEtrCommuns", $obj->getCleDesEtrCommuns());
    }

    /**
     * Test setCleJrnLibCommuns()
     *
     * @return void
     */
    public function testSetCleJrnLibCommuns(): void {

        $obj = new Constantes();

        $obj->setCleJrnLibCommuns("cleJrnLibCommuns");
        $this->assertEquals("cleJrnLibCommuns", $obj->getCleJrnLibCommuns());
    }

    /**
     * Test setCodeEmetteur()
     *
     * @return void
     */
    public function testSetCodeEmetteur(): void {

        $obj = new Constantes();

        $obj->setCodeEmetteur("codeEmetteur");
        $this->assertEquals("codeEmetteur", $obj->getCodeEmetteur());
    }

    /**
     * Test setCodeExpertDefaut()
     *
     * @return void
     */
    public function testSetCodeExpertDefaut(): void {

        $obj = new Constantes();

        $obj->setCodeExpertDefaut("codeExpertDefaut");
        $this->assertEquals("codeExpertDefaut", $obj->getCodeExpertDefaut());
    }

    /**
     * Test setCodeRegroupementPreFact()
     *
     * @return void
     */
    public function testSetCodeRegroupementPreFact(): void {

        $obj = new Constantes();

        $obj->setCodeRegroupementPreFact("codeRegroupementPreFact");
        $this->assertEquals("codeRegroupementPreFact", $obj->getCodeRegroupementPreFact());
    }

    /**
     * Test setConversionPwd()
     *
     * @return void
     */
    public function testSetConversionPwd(): void {

        $obj = new Constantes();

        $obj->setConversionPwd(true);
        $this->assertTrue($obj->getConversionPwd());
    }

    /**
     * Test setCpteCollectifCli()
     *
     * @return void
     */
    public function testSetCpteCollectifCli(): void {

        $obj = new Constantes();

        $obj->setCpteCollectifCli("cpteCollectifCli");
        $this->assertEquals("cpteCollectifCli", $obj->getCpteCollectifCli());
    }

    /**
     * Test setCpteCollectifFrn()
     *
     * @return void
     */
    public function testSetCpteCollectifFrn(): void {

        $obj = new Constantes();

        $obj->setCpteCollectifFrn("cpteCollectifFrn");
        $this->assertEquals("cpteCollectifFrn", $obj->getCpteCollectifFrn());
    }

    /**
     * Test setCreationAffaire()
     *
     * @return void
     */
    public function testSetCreationAffaire(): void {

        $obj = new Constantes();

        $obj->setCreationAffaire(true);
        $this->assertTrue($obj->getCreationAffaire());
    }

    /**
     * Test setCreationArticle()
     *
     * @return void
     */
    public function testSetCreationArticle(): void {

        $obj = new Constantes();

        $obj->setCreationArticle(true);
        $this->assertTrue($obj->getCreationArticle());
    }

    /**
     * Test setCreationBonsTravaux()
     *
     * @return void
     */
    public function testSetCreationBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setCreationBonsTravaux(true);
        $this->assertTrue($obj->getCreationBonsTravaux());
    }

    /**
     * Test setCreationChantier()
     *
     * @return void
     */
    public function testSetCreationChantier(): void {

        $obj = new Constantes();

        $obj->setCreationChantier(true);
        $this->assertTrue($obj->getCreationChantier());
    }

    /**
     * Test setCreationClient()
     *
     * @return void
     */
    public function testSetCreationClient(): void {

        $obj = new Constantes();

        $obj->setCreationClient(true);
        $this->assertTrue($obj->getCreationClient());
    }

    /**
     * Test setCreationCommission()
     *
     * @return void
     */
    public function testSetCreationCommission(): void {

        $obj = new Constantes();

        $obj->setCreationCommission(true);
        $this->assertTrue($obj->getCreationCommission());
    }

    /**
     * Test setCreationDossierCpta()
     *
     * @return void
     */
    public function testSetCreationDossierCpta(): void {

        $obj = new Constantes();

        $obj->setCreationDossierCpta(true);
        $this->assertTrue($obj->getCreationDossierCpta());
    }

    /**
     * Test setCreationDossierFact()
     *
     * @return void
     */
    public function testSetCreationDossierFact(): void {

        $obj = new Constantes();

        $obj->setCreationDossierFact(true);
        $this->assertTrue($obj->getCreationDossierFact());
    }

    /**
     * Test setCreationDossierPaie()
     *
     * @return void
     */
    public function testSetCreationDossierPaie(): void {

        $obj = new Constantes();

        $obj->setCreationDossierPaie(true);
        $this->assertTrue($obj->getCreationDossierPaie());
    }

    /**
     * Test setCreationFournisseur()
     *
     * @return void
     */
    public function testSetCreationFournisseur(): void {

        $obj = new Constantes();

        $obj->setCreationFournisseur(true);
        $this->assertTrue($obj->getCreationFournisseur());
    }

    /**
     * Test setCreationPlanFacturation()
     *
     * @return void
     */
    public function testSetCreationPlanFacturation(): void {

        $obj = new Constantes();

        $obj->setCreationPlanFacturation(true);
        $this->assertTrue($obj->getCreationPlanFacturation());
    }

    /**
     * Test setCreationPlanTache()
     *
     * @return void
     */
    public function testSetCreationPlanTache(): void {

        $obj = new Constantes();

        $obj->setCreationPlanTache(true);
        $this->assertTrue($obj->getCreationPlanTache());
    }

    /**
     * Test setCreationProspect()
     *
     * @return void
     */
    public function testSetCreationProspect(): void {

        $obj = new Constantes();

        $obj->setCreationProspect(true);
        $this->assertTrue($obj->getCreationProspect());
    }

    /**
     * Test setCreationTache()
     *
     * @return void
     */
    public function testSetCreationTache(): void {

        $obj = new Constantes();

        $obj->setCreationTache(true);
        $this->assertTrue($obj->getCreationTache());
    }

    /**
     * Test setCreationTarif()
     *
     * @return void
     */
    public function testSetCreationTarif(): void {

        $obj = new Constantes();

        $obj->setCreationTarif(true);
        $this->assertTrue($obj->getCreationTarif());
    }

    /**
     * Test setDateCloture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCloture(): void {

        // Set a Date/time mock.
        $dateCloture = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDateCloture($dateCloture);
        $this->assertSame($dateCloture, $obj->getDateCloture());
    }

    /**
     * Test setDtDernModifConfZone()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDernModifConfZone(): void {

        // Set a Date/time mock.
        $dtDernModifConfZone = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setDtDernModifConfZone($dtDernModifConfZone);
        $this->assertSame($dtDernModifConfZone, $obj->getDtDernModifConfZone());
    }

    /**
     * Test setEchAffEnMt()
     *
     * @return void
     */
    public function testSetEchAffEnMt(): void {

        $obj = new Constantes();

        $obj->setEchAffEnMt(true);
        $this->assertTrue($obj->getEchAffEnMt());
    }

    /**
     * Test setFonctionnementCga()
     *
     * @return void
     */
    public function testSetFonctionnementCga(): void {

        $obj = new Constantes();

        $obj->setFonctionnementCga(true);
        $this->assertTrue($obj->getFonctionnementCga());
    }

    /**
     * Test setHeuresTrav1()
     *
     * @return void
     */
    public function testSetHeuresTrav1(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav1(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav1());
    }

    /**
     * Test setHeuresTrav2()
     *
     * @return void
     */
    public function testSetHeuresTrav2(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav2());
    }

    /**
     * Test setHeuresTrav3()
     *
     * @return void
     */
    public function testSetHeuresTrav3(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav3());
    }

    /**
     * Test setHeuresTrav4()
     *
     * @return void
     */
    public function testSetHeuresTrav4(): void {

        $obj = new Constantes();

        $obj->setHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getHeuresTrav4());
    }

    /**
     * Test setIncremAuto()
     *
     * @return void
     */
    public function testSetIncremAuto(): void {

        $obj = new Constantes();

        $obj->setIncremAuto(true);
        $this->assertTrue($obj->getIncremAuto());
    }

    /**
     * Test setIncremAutoAff()
     *
     * @return void
     */
    public function testSetIncremAutoAff(): void {

        $obj = new Constantes();

        $obj->setIncremAutoAff(true);
        $this->assertTrue($obj->getIncremAutoAff());
    }

    /**
     * Test setIncremAutoFrn()
     *
     * @return void
     */
    public function testSetIncremAutoFrn(): void {

        $obj = new Constantes();

        $obj->setIncremAutoFrn(true);
        $this->assertTrue($obj->getIncremAutoFrn());
    }

    /**
     * Test setIncremCpteCliAuto()
     *
     * @return void
     */
    public function testSetIncremCpteCliAuto(): void {

        $obj = new Constantes();

        $obj->setIncremCpteCliAuto(true);
        $this->assertTrue($obj->getIncremCpteCliAuto());
    }

    /**
     * Test setIncremCpteFrnAuto()
     *
     * @return void
     */
    public function testSetIncremCpteFrnAuto(): void {

        $obj = new Constantes();

        $obj->setIncremCpteFrnAuto(true);
        $this->assertTrue($obj->getIncremCpteFrnAuto());
    }

    /**
     * Test setIncrementCpteCli()
     *
     * @return void
     */
    public function testSetIncrementCpteCli(): void {

        $obj = new Constantes();

        $obj->setIncrementCpteCli(10);
        $this->assertEquals(10, $obj->getIncrementCpteCli());
    }

    /**
     * Test setIncrementCpteFrn()
     *
     * @return void
     */
    public function testSetIncrementCpteFrn(): void {

        $obj = new Constantes();

        $obj->setIncrementCpteFrn(10);
        $this->assertEquals(10, $obj->getIncrementCpteFrn());
    }

    /**
     * Test setLiaisonBuCpta()
     *
     * @return void
     */
    public function testSetLiaisonBuCpta(): void {

        $obj = new Constantes();

        $obj->setLiaisonBuCpta(true);
        $this->assertTrue($obj->getLiaisonBuCpta());
    }

    /**
     * Test setLibAffectation1()
     *
     * @return void
     */
    public function testSetLibAffectation1(): void {

        $obj = new Constantes();

        $obj->setLibAffectation1("libAffectation1");
        $this->assertEquals("libAffectation1", $obj->getLibAffectation1());
    }

    /**
     * Test setLibAffectation2()
     *
     * @return void
     */
    public function testSetLibAffectation2(): void {

        $obj = new Constantes();

        $obj->setLibAffectation2("libAffectation2");
        $this->assertEquals("libAffectation2", $obj->getLibAffectation2());
    }

    /**
     * Test setLibAffectation3()
     *
     * @return void
     */
    public function testSetLibAffectation3(): void {

        $obj = new Constantes();

        $obj->setLibAffectation3("libAffectation3");
        $this->assertEquals("libAffectation3", $obj->getLibAffectation3());
    }

    /**
     * Test setLibAffectation4()
     *
     * @return void
     */
    public function testSetLibAffectation4(): void {

        $obj = new Constantes();

        $obj->setLibAffectation4("libAffectation4");
        $this->assertEquals("libAffectation4", $obj->getLibAffectation4());
    }

    /**
     * Test setLibAffectation5()
     *
     * @return void
     */
    public function testSetLibAffectation5(): void {

        $obj = new Constantes();

        $obj->setLibAffectation5("libAffectation5");
        $this->assertEquals("libAffectation5", $obj->getLibAffectation5());
    }

    /**
     * Test setLibAffectation6()
     *
     * @return void
     */
    public function testSetLibAffectation6(): void {

        $obj = new Constantes();

        $obj->setLibAffectation6("libAffectation6");
        $this->assertEquals("libAffectation6", $obj->getLibAffectation6());
    }

    /**
     * Test setLibAffectation7()
     *
     * @return void
     */
    public function testSetLibAffectation7(): void {

        $obj = new Constantes();

        $obj->setLibAffectation7("libAffectation7");
        $this->assertEquals("libAffectation7", $obj->getLibAffectation7());
    }

    /**
     * Test setLibCritere1()
     *
     * @return void
     */
    public function testSetLibCritere1(): void {

        $obj = new Constantes();

        $obj->setLibCritere1("libCritere1");
        $this->assertEquals("libCritere1", $obj->getLibCritere1());
    }

    /**
     * Test setLibCritere10()
     *
     * @return void
     */
    public function testSetLibCritere10(): void {

        $obj = new Constantes();

        $obj->setLibCritere10("libCritere10");
        $this->assertEquals("libCritere10", $obj->getLibCritere10());
    }

    /**
     * Test setLibCritere2()
     *
     * @return void
     */
    public function testSetLibCritere2(): void {

        $obj = new Constantes();

        $obj->setLibCritere2("libCritere2");
        $this->assertEquals("libCritere2", $obj->getLibCritere2());
    }

    /**
     * Test setLibCritere3()
     *
     * @return void
     */
    public function testSetLibCritere3(): void {

        $obj = new Constantes();

        $obj->setLibCritere3("libCritere3");
        $this->assertEquals("libCritere3", $obj->getLibCritere3());
    }

    /**
     * Test setLibCritere4()
     *
     * @return void
     */
    public function testSetLibCritere4(): void {

        $obj = new Constantes();

        $obj->setLibCritere4("libCritere4");
        $this->assertEquals("libCritere4", $obj->getLibCritere4());
    }

    /**
     * Test setLibCritere5()
     *
     * @return void
     */
    public function testSetLibCritere5(): void {

        $obj = new Constantes();

        $obj->setLibCritere5("libCritere5");
        $this->assertEquals("libCritere5", $obj->getLibCritere5());
    }

    /**
     * Test setLibCritere6()
     *
     * @return void
     */
    public function testSetLibCritere6(): void {

        $obj = new Constantes();

        $obj->setLibCritere6("libCritere6");
        $this->assertEquals("libCritere6", $obj->getLibCritere6());
    }

    /**
     * Test setLibCritere7()
     *
     * @return void
     */
    public function testSetLibCritere7(): void {

        $obj = new Constantes();

        $obj->setLibCritere7("libCritere7");
        $this->assertEquals("libCritere7", $obj->getLibCritere7());
    }

    /**
     * Test setLibCritere8()
     *
     * @return void
     */
    public function testSetLibCritere8(): void {

        $obj = new Constantes();

        $obj->setLibCritere8("libCritere8");
        $this->assertEquals("libCritere8", $obj->getLibCritere8());
    }

    /**
     * Test setLibCritere9()
     *
     * @return void
     */
    public function testSetLibCritere9(): void {

        $obj = new Constantes();

        $obj->setLibCritere9("libCritere9");
        $this->assertEquals("libCritere9", $obj->getLibCritere9());
    }

    /**
     * Test setLibCritereAffaire1()
     *
     * @return void
     */
    public function testSetLibCritereAffaire1(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire1("libCritereAffaire1");
        $this->assertEquals("libCritereAffaire1", $obj->getLibCritereAffaire1());
    }

    /**
     * Test setLibCritereAffaire10()
     *
     * @return void
     */
    public function testSetLibCritereAffaire10(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire10("libCritereAffaire10");
        $this->assertEquals("libCritereAffaire10", $obj->getLibCritereAffaire10());
    }

    /**
     * Test setLibCritereAffaire2()
     *
     * @return void
     */
    public function testSetLibCritereAffaire2(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire2("libCritereAffaire2");
        $this->assertEquals("libCritereAffaire2", $obj->getLibCritereAffaire2());
    }

    /**
     * Test setLibCritereAffaire3()
     *
     * @return void
     */
    public function testSetLibCritereAffaire3(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire3("libCritereAffaire3");
        $this->assertEquals("libCritereAffaire3", $obj->getLibCritereAffaire3());
    }

    /**
     * Test setLibCritereAffaire4()
     *
     * @return void
     */
    public function testSetLibCritereAffaire4(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire4("libCritereAffaire4");
        $this->assertEquals("libCritereAffaire4", $obj->getLibCritereAffaire4());
    }

    /**
     * Test setLibCritereAffaire5()
     *
     * @return void
     */
    public function testSetLibCritereAffaire5(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire5("libCritereAffaire5");
        $this->assertEquals("libCritereAffaire5", $obj->getLibCritereAffaire5());
    }

    /**
     * Test setLibCritereAffaire6()
     *
     * @return void
     */
    public function testSetLibCritereAffaire6(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire6("libCritereAffaire6");
        $this->assertEquals("libCritereAffaire6", $obj->getLibCritereAffaire6());
    }

    /**
     * Test setLibCritereAffaire7()
     *
     * @return void
     */
    public function testSetLibCritereAffaire7(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire7("libCritereAffaire7");
        $this->assertEquals("libCritereAffaire7", $obj->getLibCritereAffaire7());
    }

    /**
     * Test setLibCritereAffaire8()
     *
     * @return void
     */
    public function testSetLibCritereAffaire8(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire8("libCritereAffaire8");
        $this->assertEquals("libCritereAffaire8", $obj->getLibCritereAffaire8());
    }

    /**
     * Test setLibCritereAffaire9()
     *
     * @return void
     */
    public function testSetLibCritereAffaire9(): void {

        $obj = new Constantes();

        $obj->setLibCritereAffaire9("libCritereAffaire9");
        $this->assertEquals("libCritereAffaire9", $obj->getLibCritereAffaire9());
    }

    /**
     * Test setLibCritereArticle1()
     *
     * @return void
     */
    public function testSetLibCritereArticle1(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle1("libCritereArticle1");
        $this->assertEquals("libCritereArticle1", $obj->getLibCritereArticle1());
    }

    /**
     * Test setLibCritereArticle10()
     *
     * @return void
     */
    public function testSetLibCritereArticle10(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle10("libCritereArticle10");
        $this->assertEquals("libCritereArticle10", $obj->getLibCritereArticle10());
    }

    /**
     * Test setLibCritereArticle2()
     *
     * @return void
     */
    public function testSetLibCritereArticle2(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle2("libCritereArticle2");
        $this->assertEquals("libCritereArticle2", $obj->getLibCritereArticle2());
    }

    /**
     * Test setLibCritereArticle3()
     *
     * @return void
     */
    public function testSetLibCritereArticle3(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle3("libCritereArticle3");
        $this->assertEquals("libCritereArticle3", $obj->getLibCritereArticle3());
    }

    /**
     * Test setLibCritereArticle4()
     *
     * @return void
     */
    public function testSetLibCritereArticle4(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle4("libCritereArticle4");
        $this->assertEquals("libCritereArticle4", $obj->getLibCritereArticle4());
    }

    /**
     * Test setLibCritereArticle5()
     *
     * @return void
     */
    public function testSetLibCritereArticle5(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle5("libCritereArticle5");
        $this->assertEquals("libCritereArticle5", $obj->getLibCritereArticle5());
    }

    /**
     * Test setLibCritereArticle6()
     *
     * @return void
     */
    public function testSetLibCritereArticle6(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle6("libCritereArticle6");
        $this->assertEquals("libCritereArticle6", $obj->getLibCritereArticle6());
    }

    /**
     * Test setLibCritereArticle7()
     *
     * @return void
     */
    public function testSetLibCritereArticle7(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle7("libCritereArticle7");
        $this->assertEquals("libCritereArticle7", $obj->getLibCritereArticle7());
    }

    /**
     * Test setLibCritereArticle8()
     *
     * @return void
     */
    public function testSetLibCritereArticle8(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle8("libCritereArticle8");
        $this->assertEquals("libCritereArticle8", $obj->getLibCritereArticle8());
    }

    /**
     * Test setLibCritereArticle9()
     *
     * @return void
     */
    public function testSetLibCritereArticle9(): void {

        $obj = new Constantes();

        $obj->setLibCritereArticle9("libCritereArticle9");
        $this->assertEquals("libCritereArticle9", $obj->getLibCritereArticle9());
    }

    /**
     * Test setLibCritereEntPiece1()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece1(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece1("libCritereEntPiece1");
        $this->assertEquals("libCritereEntPiece1", $obj->getLibCritereEntPiece1());
    }

    /**
     * Test setLibCritereEntPiece10()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece10(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece10("libCritereEntPiece10");
        $this->assertEquals("libCritereEntPiece10", $obj->getLibCritereEntPiece10());
    }

    /**
     * Test setLibCritereEntPiece2()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece2(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece2("libCritereEntPiece2");
        $this->assertEquals("libCritereEntPiece2", $obj->getLibCritereEntPiece2());
    }

    /**
     * Test setLibCritereEntPiece3()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece3(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece3("libCritereEntPiece3");
        $this->assertEquals("libCritereEntPiece3", $obj->getLibCritereEntPiece3());
    }

    /**
     * Test setLibCritereEntPiece4()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece4(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece4("libCritereEntPiece4");
        $this->assertEquals("libCritereEntPiece4", $obj->getLibCritereEntPiece4());
    }

    /**
     * Test setLibCritereEntPiece5()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece5(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece5("libCritereEntPiece5");
        $this->assertEquals("libCritereEntPiece5", $obj->getLibCritereEntPiece5());
    }

    /**
     * Test setLibCritereEntPiece6()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece6(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece6("libCritereEntPiece6");
        $this->assertEquals("libCritereEntPiece6", $obj->getLibCritereEntPiece6());
    }

    /**
     * Test setLibCritereEntPiece7()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece7(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece7("libCritereEntPiece7");
        $this->assertEquals("libCritereEntPiece7", $obj->getLibCritereEntPiece7());
    }

    /**
     * Test setLibCritereEntPiece8()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece8(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece8("libCritereEntPiece8");
        $this->assertEquals("libCritereEntPiece8", $obj->getLibCritereEntPiece8());
    }

    /**
     * Test setLibCritereEntPiece9()
     *
     * @return void
     */
    public function testSetLibCritereEntPiece9(): void {

        $obj = new Constantes();

        $obj->setLibCritereEntPiece9("libCritereEntPiece9");
        $this->assertEquals("libCritereEntPiece9", $obj->getLibCritereEntPiece9());
    }

    /**
     * Test setLibCritereInterloc()
     *
     * @return void
     */
    public function testSetLibCritereInterloc(): void {

        $obj = new Constantes();

        $obj->setLibCritereInterloc("libCritereInterloc");
        $this->assertEquals("libCritereInterloc", $obj->getLibCritereInterloc());
    }

    /**
     * Test setLibCritereInterloc2()
     *
     * @return void
     */
    public function testSetLibCritereInterloc2(): void {

        $obj = new Constantes();

        $obj->setLibCritereInterloc2("libCritereInterloc2");
        $this->assertEquals("libCritereInterloc2", $obj->getLibCritereInterloc2());
    }

    /**
     * Test setMajorHeuresTrav1()
     *
     * @return void
     */
    public function testSetMajorHeuresTrav1(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav1(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav1());
    }

    /**
     * Test setMajorHeuresTrav2()
     *
     * @return void
     */
    public function testSetMajorHeuresTrav2(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav2());
    }

    /**
     * Test setMajorHeuresTrav3()
     *
     * @return void
     */
    public function testSetMajorHeuresTrav3(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav3(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav3());
    }

    /**
     * Test setMajorHeuresTrav4()
     *
     * @return void
     */
    public function testSetMajorHeuresTrav4(): void {

        $obj = new Constantes();

        $obj->setMajorHeuresTrav4(10.092018);
        $this->assertEquals(10.092018, $obj->getMajorHeuresTrav4());
    }

    /**
     * Test setMntTicketRestoA()
     *
     * @return void
     */
    public function testSetMntTicketRestoA(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoA(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoA());
    }

    /**
     * Test setMntTicketRestoB()
     *
     * @return void
     */
    public function testSetMntTicketRestoB(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoB(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoB());
    }

    /**
     * Test setMntTicketRestoC()
     *
     * @return void
     */
    public function testSetMntTicketRestoC(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoC(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoC());
    }

    /**
     * Test setMntTicketRestoD()
     *
     * @return void
     */
    public function testSetMntTicketRestoD(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoD(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoD());
    }

    /**
     * Test setMntTicketRestoE()
     *
     * @return void
     */
    public function testSetMntTicketRestoE(): void {

        $obj = new Constantes();

        $obj->setMntTicketRestoE(10.092018);
        $this->assertEquals(10.092018, $obj->getMntTicketRestoE());
    }

    /**
     * Test setModifAffaire()
     *
     * @return void
     */
    public function testSetModifAffaire(): void {

        $obj = new Constantes();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Test setModifArticle()
     *
     * @return void
     */
    public function testSetModifArticle(): void {

        $obj = new Constantes();

        $obj->setModifArticle("modifArticle");
        $this->assertEquals("modifArticle", $obj->getModifArticle());
    }

    /**
     * Test setModifBonsTravaux()
     *
     * @return void
     */
    public function testSetModifBonsTravaux(): void {

        $obj = new Constantes();

        $obj->setModifBonsTravaux("modifBonsTravaux");
        $this->assertEquals("modifBonsTravaux", $obj->getModifBonsTravaux());
    }

    /**
     * Test setModifChantier()
     *
     * @return void
     */
    public function testSetModifChantier(): void {

        $obj = new Constantes();

        $obj->setModifChantier("modifChantier");
        $this->assertEquals("modifChantier", $obj->getModifChantier());
    }

    /**
     * Test setModifClient()
     *
     * @return void
     */
    public function testSetModifClient(): void {

        $obj = new Constantes();

        $obj->setModifClient("modifClient");
        $this->assertEquals("modifClient", $obj->getModifClient());
    }

    /**
     * Test setModifCommission()
     *
     * @return void
     */
    public function testSetModifCommission(): void {

        $obj = new Constantes();

        $obj->setModifCommission("modifCommission");
        $this->assertEquals("modifCommission", $obj->getModifCommission());
    }

    /**
     * Test setModifDossierFact()
     *
     * @return void
     */
    public function testSetModifDossierFact(): void {

        $obj = new Constantes();

        $obj->setModifDossierFact("modifDossierFact");
        $this->assertEquals("modifDossierFact", $obj->getModifDossierFact());
    }

    /**
     * Test setModifFournisseur()
     *
     * @return void
     */
    public function testSetModifFournisseur(): void {

        $obj = new Constantes();

        $obj->setModifFournisseur("modifFournisseur");
        $this->assertEquals("modifFournisseur", $obj->getModifFournisseur());
    }

    /**
     * Test setModifPlanFacturation()
     *
     * @return void
     */
    public function testSetModifPlanFacturation(): void {

        $obj = new Constantes();

        $obj->setModifPlanFacturation("modifPlanFacturation");
        $this->assertEquals("modifPlanFacturation", $obj->getModifPlanFacturation());
    }

    /**
     * Test setModifPlanTache()
     *
     * @return void
     */
    public function testSetModifPlanTache(): void {

        $obj = new Constantes();

        $obj->setModifPlanTache("modifPlanTache");
        $this->assertEquals("modifPlanTache", $obj->getModifPlanTache());
    }

    /**
     * Test setModifTache()
     *
     * @return void
     */
    public function testSetModifTache(): void {

        $obj = new Constantes();

        $obj->setModifTache("modifTache");
        $this->assertEquals("modifTache", $obj->getModifTache());
    }

    /**
     * Test setModifTarif()
     *
     * @return void
     */
    public function testSetModifTarif(): void {

        $obj = new Constantes();

        $obj->setModifTarif("modifTarif");
        $this->assertEquals("modifTarif", $obj->getModifTarif());
    }

    /**
     * Test setMonnaie()
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new Constantes();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Test setNbDecMonnaie()
     *
     * @return void
     */
    public function testSetNbDecMonnaie(): void {

        $obj = new Constantes();

        $obj->setNbDecMonnaie(10);
        $this->assertEquals(10, $obj->getNbDecMonnaie());
    }

    /**
     * Test setNoDossCpta()
     *
     * @return void
     */
    public function testSetNoDossCpta(): void {

        $obj = new Constantes();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Test setNoDossPaie()
     *
     * @return void
     */
    public function testSetNoDossPaie(): void {

        $obj = new Constantes();

        $obj->setNoDossPaie("noDossPaie");
        $this->assertEquals("noDossPaie", $obj->getNoDossPaie());
    }

    /**
     * Test setPrefixeAff()
     *
     * @return void
     */
    public function testSetPrefixeAff(): void {

        $obj = new Constantes();

        $obj->setPrefixeAff("prefixeAff");
        $this->assertEquals("prefixeAff", $obj->getPrefixeAff());
    }

    /**
     * Test setPrioriteSaisieAff()
     *
     * @return void
     */
    public function testSetPrioriteSaisieAff(): void {

        $obj = new Constantes();

        $obj->setPrioriteSaisieAff(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieAff());
    }

    /**
     * Test setPrioriteSaisieClient()
     *
     * @return void
     */
    public function testSetPrioriteSaisieClient(): void {

        $obj = new Constantes();

        $obj->setPrioriteSaisieClient(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieClient());
    }

    /**
     * Test setPrioriteSaisieFrn()
     *
     * @return void
     */
    public function testSetPrioriteSaisieFrn(): void {

        $obj = new Constantes();

        $obj->setPrioriteSaisieFrn(10);
        $this->assertEquals(10, $obj->getPrioriteSaisieFrn());
    }

    /**
     * Test setProchainCpteCli()
     *
     * @return void
     */
    public function testSetProchainCpteCli(): void {

        $obj = new Constantes();

        $obj->setProchainCpteCli("prochainCpteCli");
        $this->assertEquals("prochainCpteCli", $obj->getProchainCpteCli());
    }

    /**
     * Test setProchainCpteFrn()
     *
     * @return void
     */
    public function testSetProchainCpteFrn(): void {

        $obj = new Constantes();

        $obj->setProchainCpteFrn("prochainCpteFrn");
        $this->assertEquals("prochainCpteFrn", $obj->getProchainCpteFrn());
    }

    /**
     * Test setProchainMoisOblig()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetProchainMoisOblig(): void {

        // Set a Date/time mock.
        $prochainMoisOblig = new DateTime("2018-09-10");

        $obj = new Constantes();

        $obj->setProchainMoisOblig($prochainMoisOblig);
        $this->assertSame($prochainMoisOblig, $obj->getProchainMoisOblig());
    }

    /**
     * Test setProchainNumAff()
     *
     * @return void
     */
    public function testSetProchainNumAff(): void {

        $obj = new Constantes();

        $obj->setProchainNumAff(10);
        $this->assertEquals(10, $obj->getProchainNumAff());
    }

    /**
     * Test setPxKmA()
     *
     * @return void
     */
    public function testSetPxKmA(): void {

        $obj = new Constantes();

        $obj->setPxKmA(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmA());
    }

    /**
     * Test setPxKmB()
     *
     * @return void
     */
    public function testSetPxKmB(): void {

        $obj = new Constantes();

        $obj->setPxKmB(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmB());
    }

    /**
     * Test setPxKmC()
     *
     * @return void
     */
    public function testSetPxKmC(): void {

        $obj = new Constantes();

        $obj->setPxKmC(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmC());
    }

    /**
     * Test setPxKmD()
     *
     * @return void
     */
    public function testSetPxKmD(): void {

        $obj = new Constantes();

        $obj->setPxKmD(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmD());
    }

    /**
     * Test setPxKmE()
     *
     * @return void
     */
    public function testSetPxKmE(): void {

        $obj = new Constantes();

        $obj->setPxKmE(10.092018);
        $this->assertEquals(10.092018, $obj->getPxKmE());
    }

    /**
     * Test setQetCodeCollaborateurDest()
     *
     * @return void
     */
    public function testSetQetCodeCollaborateurDest(): void {

        $obj = new Constantes();

        $obj->setQetCodeCollaborateurDest("qetCodeCollaborateurDest");
        $this->assertEquals("qetCodeCollaborateurDest", $obj->getQetCodeCollaborateurDest());
    }

    /**
     * Test setQtelCodeMission()
     *
     * @return void
     */
    public function testSetQtelCodeMission(): void {

        $obj = new Constantes();

        $obj->setQtelCodeMission("qtelCodeMission");
        $this->assertEquals("qtelCodeMission", $obj->getQtelCodeMission());
    }

    /**
     * Test setQtelCodeTache()
     *
     * @return void
     */
    public function testSetQtelCodeTache(): void {

        $obj = new Constantes();

        $obj->setQtelCodeTache("qtelCodeTache");
        $this->assertEquals("qtelCodeTache", $obj->getQtelCodeTache());
    }

    /**
     * Test setQtelSpecial()
     *
     * @return void
     */
    public function testSetQtelSpecial(): void {

        $obj = new Constantes();

        $obj->setQtelSpecial(10);
        $this->assertEquals(10, $obj->getQtelSpecial());
    }

    /**
     * Test setRacDataCpta()
     *
     * @return void
     */
    public function testSetRacDataCpta(): void {

        $obj = new Constantes();

        $obj->setRacDataCpta("racDataCpta");
        $this->assertEquals("racDataCpta", $obj->getRacDataCpta());
    }

    /**
     * Test setRacDataPaie()
     *
     * @return void
     */
    public function testSetRacDataPaie(): void {

        $obj = new Constantes();

        $obj->setRacDataPaie("racDataPaie");
        $this->assertEquals("racDataPaie", $obj->getRacDataPaie());
    }

    /**
     * Test setRadicalCompteCli()
     *
     * @return void
     */
    public function testSetRadicalCompteCli(): void {

        $obj = new Constantes();

        $obj->setRadicalCompteCli("radicalCompteCli");
        $this->assertEquals("radicalCompteCli", $obj->getRadicalCompteCli());
    }

    /**
     * Test setRadicalCompteFrn()
     *
     * @return void
     */
    public function testSetRadicalCompteFrn(): void {

        $obj = new Constantes();

        $obj->setRadicalCompteFrn("radicalCompteFrn");
        $this->assertEquals("radicalCompteFrn", $obj->getRadicalCompteFrn());
    }

    /**
     * Test setSaisDateFin()
     *
     * @return void
     */
    public function testSetSaisDateFin(): void {

        $obj = new Constantes();

        $obj->setSaisDateFin(true);
        $this->assertTrue($obj->getSaisDateFin());
    }

    /**
     * Test setTdfcAdhesionTotale()
     *
     * @return void
     */
    public function testSetTdfcAdhesionTotale(): void {

        $obj = new Constantes();

        $obj->setTdfcAdhesionTotale(true);
        $this->assertTrue($obj->getTdfcAdhesionTotale());
    }

    /**
     * Test setTdfcEmetteur()
     *
     * @return void
     */
    public function testSetTdfcEmetteur(): void {

        $obj = new Constantes();

        $obj->setTdfcEmetteur("tdfcEmetteur");
        $this->assertEquals("tdfcEmetteur", $obj->getTdfcEmetteur());
    }

    /**
     * Test setTdfcFacturant()
     *
     * @return void
     */
    public function testSetTdfcFacturant(): void {

        $obj = new Constantes();

        $obj->setTdfcFacturant("tdfcFacturant");
        $this->assertEquals("tdfcFacturant", $obj->getTdfcFacturant());
    }

    /**
     * Test setTdfcInfoTrans()
     *
     * @return void
     */
    public function testSetTdfcInfoTrans(): void {

        $obj = new Constantes();

        $obj->setTdfcInfoTrans("tdfcInfoTrans");
        $this->assertEquals("tdfcInfoTrans", $obj->getTdfcInfoTrans());
    }

    /**
     * Test setTpInterditCreatMillesime()
     *
     * @return void
     */
    public function testSetTpInterditCreatMillesime(): void {

        $obj = new Constantes();

        $obj->setTpInterditCreatMillesime(true);
        $this->assertTrue($obj->getTpInterditCreatMillesime());
    }

    /**
     * Test setTpInterditCreatMission()
     *
     * @return void
     */
    public function testSetTpInterditCreatMission(): void {

        $obj = new Constantes();

        $obj->setTpInterditCreatMission(true);
        $this->assertTrue($obj->getTpInterditCreatMission());
    }

    /**
     * Test setTpPasClientsSortis()
     *
     * @return void
     */
    public function testSetTpPasClientsSortis(): void {

        $obj = new Constantes();

        $obj->setTpPasClientsSortis(true);
        $this->assertTrue($obj->getTpPasClientsSortis());
    }

    /**
     * Test setTpPasIntervenants()
     *
     * @return void
     */
    public function testSetTpPasIntervenants(): void {

        $obj = new Constantes();

        $obj->setTpPasIntervenants(true);
        $this->assertTrue($obj->getTpPasIntervenants());
    }

    /**
     * Test setTpPrixInvisible()
     *
     * @return void
     */
    public function testSetTpPrixInvisible(): void {

        $obj = new Constantes();

        $obj->setTpPrixInvisible(true);
        $this->assertTrue($obj->getTpPrixInvisible());
    }

    /**
     * Test setTpRempliPrefAuto()
     *
     * @return void
     */
    public function testSetTpRempliPrefAuto(): void {

        $obj = new Constantes();

        $obj->setTpRempliPrefAuto(true);
        $this->assertTrue($obj->getTpRempliPrefAuto());
    }

    /**
     * Test setTpSaisieDos()
     *
     * @return void
     */
    public function testSetTpSaisieDos(): void {

        $obj = new Constantes();

        $obj->setTpSaisieDos(true);
        $this->assertTrue($obj->getTpSaisieDos());
    }

    /**
     * Test setTpsPassesInterditPrix()
     *
     * @return void
     */
    public function testSetTpsPassesInterditPrix(): void {

        $obj = new Constantes();

        $obj->setTpsPassesInterditPrix(true);
        $this->assertTrue($obj->getTpsPassesInterditPrix());
    }

    /**
     * Test __construct()
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
