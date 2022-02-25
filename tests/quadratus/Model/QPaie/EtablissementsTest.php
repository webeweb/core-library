<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
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
     * Tests setAbattementMax()
     *
     * @return void
     */
    public function testSetAbattementMax(): void {

        $obj = new Etablissements();

        $obj->setAbattementMax(10.092018);
        $this->assertEquals(10.092018, $obj->getAbattementMax());
    }

    /**
     * Tests setAllegParticulier()
     *
     * @return void
     */
    public function testSetAllegParticulier(): void {

        $obj = new Etablissements();

        $obj->setAllegParticulier("allegParticulier");
        $this->assertEquals("allegParticulier", $obj->getAllegParticulier());
    }

    /**
     * Tests setAtBureau1()
     *
     * @return void
     */
    public function testSetAtBureau1(): void {

        $obj = new Etablissements();

        $obj->setAtBureau1("atBureau1");
        $this->assertEquals("atBureau1", $obj->getAtBureau1());
    }

    /**
     * Tests setAtBureau2()
     *
     * @return void
     */
    public function testSetAtBureau2(): void {

        $obj = new Etablissements();

        $obj->setAtBureau2("atBureau2");
        $this->assertEquals("atBureau2", $obj->getAtBureau2());
    }

    /**
     * Tests setAtBureau3()
     *
     * @return void
     */
    public function testSetAtBureau3(): void {

        $obj = new Etablissements();

        $obj->setAtBureau3("atBureau3");
        $this->assertEquals("atBureau3", $obj->getAtBureau3());
    }

    /**
     * Tests setAtBureau4()
     *
     * @return void
     */
    public function testSetAtBureau4(): void {

        $obj = new Etablissements();

        $obj->setAtBureau4("atBureau4");
        $this->assertEquals("atBureau4", $obj->getAtBureau4());
    }

    /**
     * Tests setAtBureau5()
     *
     * @return void
     */
    public function testSetAtBureau5(): void {

        $obj = new Etablissements();

        $obj->setAtBureau5("atBureau5");
        $this->assertEquals("atBureau5", $obj->getAtBureau5());
    }

    /**
     * Tests setAtEtab1()
     *
     * @return void
     */
    public function testSetAtEtab1(): void {

        $obj = new Etablissements();

        $obj->setAtEtab1("atEtab1");
        $this->assertEquals("atEtab1", $obj->getAtEtab1());
    }

    /**
     * Tests setAtEtab2()
     *
     * @return void
     */
    public function testSetAtEtab2(): void {

        $obj = new Etablissements();

        $obj->setAtEtab2("atEtab2");
        $this->assertEquals("atEtab2", $obj->getAtEtab2());
    }

    /**
     * Tests setAtEtab3()
     *
     * @return void
     */
    public function testSetAtEtab3(): void {

        $obj = new Etablissements();

        $obj->setAtEtab3("atEtab3");
        $this->assertEquals("atEtab3", $obj->getAtEtab3());
    }

    /**
     * Tests setAtEtab4()
     *
     * @return void
     */
    public function testSetAtEtab4(): void {

        $obj = new Etablissements();

        $obj->setAtEtab4("atEtab4");
        $this->assertEquals("atEtab4", $obj->getAtEtab4());
    }

    /**
     * Tests setAtEtab5()
     *
     * @return void
     */
    public function testSetAtEtab5(): void {

        $obj = new Etablissements();

        $obj->setAtEtab5("atEtab5");
        $this->assertEquals("atEtab5", $obj->getAtEtab5());
    }

    /**
     * Tests setAtRisque1()
     *
     * @return void
     */
    public function testSetAtRisque1(): void {

        $obj = new Etablissements();

        $obj->setAtRisque1("atRisque1");
        $this->assertEquals("atRisque1", $obj->getAtRisque1());
    }

    /**
     * Tests setAtRisque2()
     *
     * @return void
     */
    public function testSetAtRisque2(): void {

        $obj = new Etablissements();

        $obj->setAtRisque2("atRisque2");
        $this->assertEquals("atRisque2", $obj->getAtRisque2());
    }

    /**
     * Tests setAtRisque3()
     *
     * @return void
     */
    public function testSetAtRisque3(): void {

        $obj = new Etablissements();

        $obj->setAtRisque3("atRisque3");
        $this->assertEquals("atRisque3", $obj->getAtRisque3());
    }

    /**
     * Tests setAtRisque4()
     *
     * @return void
     */
    public function testSetAtRisque4(): void {

        $obj = new Etablissements();

        $obj->setAtRisque4("atRisque4");
        $this->assertEquals("atRisque4", $obj->getAtRisque4());
    }

    /**
     * Tests setAtRisque5()
     *
     * @return void
     */
    public function testSetAtRisque5(): void {

        $obj = new Etablissements();

        $obj->setAtRisque5("atRisque5");
        $this->assertEquals("atRisque5", $obj->getAtRisque5());
    }

    /**
     * Tests setAtTaux1()
     *
     * @return void
     */
    public function testSetAtTaux1(): void {

        $obj = new Etablissements();

        $obj->setAtTaux1(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux1());
    }

    /**
     * Tests setAtTaux2()
     *
     * @return void
     */
    public function testSetAtTaux2(): void {

        $obj = new Etablissements();

        $obj->setAtTaux2(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux2());
    }

    /**
     * Tests setAtTaux3()
     *
     * @return void
     */
    public function testSetAtTaux3(): void {

        $obj = new Etablissements();

        $obj->setAtTaux3(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux3());
    }

    /**
     * Tests setAtTaux4()
     *
     * @return void
     */
    public function testSetAtTaux4(): void {

        $obj = new Etablissements();

        $obj->setAtTaux4(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux4());
    }

    /**
     * Tests setAtTaux5()
     *
     * @return void
     */
    public function testSetAtTaux5(): void {

        $obj = new Etablissements();

        $obj->setAtTaux5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTaux5());
    }

    /**
     * Tests setAtTauxBul1()
     *
     * @return void
     */
    public function testSetAtTauxBul1(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul1(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul1());
    }

    /**
     * Tests setAtTauxBul2()
     *
     * @return void
     */
    public function testSetAtTauxBul2(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul2(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul2());
    }

    /**
     * Tests setAtTauxBul3()
     *
     * @return void
     */
    public function testSetAtTauxBul3(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul3(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul3());
    }

    /**
     * Tests setAtTauxBul4()
     *
     * @return void
     */
    public function testSetAtTauxBul4(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul4(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul4());
    }

    /**
     * Tests setAtTauxBul5()
     *
     * @return void
     */
    public function testSetAtTauxBul5(): void {

        $obj = new Etablissements();

        $obj->setAtTauxBul5(10.092018);
        $this->assertEquals(10.092018, $obj->getAtTauxBul5());
    }

    /**
     * Tests setAubry1Modifie()
     *
     * @return void
     */
    public function testSetAubry1Modifie(): void {

        $obj = new Etablissements();

        $obj->setAubry1Modifie(true);
        $this->assertEquals(true, $obj->getAubry1Modifie());
    }

    /**
     * Tests setAutreAlleg()
     *
     * @return void
     */
    public function testSetAutreAlleg(): void {

        $obj = new Etablissements();

        $obj->setAutreAlleg("autreAlleg");
        $this->assertEquals("autreAlleg", $obj->getAutreAlleg());
    }

    /**
     * Tests setBanque1()
     *
     * @return void
     */
    public function testSetBanque1(): void {

        $obj = new Etablissements();

        $obj->setBanque1("banque1");
        $this->assertEquals("banque1", $obj->getBanque1());
    }

    /**
     * Tests setBanque2()
     *
     * @return void
     */
    public function testSetBanque2(): void {

        $obj = new Etablissements();

        $obj->setBanque2("banque2");
        $this->assertEquals("banque2", $obj->getBanque2());
    }

    /**
     * Tests setBanque3()
     *
     * @return void
     */
    public function testSetBanque3(): void {

        $obj = new Etablissements();

        $obj->setBanque3("banque3");
        $this->assertEquals("banque3", $obj->getBanque3());
    }

    /**
     * Tests setBic1()
     *
     * @return void
     */
    public function testSetBic1(): void {

        $obj = new Etablissements();

        $obj->setBic1("bic1");
        $this->assertEquals("bic1", $obj->getBic1());
    }

    /**
     * Tests setBonusCospar()
     *
     * @return void
     */
    public function testSetBonusCospar(): void {

        $obj = new Etablissements();

        $obj->setBonusCospar(true);
        $this->assertEquals(true, $obj->getBonusCospar());
    }

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Etablissements();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Etablissements();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCColect11()
     *
     * @return void
     */
    public function testSetCColect11(): void {

        $obj = new Etablissements();

        $obj->setCColect11("cColect11");
        $this->assertEquals("cColect11", $obj->getCColect11());
    }

    /**
     * Tests setCColect12()
     *
     * @return void
     */
    public function testSetCColect12(): void {

        $obj = new Etablissements();

        $obj->setCColect12("cColect12");
        $this->assertEquals("cColect12", $obj->getCColect12());
    }

    /**
     * Tests setCColect21()
     *
     * @return void
     */
    public function testSetCColect21(): void {

        $obj = new Etablissements();

        $obj->setCColect21("cColect21");
        $this->assertEquals("cColect21", $obj->getCColect21());
    }

    /**
     * Tests setCColect22()
     *
     * @return void
     */
    public function testSetCColect22(): void {

        $obj = new Etablissements();

        $obj->setCColect22("cColect22");
        $this->assertEquals("cColect22", $obj->getCColect22());
    }

    /**
     * Tests setCColect31()
     *
     * @return void
     */
    public function testSetCColect31(): void {

        $obj = new Etablissements();

        $obj->setCColect31("cColect31");
        $this->assertEquals("cColect31", $obj->getCColect31());
    }

    /**
     * Tests setCColect32()
     *
     * @return void
     */
    public function testSetCColect32(): void {

        $obj = new Etablissements();

        $obj->setCColect32("cColect32");
        $this->assertEquals("cColect32", $obj->getCColect32());
    }

    /**
     * Tests setCColect41()
     *
     * @return void
     */
    public function testSetCColect41(): void {

        $obj = new Etablissements();

        $obj->setCColect41("cColect41");
        $this->assertEquals("cColect41", $obj->getCColect41());
    }

    /**
     * Tests setCColect42()
     *
     * @return void
     */
    public function testSetCColect42(): void {

        $obj = new Etablissements();

        $obj->setCColect42("cColect42");
        $this->assertEquals("cColect42", $obj->getCColect42());
    }

    /**
     * Tests setCColect51()
     *
     * @return void
     */
    public function testSetCColect51(): void {

        $obj = new Etablissements();

        $obj->setCColect51("cColect51");
        $this->assertEquals("cColect51", $obj->getCColect51());
    }

    /**
     * Tests setCColect52()
     *
     * @return void
     */
    public function testSetCColect52(): void {

        $obj = new Etablissements();

        $obj->setCColect52("cColect52");
        $this->assertEquals("cColect52", $obj->getCColect52());
    }

    /**
     * Tests setCColect61()
     *
     * @return void
     */
    public function testSetCColect61(): void {

        $obj = new Etablissements();

        $obj->setCColect61("cColect61");
        $this->assertEquals("cColect61", $obj->getCColect61());
    }

    /**
     * Tests setCColect62()
     *
     * @return void
     */
    public function testSetCColect62(): void {

        $obj = new Etablissements();

        $obj->setCColect62("cColect62");
        $this->assertEquals("cColect62", $obj->getCColect62());
    }

    /**
     * Tests setCaisseCp()
     *
     * @return void
     */
    public function testSetCaisseCp(): void {

        $obj = new Etablissements();

        $obj->setCaisseCp(true);
        $this->assertEquals(true, $obj->getCaisseCp());
    }

    /**
     * Tests setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new Etablissements();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Tests setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new Etablissements();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests setCodeAdherent()
     *
     * @return void
     */
    public function testSetCodeAdherent(): void {

        $obj = new Etablissements();

        $obj->setCodeAdherent("codeAdherent");
        $this->assertEquals("codeAdherent", $obj->getCodeAdherent());
    }

    /**
     * Tests setCodeCColect1()
     *
     * @return void
     */
    public function testSetCodeCColect1(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect1("codeCColect1");
        $this->assertEquals("codeCColect1", $obj->getCodeCColect1());
    }

    /**
     * Tests setCodeCColect2()
     *
     * @return void
     */
    public function testSetCodeCColect2(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect2("codeCColect2");
        $this->assertEquals("codeCColect2", $obj->getCodeCColect2());
    }

    /**
     * Tests setCodeCColect3()
     *
     * @return void
     */
    public function testSetCodeCColect3(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect3("codeCColect3");
        $this->assertEquals("codeCColect3", $obj->getCodeCColect3());
    }

    /**
     * Tests setCodeCColect4()
     *
     * @return void
     */
    public function testSetCodeCColect4(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect4("codeCColect4");
        $this->assertEquals("codeCColect4", $obj->getCodeCColect4());
    }

    /**
     * Tests setCodeCColect5()
     *
     * @return void
     */
    public function testSetCodeCColect5(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect5("codeCColect5");
        $this->assertEquals("codeCColect5", $obj->getCodeCColect5());
    }

    /**
     * Tests setCodeCColect6()
     *
     * @return void
     */
    public function testSetCodeCColect6(): void {

        $obj = new Etablissements();

        $obj->setCodeCColect6("codeCColect6");
        $this->assertEquals("codeCColect6", $obj->getCodeCColect6());
    }

    /**
     * Tests setCodeCentreImpot()
     *
     * @return void
     */
    public function testSetCodeCentreImpot(): void {

        $obj = new Etablissements();

        $obj->setCodeCentreImpot("codeCentreImpot");
        $this->assertEquals("codeCentreImpot", $obj->getCodeCentreImpot());
    }

    /**
     * Tests setCodeDucsSpecif()
     *
     * @return void
     */
    public function testSetCodeDucsSpecif(): void {

        $obj = new Etablissements();

        $obj->setCodeDucsSpecif("codeDucsSpecif");
        $this->assertEquals("codeDucsSpecif", $obj->getCodeDucsSpecif());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Etablissements();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new Etablissements();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Tests setCodeJournalBanque()
     *
     * @return void
     */
    public function testSetCodeJournalBanque(): void {

        $obj = new Etablissements();

        $obj->setCodeJournalBanque("codeJournalBanque");
        $this->assertEquals("codeJournalBanque", $obj->getCodeJournalBanque());
    }

    /**
     * Tests setCodeJournalPaie()
     *
     * @return void
     */
    public function testSetCodeJournalPaie(): void {

        $obj = new Etablissements();

        $obj->setCodeJournalPaie("codeJournalPaie");
        $this->assertEquals("codeJournalPaie", $obj->getCodeJournalPaie());
    }

    /**
     * Tests setCodeMetierRetraite()
     *
     * @return void
     */
    public function testSetCodeMetierRetraite(): void {

        $obj = new Etablissements();

        $obj->setCodeMetierRetraite("codeMetierRetraite");
        $this->assertEquals("codeMetierRetraite", $obj->getCodeMetierRetraite());
    }

    /**
     * Tests setCodeNaf()
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Tests setCodeNaf2()
     *
     * @return void
     */
    public function testSetCodeNaf2(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf2("codeNaf2");
        $this->assertEquals("codeNaf2", $obj->getCodeNaf2());
    }

    /**
     * Tests setCodeNaf2008()
     *
     * @return void
     */
    public function testSetCodeNaf2008(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Tests setCodeNaf22008()
     *
     * @return void
     */
    public function testSetCodeNaf22008(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf22008("codeNaf22008");
        $this->assertEquals("codeNaf22008", $obj->getCodeNaf22008());
    }

    /**
     * Tests setCodeNaf3()
     *
     * @return void
     */
    public function testSetCodeNaf3(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf3("codeNaf3");
        $this->assertEquals("codeNaf3", $obj->getCodeNaf3());
    }

    /**
     * Tests setCodeNaf32008()
     *
     * @return void
     */
    public function testSetCodeNaf32008(): void {

        $obj = new Etablissements();

        $obj->setCodeNaf32008("codeNaf32008");
        $this->assertEquals("codeNaf32008", $obj->getCodeNaf32008());
    }

    /**
     * Tests setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Etablissements();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests setCodePays()
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new Etablissements();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests setCodePaysResidence()
     *
     * @return void
     */
    public function testSetCodePaysResidence(): void {

        $obj = new Etablissements();

        $obj->setCodePaysResidence("codePaysResidence");
        $this->assertEquals("codePaysResidence", $obj->getCodePaysResidence());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Etablissements();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCoeffAubry2()
     *
     * @return void
     */
    public function testSetCoeffAubry2(): void {

        $obj = new Etablissements();

        $obj->setCoeffAubry2(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffAubry2());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Etablissements();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setCompteAcompteEmploye()
     *
     * @return void
     */
    public function testSetCompteAcompteEmploye(): void {

        $obj = new Etablissements();

        $obj->setCompteAcompteEmploye(true);
        $this->assertEquals(true, $obj->getCompteAcompteEmploye());
    }

    /**
     * Tests setCompteCharge1()
     *
     * @return void
     */
    public function testSetCompteCharge1(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge1("compteCharge1");
        $this->assertEquals("compteCharge1", $obj->getCompteCharge1());
    }

    /**
     * Tests setCompteCharge10()
     *
     * @return void
     */
    public function testSetCompteCharge10(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge10("compteCharge10");
        $this->assertEquals("compteCharge10", $obj->getCompteCharge10());
    }

    /**
     * Tests setCompteCharge11()
     *
     * @return void
     */
    public function testSetCompteCharge11(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge11("compteCharge11");
        $this->assertEquals("compteCharge11", $obj->getCompteCharge11());
    }

    /**
     * Tests setCompteCharge2()
     *
     * @return void
     */
    public function testSetCompteCharge2(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge2("compteCharge2");
        $this->assertEquals("compteCharge2", $obj->getCompteCharge2());
    }

    /**
     * Tests setCompteCharge3()
     *
     * @return void
     */
    public function testSetCompteCharge3(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge3("compteCharge3");
        $this->assertEquals("compteCharge3", $obj->getCompteCharge3());
    }

    /**
     * Tests setCompteCharge4()
     *
     * @return void
     */
    public function testSetCompteCharge4(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge4("compteCharge4");
        $this->assertEquals("compteCharge4", $obj->getCompteCharge4());
    }

    /**
     * Tests setCompteCharge5()
     *
     * @return void
     */
    public function testSetCompteCharge5(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge5("compteCharge5");
        $this->assertEquals("compteCharge5", $obj->getCompteCharge5());
    }

    /**
     * Tests setCompteCharge6()
     *
     * @return void
     */
    public function testSetCompteCharge6(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge6("compteCharge6");
        $this->assertEquals("compteCharge6", $obj->getCompteCharge6());
    }

    /**
     * Tests setCompteCharge7()
     *
     * @return void
     */
    public function testSetCompteCharge7(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge7("compteCharge7");
        $this->assertEquals("compteCharge7", $obj->getCompteCharge7());
    }

    /**
     * Tests setCompteCharge8()
     *
     * @return void
     */
    public function testSetCompteCharge8(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge8("compteCharge8");
        $this->assertEquals("compteCharge8", $obj->getCompteCharge8());
    }

    /**
     * Tests setCompteCharge9()
     *
     * @return void
     */
    public function testSetCompteCharge9(): void {

        $obj = new Etablissements();

        $obj->setCompteCharge9("compteCharge9");
        $this->assertEquals("compteCharge9", $obj->getCompteCharge9());
    }

    /**
     * Tests setCompteChargeAen()
     *
     * @return void
     */
    public function testSetCompteChargeAen(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeAen("compteChargeAen");
        $this->assertEquals("compteChargeAen", $obj->getCompteChargeAen());
    }

    /**
     * Tests setCompteChargeFc()
     *
     * @return void
     */
    public function testSetCompteChargeFc(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeFc("compteChargeFc");
        $this->assertEquals("compteChargeFc", $obj->getCompteChargeFc());
    }

    /**
     * Tests setCompteChargeIjss()
     *
     * @return void
     */
    public function testSetCompteChargeIjss(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeIjss("compteChargeIjss");
        $this->assertEquals("compteChargeIjss", $obj->getCompteChargeIjss());
    }

    /**
     * Tests setCompteChargeIndemCp()
     *
     * @return void
     */
    public function testSetCompteChargeIndemCp(): void {

        $obj = new Etablissements();

        $obj->setCompteChargeIndemCp("compteChargeIndemCp");
        $this->assertEquals("compteChargeIndemCp", $obj->getCompteChargeIndemCp());
    }

    /**
     * Tests setCompteSaisieArret()
     *
     * @return void
     */
    public function testSetCompteSaisieArret(): void {

        $obj = new Etablissements();

        $obj->setCompteSaisieArret("compteSaisieArret");
        $this->assertEquals("compteSaisieArret", $obj->getCompteSaisieArret());
    }

    /**
     * Tests setCompteTiers1()
     *
     * @return void
     */
    public function testSetCompteTiers1(): void {

        $obj = new Etablissements();

        $obj->setCompteTiers1("compteTiers1");
        $this->assertEquals("compteTiers1", $obj->getCompteTiers1());
    }

    /**
     * Tests setCompteTiers2()
     *
     * @return void
     */
    public function testSetCompteTiers2(): void {

        $obj = new Etablissements();

        $obj->setCompteTiers2("compteTiers2");
        $this->assertEquals("compteTiers2", $obj->getCompteTiers2());
    }

    /**
     * Tests setDadsuCodeCColect1()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect1(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect1("dadsuCodeCColect1");
        $this->assertEquals("dadsuCodeCColect1", $obj->getDadsuCodeCColect1());
    }

    /**
     * Tests setDadsuCodeCColect2()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect2(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect2("dadsuCodeCColect2");
        $this->assertEquals("dadsuCodeCColect2", $obj->getDadsuCodeCColect2());
    }

    /**
     * Tests setDadsuCodeCColect3()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect3(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect3("dadsuCodeCColect3");
        $this->assertEquals("dadsuCodeCColect3", $obj->getDadsuCodeCColect3());
    }

    /**
     * Tests setDadsuCodeCColect4()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect4(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect4("dadsuCodeCColect4");
        $this->assertEquals("dadsuCodeCColect4", $obj->getDadsuCodeCColect4());
    }

    /**
     * Tests setDadsuCodeCColect5()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect5(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect5("dadsuCodeCColect5");
        $this->assertEquals("dadsuCodeCColect5", $obj->getDadsuCodeCColect5());
    }

    /**
     * Tests setDadsuCodeCColect6()
     *
     * @return void
     */
    public function testSetDadsuCodeCColect6(): void {

        $obj = new Etablissements();

        $obj->setDadsuCodeCColect6("dadsuCodeCColect6");
        $this->assertEquals("dadsuCodeCColect6", $obj->getDadsuCodeCColect6());
    }

    /**
     * Tests setDateAllegement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAllegement(): void {

        // Set a Date/time mock.
        $dateAllegement = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateAllegement($dateAllegement);
        $this->assertSame($dateAllegement, $obj->getDateAllegement());
    }

    /**
     * Tests setDateDucs()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDucs(): void {

        // Set a Date/time mock.
        $dateDucs = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateDucs($dateDucs);
        $this->assertSame($dateDucs, $obj->getDateDucs());
    }

    /**
     * Tests setDateFinCospar()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinCospar(): void {

        // Set a Date/time mock.
        $dateFinCospar = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateFinCospar($dateFinCospar);
        $this->assertSame($dateFinCospar, $obj->getDateFinCospar());
    }

    /**
     * Tests setDateFinCp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinCp(): void {

        // Set a Date/time mock.
        $dateFinCp = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateFinCp($dateFinCp);
        $this->assertSame($dateFinCp, $obj->getDateFinCp());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setDatePublication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePublication(): void {

        // Set a Date/time mock.
        $datePublication = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDatePublication($datePublication);
        $this->assertSame($datePublication, $obj->getDatePublication());
    }

    /**
     * Tests setDebutEnvoi()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutEnvoi(): void {

        // Set a Date/time mock.
        $debutEnvoi = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setDebutEnvoi($debutEnvoi);
        $this->assertSame($debutEnvoi, $obj->getDebutEnvoi());
    }

    /**
     * Tests setDetailSalarie()
     *
     * @return void
     */
    public function testSetDetailSalarie(): void {

        $obj = new Etablissements();

        $obj->setDetailSalarie(true);
        $this->assertEquals(true, $obj->getDetailSalarie());
    }

    /**
     * Tests setDomaineActivite()
     *
     * @return void
     */
    public function testSetDomaineActivite(): void {

        $obj = new Etablissements();

        $obj->setDomaineActivite("domaineActivite");
        $this->assertEquals("domaineActivite", $obj->getDomaineActivite());
    }

    /**
     * Tests setDossierComptable()
     *
     * @return void
     */
    public function testSetDossierComptable(): void {

        $obj = new Etablissements();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Tests setEditionDif()
     *
     * @return void
     */
    public function testSetEditionDif(): void {

        $obj = new Etablissements();

        $obj->setEditionDif(true);
        $this->assertEquals(true, $obj->getEditionDif());
    }

    /**
     * Tests setEditionDifBul()
     *
     * @return void
     */
    public function testSetEditionDifBul(): void {

        $obj = new Etablissements();

        $obj->setEditionDifBul("editionDifBul");
        $this->assertEquals("editionDifBul", $obj->getEditionDifBul());
    }

    /**
     * Tests setEmetteur1()
     *
     * @return void
     */
    public function testSetEmetteur1(): void {

        $obj = new Etablissements();

        $obj->setEmetteur1(10);
        $this->assertEquals(10, $obj->getEmetteur1());
    }

    /**
     * Tests setEmetteur2()
     *
     * @return void
     */
    public function testSetEmetteur2(): void {

        $obj = new Etablissements();

        $obj->setEmetteur2(10);
        $this->assertEquals(10, $obj->getEmetteur2());
    }

    /**
     * Tests setEmetteur3()
     *
     * @return void
     */
    public function testSetEmetteur3(): void {

        $obj = new Etablissements();

        $obj->setEmetteur3(10);
        $this->assertEquals(10, $obj->getEmetteur3());
    }

    /**
     * Tests setEnseigne()
     *
     * @return void
     */
    public function testSetEnseigne(): void {

        $obj = new Etablissements();

        $obj->setEnseigne("enseigne");
        $this->assertEquals("enseigne", $obj->getEnseigne());
    }

    /**
     * Tests setEtabDeclDadsu()
     *
     * @return void
     */
    public function testSetEtabDeclDadsu(): void {

        $obj = new Etablissements();

        $obj->setEtabDeclDadsu(true);
        $this->assertEquals(true, $obj->getEtabDeclDadsu());
    }

    /**
     * Tests setExclureDadsu()
     *
     * @return void
     */
    public function testSetExclureDadsu(): void {

        $obj = new Etablissements();

        $obj->setExclureDadsu(true);
        $this->assertEquals(true, $obj->getExclureDadsu());
    }

    /**
     * Tests setExoLodeomRenforcee()
     *
     * @return void
     */
    public function testSetExoLodeomRenforcee(): void {

        $obj = new Etablissements();

        $obj->setExoLodeomRenforcee(true);
        $this->assertEquals(true, $obj->getExoLodeomRenforcee());
    }

    /**
     * Tests setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new Etablissements();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests setFinEnvoi()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinEnvoi(): void {

        // Set a Date/time mock.
        $finEnvoi = new DateTime("2018-09-10");

        $obj = new Etablissements();

        $obj->setFinEnvoi($finEnvoi);
        $this->assertSame($finEnvoi, $obj->getFinEnvoi());
    }

    /**
     * Tests setGereFractionEtab()
     *
     * @return void
     */
    public function testSetGereFractionEtab(): void {

        $obj = new Etablissements();

        $obj->setGereFractionEtab(true);
        $this->assertEquals(true, $obj->getGereFractionEtab());
    }

    /**
     * Tests setGestionContingent()
     *
     * @return void
     */
    public function testSetGestionContingent(): void {

        $obj = new Etablissements();

        $obj->setGestionContingent(true);
        $this->assertEquals(true, $obj->getGestionContingent());
    }

    /**
     * Tests setGestionDucs1()
     *
     * @return void
     */
    public function testSetGestionDucs1(): void {

        $obj = new Etablissements();

        $obj->setGestionDucs1("gestionDucs1");
        $this->assertEquals("gestionDucs1", $obj->getGestionDucs1());
    }

    /**
     * Tests setGestionDucs2()
     *
     * @return void
     */
    public function testSetGestionDucs2(): void {

        $obj = new Etablissements();

        $obj->setGestionDucs2("gestionDucs2");
        $this->assertEquals("gestionDucs2", $obj->getGestionDucs2());
    }

    /**
     * Tests setGestionJourFerieEtab()
     *
     * @return void
     */
    public function testSetGestionJourFerieEtab(): void {

        $obj = new Etablissements();

        $obj->setGestionJourFerieEtab(true);
        $this->assertEquals(true, $obj->getGestionJourFerieEtab());
    }

    /**
     * Tests setGestionReposComp()
     *
     * @return void
     */
    public function testSetGestionReposComp(): void {

        $obj = new Etablissements();

        $obj->setGestionReposComp(true);
        $this->assertEquals(true, $obj->getGestionReposComp());
    }

    /**
     * Tests setGestionReposRecup()
     *
     * @return void
     */
    public function testSetGestionReposRecup(): void {

        $obj = new Etablissements();

        $obj->setGestionReposRecup(true);
        $this->assertEquals(true, $obj->getGestionReposRecup());
    }

    /**
     * Tests setGestionReposRemplace()
     *
     * @return void
     */
    public function testSetGestionReposRemplace(): void {

        $obj = new Etablissements();

        $obj->setGestionReposRemplace(true);
        $this->assertEquals(true, $obj->getGestionReposRemplace());
    }

    /**
     * Tests setGestionRtt()
     *
     * @return void
     */
    public function testSetGestionRtt(): void {

        $obj = new Etablissements();

        $obj->setGestionRtt(true);
        $this->assertEquals(true, $obj->getGestionRtt());
    }

    /**
     * Tests setGestionSemType()
     *
     * @return void
     */
    public function testSetGestionSemType(): void {

        $obj = new Etablissements();

        $obj->setGestionSemType(true);
        $this->assertEquals(true, $obj->getGestionSemType());
    }

    /**
     * Tests setIban1()
     *
     * @return void
     */
    public function testSetIban1(): void {

        $obj = new Etablissements();

        $obj->setIban1("iban1");
        $this->assertEquals("iban1", $obj->getIban1());
    }

    /**
     * Tests setIbanIdClient1()
     *
     * @return void
     */
    public function testSetIbanIdClient1(): void {

        $obj = new Etablissements();

        $obj->setIbanIdClient1("ibanIdClient1");
        $this->assertEquals("ibanIdClient1", $obj->getIbanIdClient1());
    }

    /**
     * Tests setInscritRepMetier()
     *
     * @return void
     */
    public function testSetInscritRepMetier(): void {

        $obj = new Etablissements();

        $obj->setInscritRepMetier(true);
        $this->assertEquals(true, $obj->getInscritRepMetier());
    }

    /**
     * Tests setJourVerseSalaire()
     *
     * @return void
     */
    public function testSetJourVerseSalaire(): void {

        $obj = new Etablissements();

        $obj->setJourVerseSalaire("jourVerseSalaire");
        $this->assertEquals("jourVerseSalaire", $obj->getJourVerseSalaire());
    }

    /**
     * Tests setMaintienIntervientCp()
     *
     * @return void
     */
    public function testSetMaintienIntervientCp(): void {

        $obj = new Etablissements();

        $obj->setMaintienIntervientCp(true);
        $this->assertEquals(true, $obj->getMaintienIntervientCp());
    }

    /**
     * Tests setMaintienSalaire()
     *
     * @return void
     */
    public function testSetMaintienSalaire(): void {

        $obj = new Etablissements();

        $obj->setMaintienSalaire(true);
        $this->assertEquals(true, $obj->getMaintienSalaire());
    }

    /**
     * Tests setMaintienSpecifique()
     *
     * @return void
     */
    public function testSetMaintienSpecifique(): void {

        $obj = new Etablissements();

        $obj->setMaintienSpecifique(true);
        $this->assertEquals(true, $obj->getMaintienSpecifique());
    }

    /**
     * Tests setMasqueServiceEmploye()
     *
     * @return void
     */
    public function testSetMasqueServiceEmploye(): void {

        $obj = new Etablissements();

        $obj->setMasqueServiceEmploye(true);
        $this->assertEquals(true, $obj->getMasqueServiceEmploye());
    }

    /**
     * Tests setMethodeCp()
     *
     * @return void
     */
    public function testSetMethodeCp(): void {

        $obj = new Etablissements();

        $obj->setMethodeCp("methodeCp");
        $this->assertEquals("methodeCp", $obj->getMethodeCp());
    }

    /**
     * Tests setMoisClotureCp()
     *
     * @return void
     */
    public function testSetMoisClotureCp(): void {

        $obj = new Etablissements();

        $obj->setMoisClotureCp("moisClotureCp");
        $this->assertEquals("moisClotureCp", $obj->getMoisClotureCp());
    }

    /**
     * Tests setMoisClotureDif()
     *
     * @return void
     */
    public function testSetMoisClotureDif(): void {

        $obj = new Etablissements();

        $obj->setMoisClotureDif("moisClotureDif");
        $this->assertEquals("moisClotureDif", $obj->getMoisClotureDif());
    }

    /**
     * Tests setMoisClotureRtt()
     *
     * @return void
     */
    public function testSetMoisClotureRtt(): void {

        $obj = new Etablissements();

        $obj->setMoisClotureRtt("moisClotureRtt");
        $this->assertEquals("moisClotureRtt", $obj->getMoisClotureRtt());
    }

    /**
     * Tests setMontant1()
     *
     * @return void
     */
    public function testSetMontant1(): void {

        $obj = new Etablissements();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests setMontant2()
     *
     * @return void
     */
    public function testSetMontant2(): void {

        $obj = new Etablissements();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests setMontant3()
     *
     * @return void
     */
    public function testSetMontant3(): void {

        $obj = new Etablissements();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests setMontant4()
     *
     * @return void
     */
    public function testSetMontant4(): void {

        $obj = new Etablissements();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests setMontant5()
     *
     * @return void
     */
    public function testSetMontant5(): void {

        $obj = new Etablissements();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Tests setMontantAllegement()
     *
     * @return void
     */
    public function testSetMontantAllegement(): void {

        $obj = new Etablissements();

        $obj->setMontantAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAllegement());
    }

    /**
     * Tests setNatureAnalytique()
     *
     * @return void
     */
    public function testSetNatureAnalytique(): void {

        $obj = new Etablissements();

        $obj->setNatureAnalytique("natureAnalytique");
        $this->assertEquals("natureAnalytique", $obj->getNatureAnalytique());
    }

    /**
     * Tests setNbHJour1()
     *
     * @return void
     */
    public function testSetNbHJour1(): void {

        $obj = new Etablissements();

        $obj->setNbHJour1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour1());
    }

    /**
     * Tests setNbHJour2()
     *
     * @return void
     */
    public function testSetNbHJour2(): void {

        $obj = new Etablissements();

        $obj->setNbHJour2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour2());
    }

    /**
     * Tests setNbHJour3()
     *
     * @return void
     */
    public function testSetNbHJour3(): void {

        $obj = new Etablissements();

        $obj->setNbHJour3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour3());
    }

    /**
     * Tests setNbHJour4()
     *
     * @return void
     */
    public function testSetNbHJour4(): void {

        $obj = new Etablissements();

        $obj->setNbHJour4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour4());
    }

    /**
     * Tests setNbHJour5()
     *
     * @return void
     */
    public function testSetNbHJour5(): void {

        $obj = new Etablissements();

        $obj->setNbHJour5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour5());
    }

    /**
     * Tests setNbHJour6()
     *
     * @return void
     */
    public function testSetNbHJour6(): void {

        $obj = new Etablissements();

        $obj->setNbHJour6(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour6());
    }

    /**
     * Tests setNbHJour7()
     *
     * @return void
     */
    public function testSetNbHJour7(): void {

        $obj = new Etablissements();

        $obj->setNbHJour7(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHJour7());
    }

    /**
     * Tests setNbHdifAn()
     *
     * @return void
     */
    public function testSetNbHdifAn(): void {

        $obj = new Etablissements();

        $obj->setNbHdifAn(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHdifAn());
    }

    /**
     * Tests setNbHeureTravMois()
     *
     * @return void
     */
    public function testSetNbHeureTravMois(): void {

        $obj = new Etablissements();

        $obj->setNbHeureTravMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTravMois());
    }

    /**
     * Tests setNbJourBase()
     *
     * @return void
     */
    public function testSetNbJourBase(): void {

        $obj = new Etablissements();

        $obj->setNbJourBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBase());
    }

    /**
     * Tests setNbJourBaseCp()
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Etablissements();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Tests setNbJourCpAcquis()
     *
     * @return void
     */
    public function testSetNbJourCpAcquis(): void {

        $obj = new Etablissements();

        $obj->setNbJourCpAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCpAcquis());
    }

    /**
     * Tests setNbMAjoutPer()
     *
     * @return void
     */
    public function testSetNbMAjoutPer(): void {

        $obj = new Etablissements();

        $obj->setNbMAjoutPer("nbMAjoutPer");
        $this->assertEquals("nbMAjoutPer", $obj->getNbMAjoutPer());
    }

    /**
     * Tests setNbMoisAubry1()
     *
     * @return void
     */
    public function testSetNbMoisAubry1(): void {

        $obj = new Etablissements();

        $obj->setNbMoisAubry1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbMoisAubry1());
    }

    /**
     * Tests setNbhJourRtt()
     *
     * @return void
     */
    public function testSetNbhJourRtt(): void {

        $obj = new Etablissements();

        $obj->setNbhJourRtt(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhJourRtt());
    }

    /**
     * Tests setNePasActiverLoiFillon2003()
     *
     * @return void
     */
    public function testSetNePasActiverLoiFillon2003(): void {

        $obj = new Etablissements();

        $obj->setNePasActiverLoiFillon2003(true);
        $this->assertEquals(true, $obj->getNePasActiverLoiFillon2003());
    }

    /**
     * Tests setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Etablissements();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests setNomVilleInsee()
     *
     * @return void
     */
    public function testSetNomVilleInsee(): void {

        $obj = new Etablissements();

        $obj->setNomVilleInsee("nomVilleInsee");
        $this->assertEquals("nomVilleInsee", $obj->getNomVilleInsee());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Etablissements();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Etablissements();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setOpcaDif()
     *
     * @return void
     */
    public function testSetOpcaDif(): void {

        $obj = new Etablissements();

        $obj->setOpcaDif("opcaDif");
        $this->assertEquals("opcaDif", $obj->getOpcaDif());
    }

    /**
     * Tests setPLafondExo()
     *
     * @return void
     */
    public function testSetPLafondExo(): void {

        $obj = new Etablissements();

        $obj->setPLafondExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPLafondExo());
    }

    /**
     * Tests setPaieDecalee()
     *
     * @return void
     */
    public function testSetPaieDecalee(): void {

        $obj = new Etablissements();

        $obj->setPaieDecalee(true);
        $this->assertEquals(true, $obj->getPaieDecalee());
    }

    /**
     * Tests setPlafond1Caisse1()
     *
     * @return void
     */
    public function testSetPlafond1Caisse1(): void {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse1());
    }

    /**
     * Tests setPlafond1Caisse2()
     *
     * @return void
     */
    public function testSetPlafond1Caisse2(): void {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse2());
    }

    /**
     * Tests setPlafond1Caisse3()
     *
     * @return void
     */
    public function testSetPlafond1Caisse3(): void {

        $obj = new Etablissements();

        $obj->setPlafond1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse3());
    }

    /**
     * Tests setPlafond2Caisse1()
     *
     * @return void
     */
    public function testSetPlafond2Caisse1(): void {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }

    /**
     * Tests setPlafond2Caisse2()
     *
     * @return void
     */
    public function testSetPlafond2Caisse2(): void {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse2());
    }

    /**
     * Tests setPlafond2Caisse3()
     *
     * @return void
     */
    public function testSetPlafond2Caisse3(): void {

        $obj = new Etablissements();

        $obj->setPlafond2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse3());
    }

    /**
     * Tests setPourcentBonif()
     *
     * @return void
     */
    public function testSetPourcentBonif(): void {

        $obj = new Etablissements();

        $obj->setPourcentBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentBonif());
    }

    /**
     * Tests setPourcentExo()
     *
     * @return void
     */
    public function testSetPourcentExo(): void {

        $obj = new Etablissements();

        $obj->setPourcentExo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentExo());
    }

    /**
     * Tests setPourcentTransport()
     *
     * @return void
     */
    public function testSetPourcentTransport(): void {

        $obj = new Etablissements();

        $obj->setPourcentTransport(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentTransport());
    }

    /**
     * Tests setPourcentageImp()
     *
     * @return void
     */
    public function testSetPourcentageImp(): void {

        $obj = new Etablissements();

        $obj->setPourcentageImp(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentageImp());
    }

    /**
     * Tests setProfSpectacle()
     *
     * @return void
     */
    public function testSetProfSpectacle(): void {

        $obj = new Etablissements();

        $obj->setProfSpectacle(true);
        $this->assertEquals(true, $obj->getProfSpectacle());
    }

    /**
     * Tests setProfession()
     *
     * @return void
     */
    public function testSetProfession(): void {

        $obj = new Etablissements();

        $obj->setProfession("profession");
        $this->assertEquals("profession", $obj->getProfession());
    }

    /**
     * Tests setPrudType()
     *
     * @return void
     */
    public function testSetPrudType(): void {

        $obj = new Etablissements();

        $obj->setPrudType("prudType");
        $this->assertEquals("prudType", $obj->getPrudType());
    }

    /**
     * Tests setPrudTypeDadsu()
     *
     * @return void
     */
    public function testSetPrudTypeDadsu(): void {

        $obj = new Etablissements();

        $obj->setPrudTypeDadsu("prudTypeDadsu");
        $this->assertEquals("prudTypeDadsu", $obj->getPrudTypeDadsu());
    }

    /**
     * Tests setPublication()
     *
     * @return void
     */
    public function testSetPublication(): void {

        $obj = new Etablissements();

        $obj->setPublication(true);
        $this->assertEquals(true, $obj->getPublication());
    }

    /**
     * Tests setQualite()
     *
     * @return void
     */
    public function testSetQualite(): void {

        $obj = new Etablissements();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Tests setRaisonSociale()
     *
     * @return void
     */
    public function testSetRaisonSociale(): void {

        $obj = new Etablissements();

        $obj->setRaisonSociale("raisonSociale");
        $this->assertEquals("raisonSociale", $obj->getRaisonSociale());
    }

    /**
     * Tests setReductionFillon()
     *
     * @return void
     */
    public function testSetReductionFillon(): void {

        $obj = new Etablissements();

        $obj->setReductionFillon(true);
        $this->assertEquals(true, $obj->getReductionFillon());
    }

    /**
     * Tests setResponsable()
     *
     * @return void
     */
    public function testSetResponsable(): void {

        $obj = new Etablissements();

        $obj->setResponsable("responsable");
        $this->assertEquals("responsable", $obj->getResponsable());
    }

    /**
     * Tests setRib1()
     *
     * @return void
     */
    public function testSetRib1(): void {

        $obj = new Etablissements();

        $obj->setRib1("rib1");
        $this->assertEquals("rib1", $obj->getRib1());
    }

    /**
     * Tests setRib2()
     *
     * @return void
     */
    public function testSetRib2(): void {

        $obj = new Etablissements();

        $obj->setRib2("rib2");
        $this->assertEquals("rib2", $obj->getRib2());
    }

    /**
     * Tests setRib3()
     *
     * @return void
     */
    public function testSetRib3(): void {

        $obj = new Etablissements();

        $obj->setRib3("rib3");
        $this->assertEquals("rib3", $obj->getRib3());
    }

    /**
     * Tests setRtt1()
     *
     * @return void
     */
    public function testSetRtt1(): void {

        $obj = new Etablissements();

        $obj->setRtt1(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt1());
    }

    /**
     * Tests setRtt10()
     *
     * @return void
     */
    public function testSetRtt10(): void {

        $obj = new Etablissements();

        $obj->setRtt10(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt10());
    }

    /**
     * Tests setRtt11()
     *
     * @return void
     */
    public function testSetRtt11(): void {

        $obj = new Etablissements();

        $obj->setRtt11(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt11());
    }

    /**
     * Tests setRtt12()
     *
     * @return void
     */
    public function testSetRtt12(): void {

        $obj = new Etablissements();

        $obj->setRtt12(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt12());
    }

    /**
     * Tests setRtt2()
     *
     * @return void
     */
    public function testSetRtt2(): void {

        $obj = new Etablissements();

        $obj->setRtt2(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt2());
    }

    /**
     * Tests setRtt3()
     *
     * @return void
     */
    public function testSetRtt3(): void {

        $obj = new Etablissements();

        $obj->setRtt3(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt3());
    }

    /**
     * Tests setRtt4()
     *
     * @return void
     */
    public function testSetRtt4(): void {

        $obj = new Etablissements();

        $obj->setRtt4(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt4());
    }

    /**
     * Tests setRtt5()
     *
     * @return void
     */
    public function testSetRtt5(): void {

        $obj = new Etablissements();

        $obj->setRtt5(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt5());
    }

    /**
     * Tests setRtt6()
     *
     * @return void
     */
    public function testSetRtt6(): void {

        $obj = new Etablissements();

        $obj->setRtt6(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt6());
    }

    /**
     * Tests setRtt7()
     *
     * @return void
     */
    public function testSetRtt7(): void {

        $obj = new Etablissements();

        $obj->setRtt7(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt7());
    }

    /**
     * Tests setRtt8()
     *
     * @return void
     */
    public function testSetRtt8(): void {

        $obj = new Etablissements();

        $obj->setRtt8(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt8());
    }

    /**
     * Tests setRtt9()
     *
     * @return void
     */
    public function testSetRtt9(): void {

        $obj = new Etablissements();

        $obj->setRtt9(10.092018);
        $this->assertEquals(10.092018, $obj->getRtt9());
    }

    /**
     * Tests setSiegeDadsu()
     *
     * @return void
     */
    public function testSetSiegeDadsu(): void {

        $obj = new Etablissements();

        $obj->setSiegeDadsu(true);
        $this->assertEquals(true, $obj->getSiegeDadsu());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Etablissements();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests setSituationGeo()
     *
     * @return void
     */
    public function testSetSituationGeo(): void {

        $obj = new Etablissements();

        $obj->setSituationGeo("situationGeo");
        $this->assertEquals("situationGeo", $obj->getSituationGeo());
    }

    /**
     * Tests setSubrogation()
     *
     * @return void
     */
    public function testSetSubrogation(): void {

        $obj = new Etablissements();

        $obj->setSubrogation(true);
        $this->assertEquals(true, $obj->getSubrogation());
    }

    /**
     * Tests setSuiviAnalytique()
     *
     * @return void
     */
    public function testSetSuiviAnalytique(): void {

        $obj = new Etablissements();

        $obj->setSuiviAnalytique(true);
        $this->assertEquals(true, $obj->getSuiviAnalytique());
    }

    /**
     * Tests setTauxActionsociale()
     *
     * @return void
     */
    public function testSetTauxActionsociale(): void {

        $obj = new Etablissements();

        $obj->setTauxActionsociale(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxActionsociale());
    }

    /**
     * Tests setTauxConstruction()
     *
     * @return void
     */
    public function testSetTauxConstruction(): void {

        $obj = new Etablissements();

        $obj->setTauxConstruction(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxConstruction());
    }

    /**
     * Tests setTauxFormation()
     *
     * @return void
     */
    public function testSetTauxFormation(): void {

        $obj = new Etablissements();

        $obj->setTauxFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxFormation());
    }

    /**
     * Tests setTauxHSup1()
     *
     * @return void
     */
    public function testSetTauxHSup1(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup1());
    }

    /**
     * Tests setTauxHSup2()
     *
     * @return void
     */
    public function testSetTauxHSup2(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup2());
    }

    /**
     * Tests setTauxHSup3()
     *
     * @return void
     */
    public function testSetTauxHSup3(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup3());
    }

    /**
     * Tests setTauxHSup4()
     *
     * @return void
     */
    public function testSetTauxHSup4(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup4(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup4());
    }

    /**
     * Tests setTauxHSup5()
     *
     * @return void
     */
    public function testSetTauxHSup5(): void {

        $obj = new Etablissements();

        $obj->setTauxHSup5(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHSup5());
    }

    /**
     * Tests setTauxRetTr2Pp()
     *
     * @return void
     */
    public function testSetTauxRetTr2Pp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTr2Pp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Pp());
    }

    /**
     * Tests setTauxRetTr2Ps()
     *
     * @return void
     */
    public function testSetTauxRetTr2Ps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTr2Ps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Ps());
    }

    /**
     * Tests setTauxRetTrApp()
     *
     * @return void
     */
    public function testSetTauxRetTrApp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrApp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrApp());
    }

    /**
     * Tests setTauxRetTrAps()
     *
     * @return void
     */
    public function testSetTauxRetTrAps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrAps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrAps());
    }

    /**
     * Tests setTauxRetTrBpp()
     *
     * @return void
     */
    public function testSetTauxRetTrBpp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrBpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBpp());
    }

    /**
     * Tests setTauxRetTrBps()
     *
     * @return void
     */
    public function testSetTauxRetTrBps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrBps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBps());
    }

    /**
     * Tests setTauxRetTrCpp()
     *
     * @return void
     */
    public function testSetTauxRetTrCpp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrCpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCpp());
    }

    /**
     * Tests setTauxRetTrCps()
     *
     * @return void
     */
    public function testSetTauxRetTrCps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrCps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrCps());
    }

    /**
     * Tests setTauxRetTrDpp()
     *
     * @return void
     */
    public function testSetTauxRetTrDpp(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrDpp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDpp());
    }

    /**
     * Tests setTauxRetTrDps()
     *
     * @return void
     */
    public function testSetTauxRetTrDps(): void {

        $obj = new Etablissements();

        $obj->setTauxRetTrDps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrDps());
    }

    /**
     * Tests setTauxSupFormation()
     *
     * @return void
     */
    public function testSetTauxSupFormation(): void {

        $obj = new Etablissements();

        $obj->setTauxSupFormation(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSupFormation());
    }

    /**
     * Tests setTauxTaxeApprenti()
     *
     * @return void
     */
    public function testSetTauxTaxeApprenti(): void {

        $obj = new Etablissements();

        $obj->setTauxTaxeApprenti(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTaxeApprenti());
    }

    /**
     * Tests setTauxTransport()
     *
     * @return void
     */
    public function testSetTauxTransport(): void {

        $obj = new Etablissements();

        $obj->setTauxTransport(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTransport());
    }

    /**
     * Tests setTds128()
     *
     * @return void
     */
    public function testSetTds128(): void {

        $obj = new Etablissements();

        $obj->setTds128("tds128");
        $this->assertEquals("tds128", $obj->getTds128());
    }

    /**
     * Tests setTds19()
     *
     * @return void
     */
    public function testSetTds19(): void {

        $obj = new Etablissements();

        $obj->setTds19("tds19");
        $this->assertEquals("tds19", $obj->getTds19());
    }

    /**
     * Tests setTds47()
     *
     * @return void
     */
    public function testSetTds47(): void {

        $obj = new Etablissements();

        $obj->setTds47("tds47");
        $this->assertEquals("tds47", $obj->getTds47());
    }

    /**
     * Tests setTel()
     *
     * @return void
     */
    public function testSetTel(): void {

        $obj = new Etablissements();

        $obj->setTel("tel");
        $this->assertEquals("tel", $obj->getTel());
    }

    /**
     * Tests setTxSalDecote()
     *
     * @return void
     */
    public function testSetTxSalDecote(): void {

        $obj = new Etablissements();

        $obj->setTxSalDecote(10.092018);
        $this->assertEquals(10.092018, $obj->getTxSalDecote());
    }

    /**
     * Tests setTypeBaseCaisse1()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1(): void {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }

    /**
     * Tests setTypeBaseCaisse2()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse2(): void {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse2("typeBaseCaisse2");
        $this->assertEquals("typeBaseCaisse2", $obj->getTypeBaseCaisse2());
    }

    /**
     * Tests setTypeBaseCaisse3()
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3(): void {

        $obj = new Etablissements();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }

    /**
     * Tests setTypeBonif()
     *
     * @return void
     */
    public function testSetTypeBonif(): void {

        $obj = new Etablissements();

        $obj->setTypeBonif("typeBonif");
        $this->assertEquals("typeBonif", $obj->getTypeBonif());
    }

    /**
     * Tests setTypeDomiciliationBanque1()
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque1(): void {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque1("typeDomiciliationBanque1");
        $this->assertEquals("typeDomiciliationBanque1", $obj->getTypeDomiciliationBanque1());
    }

    /**
     * Tests setTypeDomiciliationBanque2()
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque2(): void {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque2("typeDomiciliationBanque2");
        $this->assertEquals("typeDomiciliationBanque2", $obj->getTypeDomiciliationBanque2());
    }

    /**
     * Tests setTypeDomiciliationBanque3()
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque3(): void {

        $obj = new Etablissements();

        $obj->setTypeDomiciliationBanque3("typeDomiciliationBanque3");
        $this->assertEquals("typeDomiciliationBanque3", $obj->getTypeDomiciliationBanque3());
    }

    /**
     * Tests setTypeEffectif()
     *
     * @return void
     */
    public function testSetTypeEffectif(): void {

        $obj = new Etablissements();

        $obj->setTypeEffectif("typeEffectif");
        $this->assertEquals("typeEffectif", $obj->getTypeEffectif());
    }

    /**
     * Tests setTypeMaintienSalaire()
     *
     * @return void
     */
    public function testSetTypeMaintienSalaire(): void {

        $obj = new Etablissements();

        $obj->setTypeMaintienSalaire("typeMaintienSalaire");
        $this->assertEquals("typeMaintienSalaire", $obj->getTypeMaintienSalaire());
    }

    /**
     * Tests setTypePublication()
     *
     * @return void
     */
    public function testSetTypePublication(): void {

        $obj = new Etablissements();

        $obj->setTypePublication("typePublication");
        $this->assertEquals("typePublication", $obj->getTypePublication());
    }

    /**
     * Tests setTypeSaisieAbCp()
     *
     * @return void
     */
    public function testSetTypeSaisieAbCp(): void {

        $obj = new Etablissements();

        $obj->setTypeSaisieAbCp("typeSaisieAbCp");
        $this->assertEquals("typeSaisieAbCp", $obj->getTypeSaisieAbCp());
    }

    /**
     * Tests setTypeSmic()
     *
     * @return void
     */
    public function testSetTypeSmic(): void {

        $obj = new Etablissements();

        $obj->setTypeSmic("typeSmic");
        $this->assertEquals("typeSmic", $obj->getTypeSmic());
    }

    /**
     * Tests setUrssafAlsace()
     *
     * @return void
     */
    public function testSetUrssafAlsace(): void {

        $obj = new Etablissements();

        $obj->setUrssafAlsace(true);
        $this->assertEquals(true, $obj->getUrssafAlsace());
    }

    /**
     * Tests setZoneSpecif()
     *
     * @return void
     */
    public function testSetZoneSpecif(): void {

        $obj = new Etablissements();

        $obj->setZoneSpecif("zoneSpecif");
        $this->assertEquals("zoneSpecif", $obj->getZoneSpecif());
    }

    /**
     * Tests __construct()
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
