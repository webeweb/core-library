<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Employes;

/**
 * Employes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Employes();

        $this->assertNull($obj->getATransfererEnP());
        $this->assertNull($obj->getAdministratif());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePaysNaissance());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCommercial());
        $this->assertNull($obj->getCommuneNaissance());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getControleur());
        $this->assertNull($obj->getDateAncien());
        $this->assertNull($obj->getDateEntree1());
        $this->assertNull($obj->getDateEntree2());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateSortie1());
        $this->assertNull($obj->getDateSortie2());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDernNumPrime());
        $this->assertNull($obj->getDimType2());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getGestionMajDim());
        $this->assertNull($obj->getGestionMajJf());
        $this->assertNull($obj->getGestionMajNuit());
        $this->assertNull($obj->getHNuitType2());
        $this->assertNull($obj->getHandicape());
        $this->assertNull($obj->getHotellerie());
        $this->assertNull($obj->getInspecteur());
        $this->assertNull($obj->getLivreur());
        $this->assertNull($obj->getMensualisationTache());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEnfants());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroInsee());
        $this->assertNull($obj->getNumeroPjPass());
        $this->assertNull($obj->getPeriodePointageCloturee());
        $this->assertNull($obj->getPolyvalent());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPrime());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTempsPasse());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTravailleJf());
        $this->assertNull($obj->getUniqId());
    }

    /**
     * Tests the setATransfererEnP() method.
     *
     * @return void
     */
    public function testSetATransfererEnP() {

        $obj = new Employes();

        $obj->setATransfererEnP(true);
        $this->assertEquals(true, $obj->getATransfererEnP());
    }

    /**
     * Tests the setAdministratif() method.
     *
     * @return void
     */
    public function testSetAdministratif() {

        $obj = new Employes();

        $obj->setAdministratif(true);
        $this->assertEquals(true, $obj->getAdministratif());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq() {

        $obj = new Employes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new Employes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setChefEquipe() method.
     *
     * @return void
     */
    public function testSetChefEquipe() {

        $obj = new Employes();

        $obj->setChefEquipe(true);
        $this->assertEquals(true, $obj->getChefEquipe());
    }

    /**
     * Tests the setCleDeux() method.
     *
     * @return void
     */
    public function testSetCleDeux() {

        $obj = new Employes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new Employes();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePaysNaissance() method.
     *
     * @return void
     */
    public function testSetCodePaysNaissance() {

        $obj = new Employes();

        $obj->setCodePaysNaissance("codePaysNaissance");
        $this->assertEquals("codePaysNaissance", $obj->getCodePaysNaissance());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new Employes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCommercial() method.
     *
     * @return void
     */
    public function testSetCommercial() {

        $obj = new Employes();

        $obj->setCommercial(true);
        $this->assertEquals(true, $obj->getCommercial());
    }

    /**
     * Tests the setCommuneNaissance() method.
     *
     * @return void
     */
    public function testSetCommuneNaissance() {

        $obj = new Employes();

        $obj->setCommuneNaissance("communeNaissance");
        $this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new Employes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setControleur() method.
     *
     * @return void
     */
    public function testSetControleur() {

        $obj = new Employes();

        $obj->setControleur(true);
        $this->assertEquals(true, $obj->getControleur());
    }

    /**
     * Tests the setDateAncien() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAncien() {

        // Set a Date/time mock.
        $dateAncien = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateAncien($dateAncien);
        $this->assertSame($dateAncien, $obj->getDateAncien());
    }

    /**
     * Tests the setDateEntree1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree1() {

        // Set a Date/time mock.
        $dateEntree1 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEntree1($dateEntree1);
        $this->assertSame($dateEntree1, $obj->getDateEntree1());
    }

    /**
     * Tests the setDateEntree2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree2() {

        // Set a Date/time mock.
        $dateEntree2 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEntree2($dateEntree2);
        $this->assertSame($dateEntree2, $obj->getDateEntree2());
    }

    /**
     * Tests the setDateNaissance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance() {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests the setDateSortie1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie1() {

        // Set a Date/time mock.
        $dateSortie1 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateSortie1($dateSortie1);
        $this->assertSame($dateSortie1, $obj->getDateSortie1());
    }

    /**
     * Tests the setDateSortie2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie2() {

        // Set a Date/time mock.
        $dateSortie2 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateSortie2($dateSortie2);
        $this->assertSame($dateSortie2, $obj->getDateSortie2());
    }

    /**
     * Tests the setDeptNaissance() method.
     *
     * @return void
     */
    public function testSetDeptNaissance() {

        $obj = new Employes();

        $obj->setDeptNaissance("deptNaissance");
        $this->assertEquals("deptNaissance", $obj->getDeptNaissance());
    }

    /**
     * Tests the setDernNumPrime() method.
     *
     * @return void
     */
    public function testSetDernNumPrime() {

        $obj = new Employes();

        $obj->setDernNumPrime(10);
        $this->assertEquals(10, $obj->getDernNumPrime());
    }

    /**
     * Tests the setDimType2() method.
     *
     * @return void
     */
    public function testSetDimType2() {

        $obj = new Employes();

        $obj->setDimType2(true);
        $this->assertEquals(true, $obj->getDimType2());
    }

    /**
     * Tests the setFictif() method.
     *
     * @return void
     */
    public function testSetFictif() {

        $obj = new Employes();

        $obj->setFictif(true);
        $this->assertEquals(true, $obj->getFictif());
    }

    /**
     * Tests the setGestionMajDim() method.
     *
     * @return void
     */
    public function testSetGestionMajDim() {

        $obj = new Employes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Tests the setGestionMajJf() method.
     *
     * @return void
     */
    public function testSetGestionMajJf() {

        $obj = new Employes();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Tests the setGestionMajNuit() method.
     *
     * @return void
     */
    public function testSetGestionMajNuit() {

        $obj = new Employes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Tests the setHNuitType2() method.
     *
     * @return void
     */
    public function testSetHNuitType2() {

        $obj = new Employes();

        $obj->setHNuitType2(true);
        $this->assertEquals(true, $obj->getHNuitType2());
    }

    /**
     * Tests the setHandicape() method.
     *
     * @return void
     */
    public function testSetHandicape() {

        $obj = new Employes();

        $obj->setHandicape(true);
        $this->assertEquals(true, $obj->getHandicape());
    }

    /**
     * Tests the setHotellerie() method.
     *
     * @return void
     */
    public function testSetHotellerie() {

        $obj = new Employes();

        $obj->setHotellerie(true);
        $this->assertEquals(true, $obj->getHotellerie());
    }

    /**
     * Tests the setInspecteur() method.
     *
     * @return void
     */
    public function testSetInspecteur() {

        $obj = new Employes();

        $obj->setInspecteur(true);
        $this->assertEquals(true, $obj->getInspecteur());
    }

    /**
     * Tests the setLivreur() method.
     *
     * @return void
     */
    public function testSetLivreur() {

        $obj = new Employes();

        $obj->setLivreur(true);
        $this->assertEquals(true, $obj->getLivreur());
    }

    /**
     * Tests the setMensualisationTache() method.
     *
     * @return void
     */
    public function testSetMensualisationTache() {

        $obj = new Employes();

        $obj->setMensualisationTache("mensualisationTache");
        $this->assertEquals("mensualisationTache", $obj->getMensualisationTache());
    }

    /**
     * Tests the setNationalite() method.
     *
     * @return void
     */
    public function testSetNationalite() {

        $obj = new Employes();

        $obj->setNationalite("nationalite");
        $this->assertEquals("nationalite", $obj->getNationalite());
    }

    /**
     * Tests the setNbHeureMois() method.
     *
     * @return void
     */
    public function testSetNbHeureMois() {

        $obj = new Employes();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Tests the setNomMarital() method.
     *
     * @return void
     */
    public function testSetNomMarital() {

        $obj = new Employes();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests the setNomNaissance() method.
     *
     * @return void
     */
    public function testSetNomNaissance() {

        $obj = new Employes();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new Employes();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new Employes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNombreEnfants() method.
     *
     * @return void
     */
    public function testSetNombreEnfants() {

        $obj = new Employes();

        $obj->setNombreEnfants("nombreEnfants");
        $this->assertEquals("nombreEnfants", $obj->getNombreEnfants());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new Employes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumero() method.
     *
     * @return void
     */
    public function testSetNumero() {

        $obj = new Employes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests the setNumeroInsee() method.
     *
     * @return void
     */
    public function testSetNumeroInsee() {

        $obj = new Employes();

        $obj->setNumeroInsee("numeroInsee");
        $this->assertEquals("numeroInsee", $obj->getNumeroInsee());
    }

    /**
     * Tests the setNumeroPjPass() method.
     *
     * @return void
     */
    public function testSetNumeroPjPass() {

        $obj = new Employes();

        $obj->setNumeroPjPass(10);
        $this->assertEquals(10, $obj->getNumeroPjPass());
    }

    /**
     * Tests the setPeriodePointageCloturee() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePointageCloturee() {

        // Set a Date/time mock.
        $periodePointageCloturee = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setPeriodePointageCloturee($periodePointageCloturee);
        $this->assertSame($periodePointageCloturee, $obj->getPeriodePointageCloturee());
    }

    /**
     * Tests the setPolyvalent() method.
     *
     * @return void
     */
    public function testSetPolyvalent() {

        $obj = new Employes();

        $obj->setPolyvalent(true);
        $this->assertEquals(true, $obj->getPolyvalent());
    }

    /**
     * Tests the setPrenom() method.
     *
     * @return void
     */
    public function testSetPrenom() {

        $obj = new Employes();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests the setPrime() method.
     *
     * @return void
     */
    public function testSetPrime() {

        $obj = new Employes();

        $obj->setPrime(true);
        $this->assertEquals(true, $obj->getPrime());
    }

    /**
     * Tests the setQualification() method.
     *
     * @return void
     */
    public function testSetQualification() {

        $obj = new Employes();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests the setSituationFam() method.
     *
     * @return void
     */
    public function testSetSituationFam() {

        $obj = new Employes();

        $obj->setSituationFam("situationFam");
        $this->assertEquals("situationFam", $obj->getSituationFam());
    }

    /**
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1() {

        $obj = new Employes();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2() {

        $obj = new Employes();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests the setTempsPasse() method.
     *
     * @return void
     */
    public function testSetTempsPasse() {

        $obj = new Employes();

        $obj->setTempsPasse(true);
        $this->assertEquals(true, $obj->getTempsPasse());
    }

    /**
     * Tests the setTitre() method.
     *
     * @return void
     */
    public function testSetTitre() {

        $obj = new Employes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests the setTravailleJf() method.
     *
     * @return void
     */
    public function testSetTravailleJf() {

        $obj = new Employes();

        $obj->setTravailleJf(true);
        $this->assertEquals(true, $obj->getTravailleJf());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new Employes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }
}
