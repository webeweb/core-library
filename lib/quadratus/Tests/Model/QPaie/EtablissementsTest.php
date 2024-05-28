<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\Etablissements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Etablissements test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EtablissementsTest extends AbstractTestCase {

    /**
     * Test setAbattementMax()
     *
     * @return void
     */
    public function testSetAbattementMax(): void {

        $obj = new Etablissements();

        $obj->setAbattementMax(10.092018);
        $this->assertEquals(10.092018, $obj->getAbattementMax());
    }

    /**
     * Test setAllegParticulier()
     *
     * @return void
     */
    public function testSetAllegParticulier(): void {

        $obj = new Etablissements();

        $obj->setAllegParticulier("allegParticulier");
        $this->assertEquals("allegParticulier", $obj->getAllegParticulier());
    }

    /**
     * Test setAtBureau1()
     *
     * @return void
     */
    public function testSetAtBureau1(): void {

        $obj = new Etablissements();

        $obj->setAtBureau1("atBureau1");
        $this->assertEquals("atBureau1", $obj->getAtBureau1());
    }

    /**
     * Test setAtBureau2()
     *
     * @return void
     */
    public function testSetAtBureau2(): void {

        $obj = new Etablissements();

        $obj->setAtBureau2("atBureau2");
        $this->assertEquals("atBureau2", $obj->getAtBureau2());
    }

    /**
     * Test setAtBureau3()
     *
     * @return void
     */
    public function testSetAtBureau3(): void {

        $obj = new Etablissements();

        $obj->setAtBureau3("atBureau3");
        $this->assertEquals("atBureau3", $obj->getAtBureau3());
    }

    /**
     * Test setAtBureau4()
     *
     * @return void
     */
    public function testSetAtBureau4(): void {

        $obj = new Etablissements();

        $obj->setAtBureau4("atBureau4");
        $this->assertEquals("atBureau4", $obj->getAtBureau4());
    }

    /**
     * Test setAtBureau5()
     *
     * @return void
     */
    public function testSetAtBureau5(): void {

        $obj = new Etablissements();

        $obj->setAtBureau5("atBureau5");
        $this->assertEquals("atBureau5", $obj->getAtBureau5());
    }

    /**
     * Test setAtEtab1()
     *
     * @return void
     */
    public function testSetAtEtab1(): void {

        $obj = new Etablissements();

        $obj->setAtEtab1("atEtab1");
        $this->assertEquals("atEtab1", $obj->getAtEtab1());
    }

    /**
     * Test setAtEtab2()
     *
     * @return void
     */
    public function testSetAtEtab2(): void {

        $obj = new Etablissements();

        $obj->setAtEtab2("atEtab2");
        $this->assertEquals("atEtab2", $obj->getAtEtab2());
    }

    /**
     * Test setAtEtab3()
     *
     * @return void
     */
    public function testSetAtEtab3(): void {

        $obj = new Etablissements();

        $obj->setAtEtab3("atEtab3");
        $this->assertEquals("atEtab3", $obj->getAtEtab3());
    }

    /**
     * Test setAtEtab4()
     *
     * @return void
     */
    public function testSetAtEtab4(): void {

        $obj = new Etablissements();

        $obj->setAtEtab4("atEtab4");
        $this->assertEquals("atEtab4", $obj->getAtEtab4());
    }

    /**
     * Test setAtEtab5()
     *
     * @return void
     */
    public function testSetAtEtab5(): void {

        $obj = new Etablissements();

        $obj->setAtEtab5("atEtab5");
        $this->assertEquals("atEtab5", $obj->getAtEtab5());
    }

    /**
     * Test setAtRisque1()
     *
     * @return void
     */
    public function testSetAtRisque1(): void {

        $obj = new Etablissements();

        $obj->setAtRisque1("atRisque1");
        $this->assertEquals("atRisque1", $obj->getAtRisque1());
    }

    /**
     * Test setAtRisque2()
     *
     * @return void
     */
    public function testSetAtRisque2(): void {

        $obj = new Etablissements();

        $obj->setAtRisque2("atRisque2");
        $this->assertEquals("atRisque2", $obj->getAtRisque2());
    }

    /**
     * Test setAtRisque3()
     *
     * @return void
     */
    public function testSetAtRisque3(): void {

        $obj = new Etablissements();

        $obj->setAtRisque3("atRisque3");
        $this->assertEquals("atRisque3", $obj->getAtRisque3());
    }

    /**
     * Test setAtRisque4()
     *
     * @return void
     */
    public function testSetAtRisque4(): void {

        $obj = new Etablissements();

        $obj->setAtRisque4("atRisque4");
        $this->assertEquals("atRisque4", $obj->getAtRisque4());
    }

    /**
     * Test setAtRisque5()
     *
     * @return void
     */
    public function testSetAtRisque5(): void {

        $obj = new Etablissements();

        $obj->setAtRisque5("atRisque5");
        $this->assertEquals("atRisque5", $obj->getAtRisque5());
    }

    /**
     * Test setAtTaux1()
     *
     * @return void
     */
    public function testSetAtTaux1(): void {

        $obj = new Etablissements();

        $obj->setAtTaux1(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux1());
    }

    /**
     * Test setAtTaux2()
     *
     * @return void
     */
    public function testSetAtTaux2(): void {

        $obj = new Etablissements();

        $obj->setAtTaux2(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux2());
    }

    /**
     * Test setAtTaux3()
     *
     * @return void
     */
    public function testSetAtTaux3(): void {

        $obj = new Etablissements();

        $obj->setAtTaux3(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux3());
    }

    /**
     * Test setAtTaux4()
     *
     * @return void
     */
    public function testSetAtTaux4(): void {

        $obj = new Etablissements();

        $obj->setAtTaux4(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux4());
    }

    /**
     * Test setAtTaux5()
     *
     * @return void
     */
    public function testSetAtTaux5(): void {

        $obj = new Etablissements();

        $obj->setAtTaux5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux5());
    }

    /**
     * Test setAtTauxBul1()
     *
     * @return void
     */
    public function testSetAtTauxBul1(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul1(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul1());
    }

    /**
     * Test setAtTauxBul2()
     *
     * @return void
     */
    public function testSetAtTauxBul2(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul2(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul2());
    }

    /**
     * Test setAtTauxBul3()
     *
     * @return void
     */
    public function testSetAtTauxBul3(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul3(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul3());
    }

    /**
     * Test setAtTauxBul4()
     *
     * @return void
     */
    public function testSetAtTauxBul4(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul4(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul4());
    }

    /**
     * Test setAtTauxBul5()
     *
     * @return void
     */
    public function testSetAtTauxBul5(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul5());
    }

    /**
     * Test setAubry1Modifie()
     *
     * @return void
     */
    public function testSetAubry1Modifie(): void {

        $obj = new Etablissements();

        $obj->setAubry1Modifie(true);
        $this->assertTrue($obj->getAubry1Modifie());
    }

    /**
     * Test setAutreAlleg()
     *
     * @return void
     */
    public function testSetAutreAlleg(): void {

        $obj = new Etablissements();

        $obj->setAutreAlleg("autreAlleg");
        $this->assertEquals("autreAlleg", $obj->getAutreAlleg());
    }

    /**
     * Test setBanque1()
     *
     * @return void
     */
    public function testSetBanque1(): void {

        $obj = new Etablissements();

        $obj->setBanque1("banque1");
        $this->assertEquals("banque1", $obj->getBanque1());
    }

    /**
     * Test setBanque2()
     *
     * @return void
     */
    public function testSetBanque2(): void {

        $obj = new Etablissements();

        $obj->setBanque2("banque2");
        $this->assertEquals("banque2", $obj->getBanque2());
    }

    /**
     * Test setBanque3()
     *
     * @return void
     */
    public function testSetBanque3(): void {

        $obj = new Etablissements();

        $obj->setBanque3("banque3");
        $this->assertEquals("banque3", $obj->getBanque3());
    }

    /**
     * Test setBic1()
     *
     * @return void
     */
    public function testSetBic1(): void {

        $obj = new Etablissements();

        $obj->setBic1("bic1");
        $this->assertEquals("bic1", $obj->getBic1());
    }

    /**
     * Test setBonusCospar()
     *
     * @return void
     */
    public function testSetBonusCospar(): void {

        $obj = new Etablissements();

        $obj->setBonusCospar(true);
        $this->assertTrue($obj->getBonusCospar());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Etablissements();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Etablissements();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setCColect11()
     *
     * @return void
     */
    public function testSetCColect11(): void {

        $obj = new Etablissements();

        $obj->setCColect11("cColect11");
        $this->assertEquals("cColect11", $obj->getCColect11());
    }

    /**
     * Test setCColect12()
     *
     * @return void
     */
    public function testSetCColect12(): void {

        $obj = new Etablissements();

        $obj->setCColect12("cColect12");
        $this->assertEquals("cColect12", $obj->getCColect12());
    }

    /**
     * Test setCColect21()
     *
     * @return void
     */
    public function testSetCColect21(): void {

        $obj = new Etablissements();

        $obj->setCColect21("cColect21");
        $this->assertEquals("cColect21", $obj->getCColect21());
    }

    /**
     * Test setCColect22()
     *
     * @return void
     */
    public function testSetCColect22(): void {

        $obj = new Etablissements();

        $obj->setCColect22("cColect22");
        $this->assertEquals("cColect22", $obj->getCColect22());
    }

    /**
     * Test setCColect31()
     *
     * @return void
     */
    public function testSetCColect31(): void {

        $obj = new Etablissements();

        $obj->setCColect31("cColect31");
        $this->assertEquals("cColect31", $obj->getCColect31());
    }

    /**
     * Test setCColect32()
     *
     * @return void
     */
    public function testSetCColect32(): void {

        $obj = new Etablissements();

        $obj->setCColect32("cColect32");
        $this->assertEquals("cColect32", $obj->getCColect32());
    }

    /**
     * Test setCColect41()
     *
     * @return void
     */
    public function testSetCColect41(): void {

        $obj = new Etablissements();

        $obj->setCColect41("cColect41");
        $this->assertEquals("cColect41", $obj->getCColect41());
    }

    /**
     * Test setCColect42()
     *
     * @return void
     */
    public function testSetCColect42(): void {

        $obj = new Etablissements();

        $obj->setCColect42("cColect42");
        $this->assertEquals("cColect42", $obj->getCColect42());
    }

    /**
     * Test setCColect51()
     *
     * @return void
     */
    public function testSetCColect51(): void {

        $obj = new Etablissements();

        $obj->setCColect51("cColect51");
        $this->assertEquals("cColect51", $obj->getCColect51());
    }

    /**
     * Test setCColect52()
     *
     * @return void
     */
    public function testSetCColect52(): void {

        $obj = new Etablissements();

        $obj->setCColect52("cColect52");
        $this->assertEquals("cColect52", $obj->getCColect52());
    }

    /**
     * Test setCColect61()
     *
     * @return void
     */
    public function testSetCColect61(): void {

        $obj = new Etablissements();

        $obj->setCColect61("cColect61");
        $this->assertEquals("cColect61", $obj->getCColect61());
    }

    /**
     * Test setCColect62()
     *
     * @return void
     */
    public function testSetCColect62(): void {

        $obj = new Etablissements();

        $obj->setCColect62("cColect62");
        $this->assertEquals("cColect62", $obj->getCColect62());
    }

    /**
     * Test setCaisseCp()
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new Etablissements();

        $obj->setCaisseCp(true);
        $this->assertTrue($obj->getCaisseCp());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Etablissements();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new Etablissements();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Test setCodeAdherent()
     *
     * @return void
     */
    public function testSetCodeAdherent(): void {

        $obj = new Etablissements();

        $obj->setCodeAdherent("codeAdherent");
        $this->assertEquals("codeAdherent", $obj->getCodeAdherent());
    }

    /**
     * Test setCodeCColect1()
     *
     * @return void
     */
    public function testSetCodeCColect1(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect1("codeCColect1");
        $this->assertEquals("codeCColect1", $obj->getCodeCColect1());
    }

    /**
     * Test setCodeCColect2()
     *
     * @return void
     */
    public function testSetCodeCColect2(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect2("codeCColect2");
        $this->assertEquals("codeCColect2", $obj->getCodeCColect2());
    }

    /**
     * Test setCodeCColect3()
     *
     * @return void
     */
    public function testSetCodeCColect3(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect3("codeCColect3");
        $this->assertEquals("codeCColect3", $obj->getCodeCColect3());
    }

    /**
     * Test setCodeCColect4()
     *
     * @return void
     */
    public function testSetCodeCColect4(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect4("codeCColect4");
        $this->assertEquals("codeCColect4", $obj->getCodeCColect4());
    }

    /**
     * Test setCodeCColect5()
     *
     * @return void
     */
    public function testSetCodeCColect5(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect5("codeCColect5");
        $this->assertEquals("codeCColect5", $obj->getCodeCColect5());
    }

    /**
     * Test setCodeCColect6()
     *
     * @return void
     */
    public function testSetCodeCColect6(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect6("codeCColect6");
        $this->assertEquals("codeCColect6", $obj->getCodeCColect6());
    }

    /**
     * Test setCodeCentreImpot()
     *
     * @return void
     */
    public function testSetCodeCentreImpot(): void {

        $obj = new Etablissements();

        $obj->setCodeCentreImpot("codeCentreImpot");
        $this->assertEquals("codeCentreImpot", $obj->getCodeCentreImpot());
    }

    /**
     * Test setCodeDucsSpecif()
     *
     * @return void
     */
    public function testSetCodeDucsSpecif(): void {

        $obj = new Etablissements();

        $obj->setCodeDucsSpecif("codeDucsSpecif");
        $this->assertEquals("codeDucsSpecif", $obj->getCodeDucsSpecif());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Etablissements();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new Etablissements();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Test setCodeJournalBanque()
     *
     * @return void
     */
    public function testSetCodeJournalBanque(): void {

        $obj = new Etablissements();

        $obj->setCodeJournalBanque("codeJournalBanque");
        $this->assertEquals("codeJournalBanque", $obj->getCodeJournalBanque());
    }

    /**
     * Test setCodeJournalPaie()
     *
     * @return void
     */
    public function testSetCodeJournalPaie(): void {

        $obj = new Etablissements();

        $obj->setCodeJournalPaie("codeJournalPaie");
        $this->assertEquals("codeJournalPaie", $obj->getCodeJournalPaie());
    }

    /**
     * Test setCodeMetierRetraite()
     *
     * @return void
     */
    public function testSetCodeMetierRetraite(): void {

        $obj = new Etablissements();

        $obj->setCodeMetierRetraite("codeMetierRetraite");
        $this->assertEquals("codeMetierRetraite", $obj->getCodeMetierRetraite());
    }

    /**
     * Test setCodeNaf()
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Test setCodeNaf2()
     *
     * @return void
     */
    public function testSetCodeNaf2(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf2("codeNaf2");
        $this->assertEquals("codeNaf2", $obj->getCodeNaf2());
    }

    /**
     * Test setCodeNaf2008()
     *
     * @return void
     */
    public function testSetCodeNaf2008(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Test setCodeNaf22008()
     *
     * @return void
     */
    public function testSetCodeNaf22008(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf22008("codeNaf22008");
        $this->assertEquals("codeNaf22008", $obj->getCodeNaf22008());
    }

    /**
     * Test setCodeNaf3()
     *
     * @return void
     */
    public function testSetCodeNaf3(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf3("codeNaf3");
        $this->assertEquals("codeNaf3", $obj->getCodeNaf3());
    }

    /**
     * Test setCodeNaf32008()
     *
     * @return void
     */
    public function testSetCodeNaf32008(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf32008("codeNaf32008");
        $this->assertEquals("codeNaf32008", $obj->getCodeNaf32008());
    }

    /**
     * Test setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Etablissements();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Test setCodePays()
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new Etablissements();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Test setCodePaysResidence()
     *
     * @return void
     */
    public function testSetCodePaysResidence(): void {

        $obj = new Etablissements();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Etablissements();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCoeffAubry2()
     *
     * @return void
     */
    public function testSetCoeffAubry2(): void {

        $obj = new Etablissements();

        $obj->setCoeffAubry2(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffAubry2());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Etablissements();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setCompteAcompteEmploye()
     *
     * @return void
     */
    public function testSetCompteAcompteEmploye(): void {

        $obj = new Etablissements();

        $obj->setCompteAcompteEmploye(true);
        $this->assertTrue($obj->getCompteAcompteEmploye());
    }

    /**
     * Test setCompteCharge1()
     *
     * @return void
     */
    public function testSetCompteCharge1(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge1("compteCharge1");
        $this->assertEquals("compteCharge1", $obj->getCompteCharge1());
    }

    /**
     * Test setCompteCharge10()
     *
     * @return void
     */
    public function testSetCompteCharge10(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge10("compteCharge10");
        $this->assertEquals("compteCharge10", $obj->getCompteCharge10());
    }

    /**
     * Test setCompteCharge11()
     *
     * @return void
     */
    public function testSetCompteCharge11(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge11("compteCharge11");
        $this->assertEquals("compteCharge11", $obj->getCompteCharge11());
    }

    /**
     * Test setCompteCharge2()
     *
     * @return void
     */
    public function testSetCompteCharge2(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge2("compteCharge2");
        $this->assertEquals("compteCharge2", $obj->getCompteCharge2());
    }

    /**
     * Test setCompteCharge3()
     *
     * @return void
     */
    public function testSetCompteCharge3(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge3("compteCharge3");
        $this->assertEquals("compteCharge3", $obj->getCompteCharge3());
    }

    /**
     * Test setCompteCharge4()
     *
     * @return void
     */
    public function testSetCompteCharge4(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge4("compteCharge4");
        $this->assertEquals("compteCharge4", $obj->getCompteCharge4());
    }

    /**
     * Test setCompteCharge5()
     *
     * @return void
     */
    public function testSetCompteCharge5(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge5("compteCharge5");
        $this->assertEquals("compteCharge5", $obj->getCompteCharge5());
    }

    /**
     * Test setCompteCharge6()
     *
     * @return void
     */
    public function testSetCompteCharge6(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge6("compteCharge6");
        $this->assertEquals("compteCharge6", $obj->getCompteCharge6());
    }

    /**
     * Test setCompteCharge7()
     *
     * @return void
     */
    public function testSetCompteCharge7(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge7("compteCharge7");
        $this->assertEquals("compteCharge7", $obj->getCompteCharge7());
    }

    /**
     * Test setCompteCharge8()
     *
     * @return void
     */
    public function testSetCompteCharge8(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge8("compteCharge8");
        $this->assertEquals("compteCharge8", $obj->getCompteCharge8());
    }

    /**
     * Test setCompteCharge9()
     *
     * @return void
     */
    public function testSetCompteCharge9(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge9("compteCharge9");
        $this->assertEquals("compteCharge9", $obj->getCompteCharge9());
    }

    /**
     * Test setCompteChargeAen()
     *
     * @return void
     */
    public function testSetCompteChargeAen(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeAen("compteChargeAen");
        $this->assertEquals("compteChargeAen", $obj->getCompteChargeAen());
    }

    /**
     * Test setCompteChargeFc()
     *
     * @return void
     */
    public function testSetCompteChargeFc(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeFc("compteChargeFc");
        $this->assertEquals("compteChargeFc", $obj->getCompteChargeFc());
    }

    /**
     * Test setCompteChargeIjss()
     *
     * @return void
     */
    public function testSetCompteChargeIjss(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeIjss("compteChargeIjss");
        $this->assertEquals("compteChargeIjss", $obj->getCompteChargeIjss());
    }

    /**
     * Test setCompteChargeIndemCp()
     *
     * @return void
     */
    public function testSetCompteChargeIndemCp(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeIndemCp("compteChargeIndemCp");
        $this->assertEquals("compteChargeIndemCp", $obj->getCompteChargeIndemCp());
    }

    /**
     * Test setCompteSaisieArret()
     *
     * @return void
     */
    public function testSetCompteSaisieArret(): void {

        $obj = new Etablissements();

        $obj->setCompteSaisieArret("compteSaisieArret");
        $this->assertEquals("compteSaisieArret", $obj->getCompteSaisieArret());
    }

    /**
     * Test setCompteTiers1()
     *
     * @return void
     */
    public function testSetCompteTiers1(): void {

        $obj = new Etablissements();

        $obj->setCompteTiers1("compteTiers1");
        $this->assertEquals("compteTiers1", $obj->getCompteTiers1());
    }

    /**
     * Test setCompteTiers2()
     *
     * @return void
     */
    public function testSetCompteTiers2(): void {

        $obj = new Etablissements();

        $obj->setCompteTiers2("compteTiers2");
        $this->assertEquals("compteTiers2", $obj->getCompteTiers2());
    }

    /**
     * Test setDadsuCodeCColect1()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect1(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect1("dadsuCodeCColect1");
        $this->assertEquals("dadsuCodeCColect1", $obj->getDadsuCodeCColect1());
    }

    /**
     * Test setDadsuCodeCColect2()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect2(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect2("dadsuCodeCColect2");
        $this->assertEquals("dadsuCodeCColect2", $obj->getDadsuCodeCColect2());
    }

    /**
     * Test setDadsuCodeCColect3()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect3(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect3("dadsuCodeCColect3");
        $this->assertEquals("dadsuCodeCColect3", $obj->getDadsuCodeCColect3());
    }

    /**
     * Test setDadsuCodeCColect4()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect4(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect4("dadsuCodeCColect4");
        $this->assertEquals("dadsuCodeCColect4", $obj->getDadsuCodeCColect4());
    }

    /**
     * Test setDadsuCodeCColect5()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect5(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect5("dadsuCodeCColect5");
        $this->assertEquals("dadsuCodeCColect5", $obj->getDadsuCodeCColect5());
    }

    /**
     * Test setDadsuCodeCColect6()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect6(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect6("dadsuCodeCColect6");
        $this->assertEquals("dadsuCodeCColect6", $obj->getDadsuCodeCColect6());
    }

    /**
     * Test setDateAllegement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAllegement(): void {

        // Set a Date/time mock.
        $dateAllegement = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateAllegement($dateAllegement);
        $this->assertSame($dateAllegement, $obj->getDateAllegement());
    }

    /**
     * Test setDateDucs()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDucs(): void {

        // Set a Date/time mock.
        $dateDucs = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateDucs($dateDucs);
        $this->assertSame($dateDucs, $obj->getDateDucs());
    }

    /**
     * Test setDateFinCospar()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinCospar(): void {

        // Set a Date/time mock.
        $dateFinCospar = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateFinCospar($dateFinCospar);
        $this->assertSame($dateFinCospar, $obj->getDateFinCospar());
    }

    /**
     * Test setDateFinCp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinCp(): void {

        // Set a Date/time mock.
        $dateFinCp = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateFinCp($dateFinCp);
        $this->assertSame($dateFinCp, $obj->getDateFinCp());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDatePublication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePublication(): void {

        // Set a Date/time mock.
        $datePublication = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDatePublication($datePublication);
        $this->assertSame($datePublication, $obj->getDatePublication());
    }

    /**
     * Test setDebutEnvoi()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutEnvoi(): void {

        // Set a Date/time mock.
        $debutEnvoi = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDebutEnvoi($debutEnvoi);
        $this->assertSame($debutEnvoi, $obj->getDebutEnvoi());
    }

    /**
     * Test setDetailSalarie()
     *
     * @return void
     */
    public function testSetDetailSalarie(): void {

        $obj = new Etablissements();

        $obj->setDetailSalarie(true);
        $this->assertTrue($obj->getDetailSalarie());
    }

    /**
     * Test setDomaineActivite()
     *
     * @return void
     */
    public function testSetDomaineActivite(): void {

        $obj = new Etablissements();

        $obj->setDomaineActivite("domaineActivite");
        $this->assertEquals("domaineActivite", $obj->getDomaineActivite());
    }

    /**
     * Test setDossierComptable()
     *
     * @return void
     */
    public function testSetDossierComptable(): void {

        $obj = new Etablissements();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Test setEditionDif()
     *
     * @return void
     */
    public function testSetEditionDif(): void {

        $obj = new Etablissements();

        $obj->setEditionDif(true);
        $this->assertTrue($obj->getEditionDif());
    }

    /**
     * Test setEditionDifBul()
     *
     * @return void
     */
    public function testSetEditionDifBul(): void {

        $obj = new Etablissements();

        $obj->setEditionDifBul("editionDifBul");
        $this->assertEquals("editionDifBul", $obj->getEditionDifBul());
    }

    /**
     * Test setEmetteur1()
     *
     * @return void
     */
    public function testSetEmetteur1(): void {

        $obj = new Etablissements();

        $obj->setEmetteur1(10);
        $this->assertEquals(10, $obj->getEmetteur1());
    }

    /**
     * Test setEmetteur2()
     *
     * @return void
     */
    public function testSetEmetteur2(): void {

        $obj = new Etablissements();

        $obj->setEmetteur2(10);
        $this->assertEquals(10, $obj->getEmetteur2());
    }

    /**
     * Test setEmetteur3()
     *
     * @return void
     */
    public function testSetEmetteur3(): void {

        $obj = new Etablissements();

        $obj->setEmetteur3(10);
        $this->assertEquals(10, $obj->getEmetteur3());
    }

    /**
     * Test setEnseigne()
     *
     * @return void
     */
    public function testSetEnseigne(): void {

        $obj = new Etablissements();

        $obj->setEnseigne("enseigne");
        $this->assertEquals("enseigne", $obj->getEnseigne());
    }

    /**
     * Test setEtabDeclDadsu()
     *
     * @return void
     */
    public function testSetEtabDeclDadsu(): void {

        $obj = new Etablissements();

        $obj->setEtabDeclDadsu(true);
        $this->assertTrue($obj->getEtabDeclDadsu());
    }

    /**
     * Test setExclureDadsu()
     *
     * @return void
     */
    public function testSetExclureDadsu(): void {

        $obj = new Etablissements();

        $obj->setExclureDadsu(true);
        $this->assertTrue($obj->getExclureDadsu());
    }

    /**
     * Test setExoLodeomRenforcee()
     *
     * @return void
     */
    public function testSetExoLodeomRenforcee(): void {

        $obj = new Etablissements();

        $obj->setExoLodeomRenforcee(true);
        $this->assertTrue($obj->getExoLodeomRenforcee());
    }

    /**
     * Test setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new Etablissements();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Test setFinEnvoi()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinEnvoi(): void {

        // Set a Date/time mock.
        $finEnvoi = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setFinEnvoi($finEnvoi);
        $this->assertSame($finEnvoi, $obj->getFinEnvoi());
    }

    /**
     * Test setGereFractionEtab()
     *
     * @return void
     */
    public function testSetGereFractionEtab(): void {

        $obj = new Etablissements();

        $obj->setGereFractionEtab(true);
        $this->assertTrue($obj->getGereFractionEtab());
    }

    /**
     * Test setGestionContingent()
     *
     * @return void
     */
    public function testSetGestionContingent(): void {

        $obj = new Etablissements();

        $obj->setGestionContingent(true);
        $this->assertTrue($obj->getGestionContingent());
    }

    /**
     * Test setGestionDucs1()
     *
     * @return void
     */
    public function testSetGestionDucs1(): void {

        $obj = new Etablissements();

        $obj->setGestionDucs1("gestionDucs1");
        $this->assertEquals("gestionDucs1", $obj->getGestionDucs1());
    }

    /**
     * Test setGestionDucs2()
     *
     * @return void
     */
    public function testSetGestionDucs2(): void {

        $obj = new Etablissements();

        $obj->setGestionDucs2("gestionDucs2");
        $this->assertEquals("gestionDucs2", $obj->getGestionDucs2());
    }

    /**
     * Test setGestionJourFerieEtab()
     *
     * @return void
     */
    public function testSetGestionJourFerieEtab(): void {

        $obj = new Etablissements();

        $obj->setGestionJourFerieEtab(true);
        $this->assertTrue($obj->getGestionJourFerieEtab());
    }

    /**
     * Test setGestionReposComp()
     *
     * @return void
     */
    public function testSetGestionReposComp(): void {

        $obj = new Etablissements();

        $obj->setGestionReposComp(true);
        $this->assertTrue($obj->getGestionReposComp());
    }

    /**
     * Test setGestionReposRecup()
     *
     * @return void
     */
    public function testSetGestionReposRecup(): void {

        $obj = new Etablissements();

        $obj->setGestionReposRecup(true);
        $this->assertTrue($obj->getGestionReposRecup());
    }

    /**
     * Test setGestionReposRemplace()
     *
     * @return void
     */
    public function testSetGestionReposRemplace(): void {

        $obj = new Etablissements();

        $obj->setGestionReposRemplace(true);
        $this->assertTrue($obj->getGestionReposRemplace());
    }

    /**
     * Test setGestionRtt()
     *
     * @return void
     */
    public function testSetGestionRtt(): void {

        $obj = new Etablissements();

        $obj->setGestionRtt(true);
        $this->assertTrue($obj->getGestionRtt());
    }

    /**
     * Test setGestionSemType()
     *
     * @return void
     */
    public function testSetGestionSemType(): void {

        $obj = new Etablissements();

        $obj->setGestionSemType(true);
        $this->assertTrue($obj->getGestionSemType());
    }

    /**
     * Test setIban1()
     *
     * @return void
     */
    public function testSetIban1(): void {

        $obj = new Etablissements();

        $obj->setIban1("iban1");
        $this->assertEquals("iban1", $obj->getIban1());
    }

    /**
     * Test setIbanIdClient1()
     *
     * @return void
     */
    public function testSetIbanIdClient1(): void {

        $obj = new Etablissements();

        $obj->setIbanIdClient1("ibanIdClient1");
        $this->assertEquals("ibanIdClient1", $obj->getIbanIdClient1());
    }

    /**
     * Test setInscritRepMetier()
     *
     * @return void
     */
    public function testSetInscritRepMetier(): void {

        $obj = new Etablissements();

        $obj->setInscritRepMetier(true);
        $this->assertTrue($obj->getInscritRepMetier());
    }

    /**
     * Test setJourVerseSalaire()
     *
     * @return void
     */
    public function testSetJourVerseSalaire(): void {

        $obj = new Etablissements();

        $obj->setJourVerseSalaire("jourVerseSalaire");
        $this->assertEquals("jourVerseSalaire", $obj->getJourVerseSalaire());
    }

    /**
     * Test setMaintienIntervientCp()
     *
     * @return void
     */
    public function testSetMaintienIntervientCp(): void {

        $obj = new Etablissements();

        $obj->setMaintienIntervientCp(true);
        $this->assertTrue($obj->getMaintienIntervientCp());
    }

    /**
     * Test setMaintienSalaire()
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new Etablissements();

        $obj->setMaintienSalaire(true);
        $this->assertTrue($obj->getMaintienSalaire());
    }

    /**
     * Test setMaintienSpecifique()
     *
     * @return void
     */
    public function testSetMaintienSpecifique(): void {

        $obj = new Etablissements();

        $obj->setMaintienSpecifique(true);
        $this->assertTrue($obj->getMaintienSpecifique());
    }

    /**
     * Test setMasqueServiceEmploye()
     *
     * @return void
     */
    public function testSetMasqueServiceEmploye(): void {

        $obj = new Etablissements();

        $obj->setMasqueServiceEmploye(true);
        $this->assertTrue($obj->getMasqueServiceEmploye());
    }

    /**
     * Test setMethodeCp()
     *
     * @return void
     */
    public function testSetMethodeCp(): void {

        $obj = new Etablissements();

        $obj->setMethodeCp("methodeCp");
        $this->assertEquals("methodeCp", $obj->getMethodeCp());
    }

    /**
     * Test setMoisClotureCp()
     *
     * @return void
     */
    public function testSetMoisClotureCp(): void {

        $obj = new Etablissements();

        $obj->setMoisClotureCp("moisClotureCp");
        $this->assertEquals("moisClotureCp", $obj->getMoisClotureCp());
    }

    /**
     * Test setMoisClotureDif()
     *
     * @return void
     */
    public function testSetMoisClotureDif(): void {

        $obj = new Etablissements();

        $obj->setMoisClotureDif("moisClotureDif");
        $this->assertEquals("moisClotureDif", $obj->getMoisClotureDif());
    }

    /**
     * Test setMoisClotureRtt()
     *
     * @return void
     */
    public function testSetMoisClotureRtt(): void {

        $obj = new Etablissements();

        $obj->setMoisClotureRtt("moisClotureRtt");
        $this->assertEquals("moisClotureRtt", $obj->getMoisClotureRtt());
    }

    /**
     * Test setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new Etablissements();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Test setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new Etablissements();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Test setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new Etablissements();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Test setMontant4()
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new Etablissements();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Test setMontant5()
     *
     * @return void
     */
    public function testSetMontant5(): void {

        $obj = new Etablissements();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Test setMontantAllegement()
     *
     * @return void
     */
    public function testSetMontantAllegement(): void {

        $obj = new Etablissements();

        $obj->setMontantAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAllegement());
    }

    /**
     * Test setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Etablissements();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Test setNbHJour1()
     *
     * @return void
     */
    public function testSetNbHJour1(): void {

        $obj = new Etablissements();

        $obj->setNbHJour1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour1());
    }

    /**
     * Test setNbHJour2()
     *
     * @return void
     */
    public function testSetNbHJour2(): void {

        $obj = new Etablissements();

        $obj->setNbHJour2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour2());
    }

    /**
     * Test setNbHJour3()
     *
     * @return void
     */
    public function testSetNbHJour3(): void {

        $obj = new Etablissements();

        $obj->setNbHJour3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour3());
    }

    /**
     * Test setNbHJour4()
     *
     * @return void
     */
    public function testSetNbHJour4(): void {

        $obj = new Etablissements();

        $obj->setNbHJour4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour4());
    }

    /**
     * Test setNbHJour5()
     *
     * @return void
     */
    public function testSetNbHJour5(): void {

        $obj = new Etablissements();

        $obj->setNbHJour5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour5());
    }

    /**
     * Test setNbHJour6()
     *
     * @return void
     */
    public function testSetNbHJour6(): void {

        $obj = new Etablissements();

        $obj->setNbHJour6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour6());
    }

    /**
     * Test setNbHJour7()
     *
     * @return void
     */
    public function testSetNbHJour7(): void {

        $obj = new Etablissements();

        $obj->setNbHJour7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour7());
    }

    /**
     * Test setNbHdifAn()
     *
     * @return void
     */
    public function testSetNbHdifAn(): void {

        $obj = new Etablissements();

        $obj->setNbHdifAn(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHdifAn());
    }

    /**
     * Test setNbHeureTravMois()
     *
     * @return void
     */
    public function testSetNbHeureTravMois(): void {

        $obj = new Etablissements();

        $obj->setNbHeureTravMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTravMois());
    }

    /**
     * Test setNbJourBase()
     *
     * @return void
     */
    public function testSetNbJourBase(): void {

        $obj = new Etablissements();

        $obj->setNbJourBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBase());
    }

    /**
     * Test setNbJourBaseCp()
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Etablissements();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Test setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Etablissements();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Test setNbMAjoutPer()
     *
     * @return void
     */
    public function testSetNbMAjoutPer(): void {

        $obj = new Etablissements();

        $obj->setNbMAjoutPer("nbMAjoutPer");
        $this->assertEquals("nbMAjoutPer", $obj->getNbMAjoutPer());
    }

    /**
     * Test setNbMoisAubry1()
     *
     * @return void
     */
    public function testSetNbMoisAubry1(): void {

        $obj = new Etablissements();

        $obj->setNbMoisAubry1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbMoisAubry1());
    }

    /**
     * Test setNbhJourRtt()
     *
     * @return void
     */
    public function testSetNbhJourRtt(): void {

        $obj = new Etablissements();

        $obj->setNbhJourRtt(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhJourRtt());
    }

    /**
     * Test setNePasActiverLoiFillon2003()
     *
     * @return void
     */
    public function testSetNePasActiverLoiFillon2003(): void {

        $obj = new Etablissements();

        $obj->setNePasActiverLoiFillon2003(true);
        $this->assertTrue($obj->getNePasActiverLoiFillon2003());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Etablissements();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNomVilleInsee()
     *
     * @return void
     */
    public function testSetNomVilleInsee(): void {

        $obj = new Etablissements();

        $obj->setNomVilleInsee("nomVilleInsee");
        $this->assertEquals("nomVilleInsee", $obj->getNomVilleInsee());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Etablissements();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Etablissements();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setOpcaDif()
     *
     * @return void
     */
    public function testSetOpcaDif(): void {

        $obj = new Etablissements();

        $obj->setOpcaDif("opcaDif");
        $this->assertEquals("opcaDif", $obj->getOpcaDif());
    }

    /**
     * Test setPLafondExo()
     *
     * @return void
     */
    public function testSetPLafondExo(): void {

        $obj = new Etablissements();

        $obj->setPLafondExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPLafondExo());
    }

    /**
     * Test setPaieDecalee()
     *
     * @return void
     */
    public function testSetPaieDecalee(): void {

        $obj = new Etablissements();

        $obj->setPaieDecalee(true);
        $this->assertTrue($obj->getPaieDecalee());
    }

    /**
     * Test setPlafond1Caisse1()
     *
     * @return void
     */
    public function testSetPlafond1Caisse1(): void {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse1());
    }

    /**
     * Test setPlafond1Caisse2()
     *
     * @return void
     */
    public function testSetPlafond1Caisse2(): void {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse2());
    }

    /**
     * Test setPlafond1Caisse3()
     *
     * @return void
     */
    public function testSetPlafond1Caisse3(): void {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse3());
    }

    /**
     * Test setPlafond2Caisse1()
     *
     * @return void
     */
    public function testSetPlafond2Caisse1(): void {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }

    /**
     * Test setPlafond2Caisse2()
     *
     * @return void
     */
    public function testSetPlafond2Caisse2(): void {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse2());
    }

    /**
     * Test setPlafond2Caisse3()
     *
     * @return void
     */
    public function testSetPlafond2Caisse3(): void {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse3());
    }

    /**
     * Test setPourcentBonif()
     *
     * @return void
     */
    public function testSetPourcentBonif(): void {

        $obj = new Etablissements();

        $obj->setPourcentBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentBonif());
    }

    /**
     * Test setPourcentExo()
     *
     * @return void
     */
    public function testSetPourcentExo(): void {

        $obj = new Etablissements();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Test setPourcentTransport()
     *
     * @return void
     */
    public function testSetPourcentTransport(): void {

        $obj = new Etablissements();

        $obj->setPourcentTransport(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentTransport());
    }

    /**
     * Test setPourcentageImp()
     *
     * @return void
     */
    public function testSetPourcentageImp(): void {

        $obj = new Etablissements();

        $obj->setPourcentageImp(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageImp());
    }

    /**
     * Test setProfSpectacle()
     *
     * @return void
     */
    public function testSetProfSpectacle(): void {

        $obj = new Etablissements();

        $obj->setProfSpectacle(true);
        $this->assertTrue($obj->getProfSpectacle());
    }

    /**
     * Test setProfession()
     *
     * @return void
     */
    public function testSetProfession(): void {

        $obj = new Etablissements();

        $obj->setProfession("profession");
        $this->assertEquals("profession", $obj->getProfession());
    }

    /**
     * Test setPrudType()
     *
     * @return void
     */
    public function testSetPrudType(): void {

        $obj = new Etablissements();

        $obj->setPrudType("prudType");
        $this->assertEquals("prudType", $obj->getPrudType());
    }

    /**
     * Test setPrudTypeDadsu()
     *
     * @return void
     */
    public function testSetPrudTypeDadsu(): void {

        $obj = new Etablissements();

        $obj->setPrudTypeDadsu("prudTypeDadsu");
        $this->assertEquals("prudTypeDadsu", $obj->getPrudTypeDadsu());
    }

    /**
     * Test setPublication()
     *
     * @return void
     */
    public function testSetPublication(): void {

        $obj = new Etablissements();

        $obj->setPublication(true);
        $this->assertTrue($obj->getPublication());
    }

    /**
     * Test setQualite()
     *
     * @return void
     */
    public function testSetQualite(): void {

        $obj = new Etablissements();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Test setRaisonSociale()
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new Etablissements();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Test setReductionFillon()
     *
     * @return void
     */
    public function testSetReductionFillon(): void {

        $obj = new Etablissements();

        $obj->setReductionFillon(true);
        $this->assertTrue($obj->getReductionFillon());
    }

    /**
     * Test setResponsable()
     *
     * @return void
     */
    public function testSetResponsable(): void {

        $obj = new Etablissements();

        $obj->setResponsable("responsable");
        $this->assertEquals("responsable", $obj->getResponsable());
    }

    /**
     * Test setRib1()
     *
     * @return void
     */
    public function testSetRib1(): void {

        $obj = new Etablissements();

        $obj->setRib1("rib1");
        $this->assertEquals("rib1", $obj->getRib1());
    }

    /**
     * Test setRib2()
     *
     * @return void
     */
    public function testSetRib2(): void {

        $obj = new Etablissements();

        $obj->setRib2("rib2");
        $this->assertEquals("rib2", $obj->getRib2());
    }

    /**
     * Test setRib3()
     *
     * @return void
     */
    public function testSetRib3(): void {

        $obj = new Etablissements();

        $obj->setRib3("rib3");
        $this->assertEquals("rib3", $obj->getRib3());
    }

    /**
     * Test setRtt1()
     *
     * @return void
     */
    public function testSetRtt1(): void {

        $obj = new Etablissements();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Test setRtt10()
     *
     * @return void
     */
    public function testSetRtt10(): void {

        $obj = new Etablissements();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Test setRtt11()
     *
     * @return void
     */
    public function testSetRtt11(): void {

        $obj = new Etablissements();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Test setRtt12()
     *
     * @return void
     */
    public function testSetRtt12(): void {

        $obj = new Etablissements();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Test setRtt2()
     *
     * @return void
     */
    public function testSetRtt2(): void {

        $obj = new Etablissements();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Test setRtt3()
     *
     * @return void
     */
    public function testSetRtt3(): void {

        $obj = new Etablissements();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Test setRtt4()
     *
     * @return void
     */
    public function testSetRtt4(): void {

        $obj = new Etablissements();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Test setRtt5()
     *
     * @return void
     */
    public function testSetRtt5(): void {

        $obj = new Etablissements();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Test setRtt6()
     *
     * @return void
     */
    public function testSetRtt6(): void {

        $obj = new Etablissements();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Test setRtt7()
     *
     * @return void
     */
    public function testSetRtt7(): void {

        $obj = new Etablissements();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Test setRtt8()
     *
     * @return void
     */
    public function testSetRtt8(): void {

        $obj = new Etablissements();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Test setRtt9()
     *
     * @return void
     */
    public function testSetRtt9(): void {

        $obj = new Etablissements();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Test setSiegeDadsu()
     *
     * @return void
     */
    public function testSetSiegeDadsu(): void {

        $obj = new Etablissements();

        $obj->setSiegeDadsu(true);
        $this->assertTrue($obj->getSiegeDadsu());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Etablissements();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSituationGeo()
     *
     * @return void
     */
    public function testSetSituationGeo(): void {

        $obj = new Etablissements();

        $obj->setSituationGeo("situationGeo");
        $this->assertEquals("situationGeo", $obj->getSituationGeo());
    }

    /**
     * Test setSubrogation()
     *
     * @return void
     */
    public function testSetSubrogation(): void {

        $obj = new Etablissements();

        $obj->setSubrogation(true);
        $this->assertTrue($obj->getSubrogation());
    }

    /**
     * Test setSuiviAnalytique()
     *
     * @return void
     */
    public function testSetSuiviAnalytique(): void {

        $obj = new Etablissements();

        $obj->setSuiviAnalytique(true);
        $this->assertTrue($obj->getSuiviAnalytique());
    }

    /**
     * Test setTauxActionsociale()
     *
     * @return void
     */
    public function testSetTauxActionsociale(): void {

        $obj = new Etablissements();

        $obj->setTauxActionsociale(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxActionsociale());
    }

    /**
     * Test setTauxConstruction()
     *
     * @return void
     */
    public function testSetTauxConstruction(): void {

        $obj = new Etablissements();

        $obj->setTauxConstruction(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxConstruction());
    }

    /**
     * Test setTauxFormation()
     *
     * @return void
     */
    public function testSetTauxFormation(): void {

        $obj = new Etablissements();

        $obj->setTauxFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxFormation());
    }

    /**
     * Test setTauxHSup1()
     *
     * @return void
     */
    public function testSetTauxHSup1(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup1());
    }

    /**
     * Test setTauxHSup2()
     *
     * @return void
     */
    public function testSetTauxHSup2(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup2());
    }

    /**
     * Test setTauxHSup3()
     *
     * @return void
     */
    public function testSetTauxHSup3(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup3());
    }

    /**
     * Test setTauxHSup4()
     *
     * @return void
     */
    public function testSetTauxHSup4(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup4(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup4());
    }

    /**
     * Test setTauxHSup5()
     *
     * @return void
     */
    public function testSetTauxHSup5(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup5(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup5());
    }

    /**
     * Test setTauxRetTr2Pp()
     *
     * @return void
     */
    public function testSetTauxRetTr2Pp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTr2Pp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Pp());
    }

    /**
     * Test setTauxRetTr2Ps()
     *
     * @return void
     */
    public function testSetTauxRetTr2Ps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTr2Ps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Ps());
    }

    /**
     * Test setTauxRetTrApp()
     *
     * @return void
     */
    public function testSetTauxRetTrApp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrApp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrApp());
    }

    /**
     * Test setTauxRetTrAps()
     *
     * @return void
     */
    public function testSetTauxRetTrAps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrAps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAps());
    }

    /**
     * Test setTauxRetTrBpp()
     *
     * @return void
     */
    public function testSetTauxRetTrBpp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrBpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBpp());
    }

    /**
     * Test setTauxRetTrBps()
     *
     * @return void
     */
    public function testSetTauxRetTrBps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrBps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBps());
    }

    /**
     * Test setTauxRetTrCpp()
     *
     * @return void
     */
    public function testSetTauxRetTrCpp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrCpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCpp());
    }

    /**
     * Test setTauxRetTrCps()
     *
     * @return void
     */
    public function testSetTauxRetTrCps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrCps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCps());
    }

    /**
     * Test setTauxRetTrDpp()
     *
     * @return void
     */
    public function testSetTauxRetTrDpp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrDpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDpp());
    }

    /**
     * Test setTauxRetTrDps()
     *
     * @return void
     */
    public function testSetTauxRetTrDps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrDps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDps());
    }

    /**
     * Test setTauxSupFormation()
     *
     * @return void
     */
    public function testSetTauxSupFormation(): void {

        $obj = new Etablissements();

        $obj->setTauxSupFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSupFormation());
    }

    /**
     * Test setTauxTaxeApprenti()
     *
     * @return void
     */
    public function testSetTauxTaxeApprenti(): void {

        $obj = new Etablissements();

        $obj->setTauxTaxeApprenti(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTaxeApprenti());
    }

    /**
     * Test setTauxTransport()
     *
     * @return void
     */
    public function testSetTauxTransport(): void {

        $obj = new Etablissements();

        $obj->setTauxTransport(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTransport());
    }

    /**
     * Test setTds128()
     *
     * @return void
     */
    public function testSetTds128(): void {

        $obj = new Etablissements();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Test setTds19()
     *
     * @return void
     */
    public function testSetTds19(): void {

        $obj = new Etablissements();

        $obj->setTds19("tds19");
        $this->assertEquals("tds19", $obj->getTds19());
    }

    /**
     * Test setTds47()
     *
     * @return void
     */
    public function testSetTds47(): void {

        $obj = new Etablissements();

        $obj->setTds47("tds47");
        $this->assertEquals("tds47", $obj->getTds47());
    }

    /**
     * Test setTel()
     *
     * @return void
     */
    public function testSetTel(): void {

        $obj = new Etablissements();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Test setTxSalDecote()
     *
     * @return void
     */
    public function testSetTxSalDecote(): void {

        $obj = new Etablissements();

        $obj->setTxSalDecote(10.092018);
        $this->assertEquals(10.092018, $obj->getTxSalDecote());
    }

    /**
     * Test setTypeBaseCaisse1()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1(): void {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }

    /**
     * Test setTypeBaseCaisse2()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse2(): void {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse2("typeBaseCaisse2");
        $this->assertEquals("typeBaseCaisse2", $obj->getTypeBaseCaisse2());
    }

    /**
     * Test setTypeBaseCaisse3()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3(): void {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }

    /**
     * Test setTypeBonif()
     *
     * @return void
     */
    public function testSetTypeBonif(): void {

        $obj = new Etablissements();

        $obj->setTypeBonif("typeBonif");
        $this->assertEquals("typeBonif", $obj->getTypeBonif());
    }

    /**
     * Test setTypeDomiciliationBanque1()
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque1(): void {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque1("typeDomiciliationBanque1");
        $this->assertEquals("typeDomiciliationBanque1", $obj->getTypeDomiciliationBanque1());
    }

    /**
     * Test setTypeDomiciliationBanque2()
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque2(): void {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque2("typeDomiciliationBanque2");
        $this->assertEquals("typeDomiciliationBanque2", $obj->getTypeDomiciliationBanque2());
    }

    /**
     * Test setTypeDomiciliationBanque3()
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque3(): void {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque3("typeDomiciliationBanque3");
        $this->assertEquals("typeDomiciliationBanque3", $obj->getTypeDomiciliationBanque3());
    }

    /**
     * Test setTypeEffectif()
     *
     * @return void
     */
    public function testSetTypeEffectif(): void {

        $obj = new Etablissements();

        $obj->setTypeEffectif("typeEffectif");
        $this->assertEquals("typeEffectif", $obj->getTypeEffectif());
    }

    /**
     * Test setTypeMaintienSalaire()
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire(): void {

        $obj = new Etablissements();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Test setTypePublication()
     *
     * @return void
     */
    public function testSetTypePublication(): void {

        $obj = new Etablissements();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Test setTypeSaisieAbCp()
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp(): void {

        $obj = new Etablissements();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Test setTypeSmic()
     *
     * @return void
     */
    public function testSetTypeSmic(): void {

        $obj = new Etablissements();

        $obj->setTypeSmic("typeSmic");
        $this->assertEquals("typeSmic", $obj->getTypeSmic());
    }

    /**
     * Test setUrssafAlsace()
     *
     * @return void
     */
    public function testSetUrssafAlsace(): void {

        $obj = new Etablissements();

        $obj->setUrssafAlsace(true);
        $this->assertTrue($obj->getUrssafAlsace());
    }

    /**
     * Test setZoneSpecif()
     *
     * @return void
     */
    public function testSetZoneSpecif(): void {

        $obj = new Etablissements();

        $obj->setZoneSpecif("zoneSpecif");
        $this->assertEquals("zoneSpecif", $obj->getZoneSpecif());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Etablissements();

        $this->assertNull($obj->getAtTauxBul1());
        $this->assertNull($obj->getAtTauxBul2());
        $this->assertNull($obj->getAtTauxBul3());
        $this->assertNull($obj->getAtTauxBul4());
        $this->assertNull($obj->getAtTauxBul5());
        $this->assertNull($obj->getAbattementMax());
        $this->assertNull($obj->getAllegParticulier());
        $this->assertNull($obj->getAtBureau1());
        $this->assertNull($obj->getAtBureau2());
        $this->assertNull($obj->getAtBureau3());
        $this->assertNull($obj->getAtBureau4());
        $this->assertNull($obj->getAtBureau5());
        $this->assertNull($obj->getAtEtab1());
        $this->assertNull($obj->getAtEtab2());
        $this->assertNull($obj->getAtEtab3());
        $this->assertNull($obj->getAtEtab4());
        $this->assertNull($obj->getAtEtab5());
        $this->assertNull($obj->getAtRisque1());
        $this->assertNull($obj->getAtRisque2());
        $this->assertNull($obj->getAtRisque3());
        $this->assertNull($obj->getAtRisque4());
        $this->assertNull($obj->getAtRisque5());
        $this->assertNull($obj->getAtTaux1());
        $this->assertNull($obj->getAtTaux2());
        $this->assertNull($obj->getAtTaux3());
        $this->assertNull($obj->getAtTaux4());
        $this->assertNull($obj->getAtTaux5());
        $this->assertNull($obj->getAubry1Modifie());
        $this->assertNull($obj->getAutreAlleg());
        $this->assertNull($obj->getBic1());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBanque1());
        $this->assertNull($obj->getBanque2());
        $this->assertNull($obj->getBanque3());
        $this->assertNull($obj->getBonusCospar());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCColect11());
        $this->assertNull($obj->getCColect12());
        $this->assertNull($obj->getCColect21());
        $this->assertNull($obj->getCColect22());
        $this->assertNull($obj->getCColect31());
        $this->assertNull($obj->getCColect32());
        $this->assertNull($obj->getCColect41());
        $this->assertNull($obj->getCColect42());
        $this->assertNull($obj->getCColect51());
        $this->assertNull($obj->getCColect52());
        $this->assertNull($obj->getCColect61());
        $this->assertNull($obj->getCColect62());
        $this->assertNull($obj->getCaisseCp());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeAdherent());
        $this->assertNull($obj->getCodeCColect1());
        $this->assertNull($obj->getCodeCColect2());
        $this->assertNull($obj->getCodeCColect3());
        $this->assertNull($obj->getCodeCColect4());
        $this->assertNull($obj->getCodeCColect5());
        $this->assertNull($obj->getCodeCColect6());
        $this->assertNull($obj->getCodeCentreImpot());
        $this->assertNull($obj->getCodeDucsSpecif());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeJournalBanque());
        $this->assertNull($obj->getCodeJournalPaie());
        $this->assertNull($obj->getCodeMetierRetraite());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeNaf22008());
        $this->assertNull($obj->getCodeNaf32008());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeNaf2());
        $this->assertNull($obj->getCodeNaf3());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePaysResidence());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCoeffAubry2());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCompteAcompteEmploye());
        $this->assertNull($obj->getCompteCharge1());
        $this->assertNull($obj->getCompteCharge10());
        $this->assertNull($obj->getCompteCharge11());
        $this->assertNull($obj->getCompteCharge2());
        $this->assertNull($obj->getCompteCharge3());
        $this->assertNull($obj->getCompteCharge4());
        $this->assertNull($obj->getCompteCharge5());
        $this->assertNull($obj->getCompteCharge6());
        $this->assertNull($obj->getCompteCharge7());
        $this->assertNull($obj->getCompteCharge8());
        $this->assertNull($obj->getCompteCharge9());
        $this->assertNull($obj->getCompteChargeAen());
        $this->assertNull($obj->getCompteChargeFc());
        $this->assertNull($obj->getCompteChargeIjss());
        $this->assertNull($obj->getCompteChargeIndemCp());
        $this->assertNull($obj->getCompteSaisieArret());
        $this->assertNull($obj->getCompteTiers1());
        $this->assertNull($obj->getCompteTiers2());
        $this->assertNull($obj->getDadsuCodeCColect1());
        $this->assertNull($obj->getDadsuCodeCColect2());
        $this->assertNull($obj->getDadsuCodeCColect3());
        $this->assertNull($obj->getDadsuCodeCColect4());
        $this->assertNull($obj->getDadsuCodeCColect5());
        $this->assertNull($obj->getDadsuCodeCColect6());
        $this->assertNull($obj->getDateAllegement());
        $this->assertNull($obj->getDateDucs());
        $this->assertNull($obj->getDateFinCospar());
        $this->assertNull($obj->getDateFinCp());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDatePublication());
        $this->assertNull($obj->getDebutEnvoi());
        $this->assertNull($obj->getDetailSalarie());
        $this->assertNull($obj->getDomaineActivite());
        $this->assertNull($obj->getDossierComptable());
        $this->assertNull($obj->getEditionDif());
        $this->assertNull($obj->getEditionDifBul());
        $this->assertNull($obj->getEmetteur1());
        $this->assertNull($obj->getEmetteur2());
        $this->assertNull($obj->getEmetteur3());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getEtabDeclDadsu());
        $this->assertNull($obj->getExclureDadsu());
        $this->assertNull($obj->getExoLodeomRenforcee());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFinEnvoi());
        $this->assertNull($obj->getGereFractionEtab());
        $this->assertNull($obj->getGestionContingent());
        $this->assertNull($obj->getGestionDucs1());
        $this->assertNull($obj->getGestionDucs2());
        $this->assertNull($obj->getGestionJourFerieEtab());
        $this->assertNull($obj->getGestionRtt());
        $this->assertNull($obj->getGestionReposComp());
        $this->assertNull($obj->getGestionReposRecup());
        $this->assertNull($obj->getGestionReposRemplace());
        $this->assertNull($obj->getGestionSemType());
        $this->assertNull($obj->getIban1());
        $this->assertNull($obj->getIbanIdClient1());
        $this->assertNull($obj->getInscritRepMetier());
        $this->assertNull($obj->getJourVerseSalaire());
        $this->assertNull($obj->getMaintienIntervientCp());
        $this->assertNull($obj->getMaintienSalaire());
        $this->assertNull($obj->getMaintienSpecifique());
        $this->assertNull($obj->getMasqueServiceEmploye());
        $this->assertNull($obj->getMethodeCp());
        $this->assertNull($obj->getMoisClotureCp());
        $this->assertNull($obj->getMoisClotureDif());
        $this->assertNull($obj->getMoisClotureRtt());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMontantAllegement());
        $this->assertNull($obj->getNatureAnalytique());
        $this->assertNull($obj->getNbHdifAn());
        $this->assertNull($obj->getNbHJour1());
        $this->assertNull($obj->getNbHJour2());
        $this->assertNull($obj->getNbHJour3());
        $this->assertNull($obj->getNbHJour4());
        $this->assertNull($obj->getNbHJour5());
        $this->assertNull($obj->getNbHJour6());
        $this->assertNull($obj->getNbHJour7());
        $this->assertNull($obj->getNbHeureTravMois());
        $this->assertNull($obj->getNbJourBase());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNbJourCpAcquis());
        $this->assertNull($obj->getNbMAjoutPer());
        $this->assertNull($obj->getNbMoisAubry1());
        $this->assertNull($obj->getNbhJourRtt());
        $this->assertNull($obj->getNePasActiverLoiFillon2003());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVilleInsee());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getOpcaDif());
        $this->assertNull($obj->getPLafondExo());
        $this->assertNull($obj->getPaieDecalee());
        $this->assertNull($obj->getPlafond1Caisse1());
        $this->assertNull($obj->getPlafond1Caisse2());
        $this->assertNull($obj->getPlafond1Caisse3());
        $this->assertNull($obj->getPlafond2Caisse1());
        $this->assertNull($obj->getPlafond2Caisse2());
        $this->assertNull($obj->getPlafond2Caisse3());
        $this->assertNull($obj->getPourcentBonif());
        $this->assertNull($obj->getPourcentExo());
        $this->assertNull($obj->getPourcentTransport());
        $this->assertNull($obj->getPourcentageImp());
        $this->assertNull($obj->getProfSpectacle());
        $this->assertNull($obj->getProfession());
        $this->assertNull($obj->getPrudType());
        $this->assertNull($obj->getPrudTypeDadsu());
        $this->assertNull($obj->getPublication());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getRtt1());
        $this->assertNull($obj->getRtt10());
        $this->assertNull($obj->getRtt11());
        $this->assertNull($obj->getRtt12());
        $this->assertNull($obj->getRtt2());
        $this->assertNull($obj->getRtt3());
        $this->assertNull($obj->getRtt4());
        $this->assertNull($obj->getRtt5());
        $this->assertNull($obj->getRtt6());
        $this->assertNull($obj->getRtt7());
        $this->assertNull($obj->getRtt8());
        $this->assertNull($obj->getRtt9());
        $this->assertNull($obj->getRaisonSociale());
        $this->assertNull($obj->getReductionFillon());
        $this->assertNull($obj->getResponsable());
        $this->assertNull($obj->getRib1());
        $this->assertNull($obj->getRib2());
        $this->assertNull($obj->getRib3());
        $this->assertNull($obj->getSiegeDadsu());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSituationGeo());
        $this->assertNull($obj->getSubrogation());
        $this->assertNull($obj->getSuiviAnalytique());
        $this->assertNull($obj->getTds128());
        $this->assertNull($obj->getTds19());
        $this->assertNull($obj->getTds47());
        $this->assertNull($obj->getTauxActionsociale());
        $this->assertNull($obj->getTauxConstruction());
        $this->assertNull($obj->getTauxFormation());
        $this->assertNull($obj->getTauxHSup1());
        $this->assertNull($obj->getTauxHSup2());
        $this->assertNull($obj->getTauxHSup3());
        $this->assertNull($obj->getTauxHSup4());
        $this->assertNull($obj->getTauxHSup5());
        $this->assertNull($obj->getTauxRetTr2Pp());
        $this->assertNull($obj->getTauxRetTr2Ps());
        $this->assertNull($obj->getTauxRetTrApp());
        $this->assertNull($obj->getTauxRetTrAps());
        $this->assertNull($obj->getTauxRetTrBpp());
        $this->assertNull($obj->getTauxRetTrBps());
        $this->assertNull($obj->getTauxRetTrCpp());
        $this->assertNull($obj->getTauxRetTrCps());
        $this->assertNull($obj->getTauxRetTrDpp());
        $this->assertNull($obj->getTauxRetTrDps());
        $this->assertNull($obj->getTauxSupFormation());
        $this->assertNull($obj->getTauxTaxeApprenti());
        $this->assertNull($obj->getTauxTransport());
        $this->assertNull($obj->getTel());
        $this->assertNull($obj->getTxSalDecote());
        $this->assertNull($obj->getTypeBaseCaisse1());
        $this->assertNull($obj->getTypeBaseCaisse2());
        $this->assertNull($obj->getTypeBaseCaisse3());
        $this->assertNull($obj->getTypeBonif());
        $this->assertNull($obj->getTypeDomiciliationBanque1());
        $this->assertNull($obj->getTypeDomiciliationBanque2());
        $this->assertNull($obj->getTypeDomiciliationBanque3());
        $this->assertNull($obj->getTypeEffectif());
        $this->assertNull($obj->getTypeMaintienSalaire());
        $this->assertNull($obj->getTypePublication());
        $this->assertNull($obj->getTypeSmic());
        $this->assertNull($obj->getTypeSaisieAbCp());
        $this->assertNull($obj->getUrssafAlsace());
        $this->assertNull($obj->getZoneSpecif());
    }
}
