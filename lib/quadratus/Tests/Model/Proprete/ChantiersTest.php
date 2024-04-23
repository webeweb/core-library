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

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\Chantiers;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersTest extends AbstractTestCase {

    /**
     * Test setAdFBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur(): void {

        $obj = new Chantiers();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Test setAdFCivilite()
     *
     * @return void
     */
    public function testSetAdFCivilite(): void {

        $obj = new Chantiers();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Test setAdFCodePays()
     *
     * @return void
     */
    public function testSetAdFCodePays(): void {

        $obj = new Chantiers();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Test setAdFCodePostal()
     *
     * @return void
     */
    public function testSetAdFCodePostal(): void {

        $obj = new Chantiers();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Test setAdFComplement()
     *
     * @return void
     */
    public function testSetAdFComplement(): void {

        $obj = new Chantiers();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Test setAdFNomClient()
     *
     * @return void
     */
    public function testSetAdFNomClient(): void {

        $obj = new Chantiers();

        $obj->setAdFNomClient("adFNomClient");
        $this->assertEquals("adFNomClient", $obj->getAdFNomClient());
    }

    /**
     * Test setAdFNomSuite()
     *
     * @return void
     */
    public function testSetAdFNomSuite(): void {

        $obj = new Chantiers();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Test setAdFNomSuite2()
     *
     * @return void
     */
    public function testSetAdFNomSuite2(): void {

        $obj = new Chantiers();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Test setAdFNomSuite3()
     *
     * @return void
     */
    public function testSetAdFNomSuite3(): void {

        $obj = new Chantiers();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Test setAdFNomVoie()
     *
     * @return void
     */
    public function testSetAdFNomVoie(): void {

        $obj = new Chantiers();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Test setAdFNumVoie()
     *
     * @return void
     */
    public function testSetAdFNumVoie(): void {

        $obj = new Chantiers();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Test setAdFTypeAdresse()
     *
     * @return void
     */
    public function testSetAdFTypeAdresse(): void {

        $obj = new Chantiers();

        $obj->setAdFTypeAdresse("adFTypeAdresse");
        $this->assertEquals("adFTypeAdresse", $obj->getAdFTypeAdresse());
    }

    /**
     * Test setAdFbtq()
     *
     * @return void
     */
    public function testSetAdFbtq(): void {

        $obj = new Chantiers();

        $obj->setAdFbtq("adFbtq");
        $this->assertEquals("adFbtq", $obj->getAdFbtq());
    }

    /**
     * Test setAdresse()
     *
     * @return void
     */
    public function testSetAdresse(): void {

        $obj = new Chantiers();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Chantiers();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBtqLivraison()
     *
     * @return void
     */
    public function testSetBtqLivraison(): void {

        $obj = new Chantiers();

        $obj->setBtqLivraison("btqLivraison");
        $this->assertEquals("btqLivraison", $obj->getBtqLivraison());
    }

    /**
     * Test setBudgetCommande()
     *
     * @return void
     */
    public function testSetBudgetCommande(): void {

        $obj = new Chantiers();

        $obj->setBudgetCommande(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Chantiers();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setBureauDistributeurLivraison()
     *
     * @return void
     */
    public function testSetBureauDistributeurLivraison(): void {

        $obj = new Chantiers();

        $obj->setBureauDistributeurLivraison("bureauDistributeurLivraison");
        $this->assertEquals("bureauDistributeurLivraison", $obj->getBureauDistributeurLivraison());
    }

    /**
     * Test setChantierPonctuel()
     *
     * @return void
     */
    public function testSetChantierPonctuel(): void {

        $obj = new Chantiers();

        $obj->setChantierPonctuel(true);
        $this->assertTrue($obj->getChantierPonctuel());
    }

    /**
     * Test setChefEquipe()
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new Chantiers();

        $obj->setChefEquipe("chefEquipe");
        $this->assertEquals("chefEquipe", $obj->getChefEquipe());
    }

    /**
     * Test setCleAlpha()
     *
     * @return void
     */
    public function testSetCleAlpha(): void {

        $obj = new Chantiers();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Chantiers();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeAgence()
     *
     * @return void
     */
    public function testSetCodeAgence(): void {

        $obj = new Chantiers();

        $obj->setCodeAgence("codeAgence");
        $this->assertEquals("codeAgence", $obj->getCodeAgence());
    }

    /**
     * Test setCodeAnalytique()
     *
     * @return void
     */
    public function testSetCodeAnalytique(): void {

        $obj = new Chantiers();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new Chantiers();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Chantiers();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCommercial()
     *
     * @return void
     */
    public function testSetCodeCommercial(): void {

        $obj = new Chantiers();

        $obj->setCodeCommercial("codeCommercial");
        $this->assertEquals("codeCommercial", $obj->getCodeCommercial());
    }

    /**
     * Test setCodeEmpInspecteur()
     *
     * @return void
     */
    public function testSetCodeEmpInspecteur(): void {

        $obj = new Chantiers();

        $obj->setCodeEmpInspecteur("codeEmpInspecteur");
        $this->assertEquals("codeEmpInspecteur", $obj->getCodeEmpInspecteur());
    }

    /**
     * Test setCodeFormule()
     *
     * @return void
     */
    public function testSetCodeFormule(): void {

        $obj = new Chantiers();

        $obj->setCodeFormule("codeFormule");
        $this->assertEquals("codeFormule", $obj->getCodeFormule());
    }

    /**
     * Test setCodeLivraison()
     *
     * @return void
     */
    public function testSetCodeLivraison(): void {

        $obj = new Chantiers();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Test setCodePays()
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new Chantiers();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Chantiers();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCodePostalLivraison()
     *
     * @return void
     */
    public function testSetCodePostalLivraison(): void {

        $obj = new Chantiers();

        $obj->setCodePostalLivraison("codePostalLivraison");
        $this->assertEquals("codePostalLivraison", $obj->getCodePostalLivraison());
    }

    /**
     * Test setCodeRegMarge()
     *
     * @return void
     */
    public function testSetCodeRegMarge(): void {

        $obj = new Chantiers();

        $obj->setCodeRegMarge("codeRegMarge");
        $this->assertEquals("codeRegMarge", $obj->getCodeRegMarge());
    }

    /**
     * Test setCodeRevision()
     *
     * @return void
     */
    public function testSetCodeRevision(): void {

        $obj = new Chantiers();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Chantiers();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Chantiers();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Test setCollectif()
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Chantiers();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Test setCommandeIsolee()
     *
     * @return void
     */
    public function testSetCommandeIsolee(): void {

        $obj = new Chantiers();

        $obj->setCommandeIsolee(true);
        $this->assertTrue($obj->getCommandeIsolee());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Chantiers();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setComplementLivraison()
     *
     * @return void
     */
    public function testSetComplementLivraison(): void {

        $obj = new Chantiers();

        $obj->setComplementLivraison("complementLivraison");
        $this->assertEquals("complementLivraison", $obj->getComplementLivraison());
    }

    /**
     * Test setDateCreat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Test setDateDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Test setDateEcheanceContrat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEcheanceContrat(): void {

        // Set a Date/time mock.
        $dateEcheanceContrat = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateEcheanceContrat($dateEcheanceContrat);
        $this->assertSame($dateEcheanceContrat, $obj->getDateEcheanceContrat());
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

        $obj = new Chantiers();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Test setDateModif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setDateRevision()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Test setDescriptif()
     *
     * @return void
     */
    public function testSetDescriptif(): void {

        $obj = new Chantiers();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Test setDtAvantDernPrepa()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtAvantDernPrepa(): void {

        // Set a Date/time mock.
        $dtAvantDernPrepa = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtAvantDernPrepa($dtAvantDernPrepa);
        $this->assertSame($dtAvantDernPrepa, $obj->getDtAvantDernPrepa());
    }

    /**
     * Test setDtDernPrepa()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDernPrepa(): void {

        // Set a Date/time mock.
        $dtDernPrepa = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtDernPrepa($dtDernPrepa);
        $this->assertSame($dtDernPrepa, $obj->getDtDernPrepa());
    }

    /**
     * Test setDtValiditeFactDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDeb(): void {

        // Set a Date/time mock.
        $dtValiditeFactDeb = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactDeb($dtValiditeFactDeb);
        $this->assertSame($dtValiditeFactDeb, $obj->getDtValiditeFactDeb());
    }

    /**
     * Test setDtValiditeFactDebDebMois()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDebDebMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactDebDebMois = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactDebDebMois($dtValiditeFactDebDebMois);
        $this->assertSame($dtValiditeFactDebDebMois, $obj->getDtValiditeFactDebDebMois());
    }

    /**
     * Test setDtValiditeFactFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFin(): void {

        // Set a Date/time mock.
        $dtValiditeFactFin = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactFin($dtValiditeFactFin);
        $this->assertSame($dtValiditeFactFin, $obj->getDtValiditeFactFin());
    }

    /**
     * Test setDtValiditeFactFinFinMois()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFinFinMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactFinFinMois = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactFinFinMois($dtValiditeFactFinFinMois);
        $this->assertSame($dtValiditeFactFinFinMois, $obj->getDtValiditeFactFinFinMois());
    }

    /**
     * Test setEcheanceAnnuelle()
     *
     * @return void
     */
    public function testSetEcheanceAnnuelle(): void {

        $obj = new Chantiers();

        $obj->setEcheanceAnnuelle(true);
        $this->assertTrue($obj->getEcheanceAnnuelle());
    }

    /**
     * Test setFactNegoceIsolee()
     *
     * @return void
     */
    public function testSetFactNegoceIsolee(): void {

        $obj = new Chantiers();

        $obj->setFactNegoceIsolee(true);
        $this->assertTrue($obj->getFactNegoceIsolee());
    }

    /**
     * Test setFactureIsolee()
     *
     * @return void
     */
    public function testSetFactureIsolee(): void {

        $obj = new Chantiers();

        $obj->setFactureIsolee(true);
        $this->assertTrue($obj->getFactureIsolee());
    }

    /**
     * Test setJourFact()
     *
     * @return void
     */
    public function testSetJourFact(): void {

        $obj = new Chantiers();

        $obj->setJourFact("jourFact");
        $this->assertEquals("jourFact", $obj->getJourFact());
    }

    /**
     * Test setLatitude()
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new Chantiers();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Test setLoiChatelSurFacture()
     *
     * @return void
     */
    public function testSetLoiChatelSurFacture(): void {

        $obj = new Chantiers();

        $obj->setLoiChatelSurFacture(true);
        $this->assertTrue($obj->getLoiChatelSurFacture());
    }

    /**
     * Test setLongitude()
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new Chantiers();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Test setMajStockByDa()
     *
     * @return void
     */
    public function testSetMajStockByDa(): void {

        $obj = new Chantiers();

        $obj->setMajStockByDa(true);
        $this->assertTrue($obj->getMajStockByDa());
    }

    /**
     * Test setNbControlesPrevus()
     *
     * @return void
     */
    public function testSetNbControlesPrevus(): void {

        $obj = new Chantiers();

        $obj->setNbControlesPrevus(10);
        $this->assertEquals(10, $obj->getNbControlesPrevus());
    }

    /**
     * Test setNbMoisPreavis()
     *
     * @return void
     */
    public function testSetNbMoisPreavis(): void {

        $obj = new Chantiers();

        $obj->setNbMoisPreavis("nbMoisPreavis");
        $this->assertEquals("nbMoisPreavis", $obj->getNbMoisPreavis());
    }

    /**
     * Test setNomAdresse()
     *
     * @return void
     */
    public function testSetNomAdresse(): void {

        $obj = new Chantiers();

        $obj->setNomAdresse("nomAdresse");
        $this->assertEquals("nomAdresse", $obj->getNomAdresse());
    }

    /**
     * Test setNomChantier()
     *
     * @return void
     */
    public function testSetNomChantier(): void {

        $obj = new Chantiers();

        $obj->setNomChantier("nomChantier");
        $this->assertEquals("nomChantier", $obj->getNomChantier());
    }

    /**
     * Test setNomLivraison()
     *
     * @return void
     */
    public function testSetNomLivraison(): void {

        $obj = new Chantiers();

        $obj->setNomLivraison("nomLivraison");
        $this->assertEquals("nomLivraison", $obj->getNomLivraison());
    }

    /**
     * Test setNomResponsable()
     *
     * @return void
     */
    public function testSetNomResponsable(): void {

        $obj = new Chantiers();

        $obj->setNomResponsable("nomResponsable");
        $this->assertEquals("nomResponsable", $obj->getNomResponsable());
    }

    /**
     * Test setNomSuite()
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new Chantiers();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Test setNomSuiteLivraison()
     *
     * @return void
     */
    public function testSetNomSuiteLivraison(): void {

        $obj = new Chantiers();

        $obj->setNomSuiteLivraison("nomSuiteLivraison");
        $this->assertEquals("nomSuiteLivraison", $obj->getNomSuiteLivraison());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Chantiers();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNomVoieLivraison()
     *
     * @return void
     */
    public function testSetNomVoieLivraison(): void {

        $obj = new Chantiers();

        $obj->setNomVoieLivraison("nomVoieLivraison");
        $this->assertEquals("nomVoieLivraison", $obj->getNomVoieLivraison());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Chantiers();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setNumVoieLivraison()
     *
     * @return void
     */
    public function testSetNumVoieLivraison(): void {

        $obj = new Chantiers();

        $obj->setNumVoieLivraison("numVoieLivraison");
        $this->assertEquals("numVoieLivraison", $obj->getNumVoieLivraison());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Chantiers();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setPlanFact()
     *
     * @return void
     */
    public function testSetPlanFact(): void {

        $obj = new Chantiers();

        $obj->setPlanFact(true);
        $this->assertTrue($obj->getPlanFact());
    }

    /**
     * Test setPourcConsoProduit()
     *
     * @return void
     */
    public function testSetPourcConsoProduit(): void {

        $obj = new Chantiers();

        $obj->setPourcConsoProduit(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcConsoProduit());
    }

    /**
     * Test setPourcMargePrevis()
     *
     * @return void
     */
    public function testSetPourcMargePrevis(): void {

        $obj = new Chantiers();

        $obj->setPourcMargePrevis(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMargePrevis());
    }

    /**
     * Test setReferenceFacture()
     *
     * @return void
     */
    public function testSetReferenceFacture(): void {

        $obj = new Chantiers();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Test setReferenceFacture2()
     *
     * @return void
     */
    public function testSetReferenceFacture2(): void {

        $obj = new Chantiers();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

    /**
     * Test setRuptDateLivraison()
     *
     * @return void
     */
    public function testSetRuptDateLivraison(): void {

        $obj = new Chantiers();

        $obj->setRuptDateLivraison(true);
        $this->assertTrue($obj->getRuptDateLivraison());
    }

    /**
     * Test setTelephone()
     *
     * @return void
     */
    public function testSetTelephone(): void {

        $obj = new Chantiers();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Chantiers();

        $this->assertNull($obj->getAdFbtq());
        $this->assertNull($obj->getAdFBureauDistributeur());
        $this->assertNull($obj->getAdFCivilite());
        $this->assertNull($obj->getAdFCodePays());
        $this->assertNull($obj->getAdFCodePostal());
        $this->assertNull($obj->getAdFComplement());
        $this->assertNull($obj->getAdFNomClient());
        $this->assertNull($obj->getAdFNomSuite());
        $this->assertNull($obj->getAdFNomSuite2());
        $this->assertNull($obj->getAdFNomSuite3());
        $this->assertNull($obj->getAdFNomVoie());
        $this->assertNull($obj->getAdFNumVoie());
        $this->assertNull($obj->getAdFTypeAdresse());
        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtqLivraison());
        $this->assertNull($obj->getBudgetCommande());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeurLivraison());
        $this->assertNull($obj->getChantierPonctuel());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAgence());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodeEmpInspecteur());
        $this->assertNull($obj->getCodeFormule());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostalLivraison());
        $this->assertNull($obj->getCodeRegMarge());
        $this->assertNull($obj->getCodeRevision());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getComplementLivraison());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateEcheanceContrat());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDtAvantDernPrepa());
        $this->assertNull($obj->getDtDernPrepa());
        $this->assertNull($obj->getDtValiditeFactDeb());
        $this->assertNull($obj->getDtValiditeFactDebDebMois());
        $this->assertNull($obj->getDtValiditeFactFin());
        $this->assertNull($obj->getDtValiditeFactFinFinMois());
        $this->assertNull($obj->getEcheanceAnnuelle());
        $this->assertNull($obj->getFactNegoceIsolee());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getJourFact());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLoiChatelSurFacture());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getNbControlesPrevus());
        $this->assertNull($obj->getNbMoisPreavis());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomChantier());
        $this->assertNull($obj->getNomLivraison());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuiteLivraison());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoieLivraison());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoieLivraison());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPlanFact());
        $this->assertNull($obj->getPourcConsoProduit());
        $this->assertNull($obj->getPourcMargePrevis());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
        $this->assertNull($obj->getRuptDateLivraison());
        $this->assertNull($obj->getTelephone());
    }
}
