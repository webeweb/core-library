<?php

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
use WBW\Library\Quadratus\Model\Proprete\Employes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Employes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class EmployesTest extends AbstractTestCase {

    /**
     * Test setATransfererEnP()
     *
     * @return void
     */
    public function testSetATransfererEnP(): void {

        $obj = new Employes();

        $obj->setATransfererEnP(true);
        $this->assertTrue($obj->getATransfererEnP());
    }

    /**
     * Test setAdministratif()
     *
     * @return void
     */
    public function testSetAdministratif(): void {

        $obj = new Employes();

        $obj->setAdministratif(true);
        $this->assertTrue($obj->getAdministratif());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Employes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Employes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setChefEquipe()
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new Employes();

        $obj->setChefEquipe(true);
        $this->assertTrue($obj->getChefEquipe());
    }

    /**
     * Test setCleDeux()
     *
     * @return void
     */
    public function testSetCleDeux(): void {

        $obj = new Employes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Test setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Employes();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Test setCodePaysNaissance()
     *
     * @return void
     */
    public function testSetCodePaysNaissance(): void {

        $obj = new Employes();

        $obj->setCodePaysNaissance("codePaysNaissance");
        $this->assertEquals("codePaysNaissance", $obj->getCodePaysNaissance());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Employes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCommercial()
     *
     * @return void
     */
    public function testSetCommercial(): void {

        $obj = new Employes();

        $obj->setCommercial(true);
        $this->assertTrue($obj->getCommercial());
    }

    /**
     * Test setCommuneNaissance()
     *
     * @return void
     */
    public function testSetCommuneNaissance(): void {

        $obj = new Employes();

        $obj->setCommuneNaissance("communeNaissance");
        $this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Employes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setControleur()
     *
     * @return void
     */
    public function testSetControleur(): void {

        $obj = new Employes();

        $obj->setControleur(true);
        $this->assertTrue($obj->getControleur());
    }

    /**
     * Test setDateAncien()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncien(): void {

        // Set a Date/time mock.
        $dateAncien = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateAncien($dateAncien);
        $this->assertSame($dateAncien, $obj->getDateAncien());
    }

    /**
     * Test setDateEntree1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree1(): void {

        // Set a Date/time mock.
        $dateEntree1 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEntree1($dateEntree1);
        $this->assertSame($dateEntree1, $obj->getDateEntree1());
    }

    /**
     * Test setDateEntree2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree2(): void {

        // Set a Date/time mock.
        $dateEntree2 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateEntree2($dateEntree2);
        $this->assertSame($dateEntree2, $obj->getDateEntree2());
    }

    /**
     * Test setDateNaissance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Test setDateSortie1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie1(): void {

        // Set a Date/time mock.
        $dateSortie1 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateSortie1($dateSortie1);
        $this->assertSame($dateSortie1, $obj->getDateSortie1());
    }

    /**
     * Test setDateSortie2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie2(): void {

        // Set a Date/time mock.
        $dateSortie2 = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setDateSortie2($dateSortie2);
        $this->assertSame($dateSortie2, $obj->getDateSortie2());
    }

    /**
     * Test setDeptNaissance()
     *
     * @return void
     */
    public function testSetDeptNaissance(): void {

        $obj = new Employes();

        $obj->setDeptNaissance("deptNaissance");
        $this->assertEquals("deptNaissance", $obj->getDeptNaissance());
    }

    /**
     * Test setDernNumPrime()
     *
     * @return void
     */
    public function testSetDernNumPrime(): void {

        $obj = new Employes();

        $obj->setDernNumPrime(10);
        $this->assertEquals(10, $obj->getDernNumPrime());
    }

    /**
     * Test setDimType2()
     *
     * @return void
     */
    public function testSetDimType2(): void {

        $obj = new Employes();

        $obj->setDimType2(true);
        $this->assertTrue($obj->getDimType2());
    }

    /**
     * Test setFictif()
     *
     * @return void
     */
    public function testSetFictif(): void {

        $obj = new Employes();

        $obj->setFictif(true);
        $this->assertTrue($obj->getFictif());
    }

    /**
     * Test setGestionMajDim()
     *
     * @return void
     */
    public function testSetGestionMajDim(): void {

        $obj = new Employes();

        $obj->setGestionMajDim("gestionMajDim");
        $this->assertEquals("gestionMajDim", $obj->getGestionMajDim());
    }

    /**
     * Test setGestionMajJf()
     *
     * @return void
     */
    public function testSetGestionMajJf(): void {

        $obj = new Employes();

        $obj->setGestionMajJf("gestionMajJf");
        $this->assertEquals("gestionMajJf", $obj->getGestionMajJf());
    }

    /**
     * Test setGestionMajNuit()
     *
     * @return void
     */
    public function testSetGestionMajNuit(): void {

        $obj = new Employes();

        $obj->setGestionMajNuit("gestionMajNuit");
        $this->assertEquals("gestionMajNuit", $obj->getGestionMajNuit());
    }

    /**
     * Test setHNuitType2()
     *
     * @return void
     */
    public function testSetHNuitType2(): void {

        $obj = new Employes();

        $obj->setHNuitType2(true);
        $this->assertTrue($obj->getHNuitType2());
    }

    /**
     * Test setHandicape()
     *
     * @return void
     */
    public function testSetHandicape(): void {

        $obj = new Employes();

        $obj->setHandicape(true);
        $this->assertTrue($obj->getHandicape());
    }

    /**
     * Test setHotellerie()
     *
     * @return void
     */
    public function testSetHotellerie(): void {

        $obj = new Employes();

        $obj->setHotellerie(true);
        $this->assertTrue($obj->getHotellerie());
    }

    /**
     * Test setInspecteur()
     *
     * @return void
     */
    public function testSetInspecteur(): void {

        $obj = new Employes();

        $obj->setInspecteur(true);
        $this->assertTrue($obj->getInspecteur());
    }

    /**
     * Test setLivreur()
     *
     * @return void
     */
    public function testSetLivreur(): void {

        $obj = new Employes();

        $obj->setLivreur(true);
        $this->assertTrue($obj->getLivreur());
    }

    /**
     * Test setMensualisationTache()
     *
     * @return void
     */
    public function testSetMensualisationTache(): void {

        $obj = new Employes();

        $obj->setMensualisationTache("mensualisationTache");
        $this->assertEquals("mensualisationTache", $obj->getMensualisationTache());
    }

    /**
     * Test setNationalite()
     *
     * @return void
     */
    public function testSetNationalite(): void {

        $obj = new Employes();

        $obj->setNationalite("nationalite");
        $this->assertEquals("nationalite", $obj->getNationalite());
    }

    /**
     * Test setNbHeureMois()
     *
     * @return void
     */
    public function testSetNbHeureMois(): void {

        $obj = new Employes();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Test setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new Employes();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Test setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new Employes();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Employes();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Employes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNombreEnfants()
     *
     * @return void
     */
    public function testSetNombreEnfants(): void {

        $obj = new Employes();

        $obj->setNombreEnfants("nombreEnfants");
        $this->assertEquals("nombreEnfants", $obj->getNombreEnfants());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Employes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Employes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroInsee()
     *
     * @return void
     */
    public function testSetNumeroInsee(): void {

        $obj = new Employes();

        $obj->setNumeroInsee("numeroInsee");
        $this->assertEquals("numeroInsee", $obj->getNumeroInsee());
    }

    /**
     * Test setNumeroPjPass()
     *
     * @return void
     */
    public function testSetNumeroPjPass(): void {

        $obj = new Employes();

        $obj->setNumeroPjPass(10);
        $this->assertEquals(10, $obj->getNumeroPjPass());
    }

    /**
     * Test setPeriodePointageCloturee()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodePointageCloturee(): void {

        // Set a Date/time mock.
        $periodePointageCloturee = new DateTime("2018-09-10");

        $obj = new Employes();

        $obj->setPeriodePointageCloturee($periodePointageCloturee);
        $this->assertSame($periodePointageCloturee, $obj->getPeriodePointageCloturee());
    }

    /**
     * Test setPolyvalent()
     *
     * @return void
     */
    public function testSetPolyvalent(): void {

        $obj = new Employes();

        $obj->setPolyvalent(true);
        $this->assertTrue($obj->getPolyvalent());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new Employes();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setPrime()
     *
     * @return void
     */
    public function testSetPrime(): void {

        $obj = new Employes();

        $obj->setPrime(true);
        $this->assertTrue($obj->getPrime());
    }

    /**
     * Test setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new Employes();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Test setSituationFam()
     *
     * @return void
     */
    public function testSetSituationFam(): void {

        $obj = new Employes();

        $obj->setSituationFam("situationFam");
        $this->assertEquals("situationFam", $obj->getSituationFam());
    }

    /**
     * Test setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new Employes();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Test setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new Employes();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Test setTempsPasse()
     *
     * @return void
     */
    public function testSetTempsPasse(): void {

        $obj = new Employes();

        $obj->setTempsPasse(true);
        $this->assertTrue($obj->getTempsPasse());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new Employes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test setTravailleJf()
     *
     * @return void
     */
    public function testSetTravailleJf(): void {

        $obj = new Employes();

        $obj->setTravailleJf(true);
        $this->assertTrue($obj->getTravailleJf());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new Employes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
