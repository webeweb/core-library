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
use WBW\Library\Quadratus\Model\QPaie\ListeEmployes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Liste employes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ListeEmployesTest extends AbstractTestCase {

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new ListeEmployes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new ListeEmployes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCarteSejourDelivreeLe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteSejourDelivreeLe(): void {

        // Set a Date/time mock.
        $carteSejourDelivreeLe = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setCarteSejourDelivreeLe($carteSejourDelivreeLe);
        $this->assertSame($carteSejourDelivreeLe, $obj->getCarteSejourDelivreeLe());
    }

    /**
     * Tests setCarteSejourExpireLe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteSejourExpireLe(): void {

        // Set a Date/time mock.
        $carteSejourExpireLe = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setCarteSejourExpireLe($carteSejourExpireLe);
        $this->assertSame($carteSejourExpireLe, $obj->getCarteSejourExpireLe());
    }

    /**
     * Tests setCarteTravailDelivreeLe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteTravailDelivreeLe(): void {

        // Set a Date/time mock.
        $carteTravailDelivreeLe = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setCarteTravailDelivreeLe($carteTravailDelivreeLe);
        $this->assertSame($carteTravailDelivreeLe, $obj->getCarteTravailDelivreeLe());
    }

    /**
     * Tests setCarteTravailExpireLe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetCarteTravailExpireLe(): void {

        // Set a Date/time mock.
        $carteTravailExpireLe = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setCarteTravailExpireLe($carteTravailExpireLe);
        $this->assertSame($carteTravailExpireLe, $obj->getCarteTravailExpireLe());
    }

    /**
     * Tests setCategoriePermis()
     *
     * @return void
     */
    public function testSetCategoriePermis(): void {

        $obj = new ListeEmployes();

        $obj->setCategoriePermis("categoriePermis");
        $this->assertEquals("categoriePermis", $obj->getCategoriePermis());
    }

    /**
     * Tests setCddcdi()
     *
     * @return void
     */
    public function testSetCddcdi(): void {

        $obj = new ListeEmployes();

        $obj->setCddcdi(true);
        $this->assertEquals(true, $obj->getCddcdi());
    }

    /**
     * Tests setCleDeux()
     *
     * @return void
     */
    public function testSetCleDeux(): void {

        $obj = new ListeEmployes();

        $obj->setCleDeux("cleDeux");
        $this->assertEquals("cleDeux", $obj->getCleDeux());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new ListeEmployes();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeMotifRupture()
     *
     * @return void
     */
    public function testSetCodeMotifRupture(): void {

        $obj = new ListeEmployes();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new ListeEmployes();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new ListeEmployes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCodeTypeSal()
     *
     * @return void
     */
    public function testSetCodeTypeSal(): void {

        $obj = new ListeEmployes();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }

    /**
     * Tests setCommuneNaissance()
     *
     * @return void
     */
    public function testSetCommuneNaissance(): void {

        $obj = new ListeEmployes();

        $obj->setCommuneNaissance("communeNaissance");
        $this->assertEquals("communeNaissance", $obj->getCommuneNaissance());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new ListeEmployes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setCum30Ss()
     *
     * @return void
     */
    public function testSetCum30Ss(): void {

        $obj = new ListeEmployes();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Tests setCumBaseGmp()
     *
     * @return void
     */
    public function testSetCumBaseGmp(): void {

        $obj = new ListeEmployes();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Tests setCumBaseSs()
     *
     * @return void
     */
    public function testSetCumBaseSs(): void {

        $obj = new ListeEmployes();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Tests setCumBaseTrA()
     *
     * @return void
     */
    public function testSetCumBaseTrA(): void {

        $obj = new ListeEmployes();

        $obj->setCumBaseTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrA());
    }

    /**
     * Tests setCumBaseTrB()
     *
     * @return void
     */
    public function testSetCumBaseTrB(): void {

        $obj = new ListeEmployes();

        $obj->setCumBaseTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrB());
    }

    /**
     * Tests setCumBaseTrC()
     *
     * @return void
     */
    public function testSetCumBaseTrC(): void {

        $obj = new ListeEmployes();

        $obj->setCumBaseTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrC());
    }

    /**
     * Tests setCumBrutAbatNonLim()
     *
     * @return void
     */
    public function testSetCumBrutAbatNonLim(): void {

        $obj = new ListeEmployes();

        $obj->setCumBrutAbatNonLim(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAbatNonLim());
    }

    /**
     * Tests setCumBrutAl()
     *
     * @return void
     */
    public function testSetCumBrutAl(): void {

        $obj = new ListeEmployes();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Tests setCumBrutNonAbattu()
     *
     * @return void
     */
    public function testSetCumBrutNonAbattu(): void {

        $obj = new ListeEmployes();

        $obj->setCumBrutNonAbattu(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutNonAbattu());
    }

    /**
     * Tests setCumCpDus()
     *
     * @return void
     */
    public function testSetCumCpDus(): void {

        $obj = new ListeEmployes();

        $obj->setCumCpDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus());
    }

    /**
     * Tests setCumCpDus1()
     *
     * @return void
     */
    public function testSetCumCpDus1(): void {

        $obj = new ListeEmployes();

        $obj->setCumCpDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus1());
    }

    /**
     * Tests setCumCpPris()
     *
     * @return void
     */
    public function testSetCumCpPris(): void {

        $obj = new ListeEmployes();

        $obj->setCumCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris());
    }

    /**
     * Tests setCumCpPris1()
     *
     * @return void
     */
    public function testSetCumCpPris1(): void {

        $obj = new ListeEmployes();

        $obj->setCumCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris1());
    }

    /**
     * Tests setCumHSup()
     *
     * @return void
     */
    public function testSetCumHSup(): void {

        $obj = new ListeEmployes();

        $obj->setCumHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSup());
    }

    /**
     * Tests setCumHeurePaye()
     *
     * @return void
     */
    public function testSetCumHeurePaye(): void {

        $obj = new ListeEmployes();

        $obj->setCumHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeurePaye());
    }

    /**
     * Tests setCumHeureTrav()
     *
     * @return void
     */
    public function testSetCumHeureTrav(): void {

        $obj = new ListeEmployes();

        $obj->setCumHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeureTrav());
    }

    /**
     * Tests setCumJourPaye()
     *
     * @return void
     */
    public function testSetCumJourPaye(): void {

        $obj = new ListeEmployes();

        $obj->setCumJourPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourPaye());
    }

    /**
     * Tests setCumJourTrav()
     *
     * @return void
     */
    public function testSetCumJourTrav(): void {

        $obj = new ListeEmployes();

        $obj->setCumJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourTrav());
    }

    /**
     * Tests setCumMtCpPris()
     *
     * @return void
     */
    public function testSetCumMtCpPris(): void {

        $obj = new ListeEmployes();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Tests setCumMtCpPris1()
     *
     * @return void
     */
    public function testSetCumMtCpPris1(): void {

        $obj = new ListeEmployes();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Tests setCumNetAPayer()
     *
     * @return void
     */
    public function testSetCumNetAPayer(): void {

        $obj = new ListeEmployes();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Tests setCumNetImposable()
     *
     * @return void
     */
    public function testSetCumNetImposable(): void {

        $obj = new ListeEmployes();

        $obj->setCumNetImposable(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImposable());
    }

    /**
     * Tests setCumPlafondGmp()
     *
     * @return void
     */
    public function testSetCumPlafondGmp(): void {

        $obj = new ListeEmployes();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Tests setCumPlafondSs1()
     *
     * @return void
     */
    public function testSetCumPlafondSs1(): void {

        $obj = new ListeEmployes();

        $obj->setCumPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs1());
    }

    /**
     * Tests setCumPlafondSs2()
     *
     * @return void
     */
    public function testSetCumPlafondSs2(): void {

        $obj = new ListeEmployes();

        $obj->setCumPlafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs2());
    }

    /**
     * Tests setCumProvCp()
     *
     * @return void
     */
    public function testSetCumProvCp(): void {

        $obj = new ListeEmployes();

        $obj->setCumProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp());
    }

    /**
     * Tests setCumProvCp1()
     *
     * @return void
     */
    public function testSetCumProvCp1(): void {

        $obj = new ListeEmployes();

        $obj->setCumProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp1());
    }

    /**
     * Tests setCumReposComp()
     *
     * @return void
     */
    public function testSetCumReposComp(): void {

        $obj = new ListeEmployes();

        $obj->setCumReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumReposComp());
    }

    /**
     * Tests setDateEntree()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
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

        $obj = new ListeEmployes();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setDateNaissConjoint()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissConjoint(): void {

        // Set a Date/time mock.
        $dateNaissConjoint = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDateNaissConjoint($dateNaissConjoint);
        $this->assertSame($dateNaissConjoint, $obj->getDateNaissConjoint());
    }

    /**
     * Tests setDateNaissance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNaissance(): void {

        // Set a Date/time mock.
        $dateNaissance = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests setDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests setDateVisiteMedicale()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVisiteMedicale(): void {

        // Set a Date/time mock.
        $dateVisiteMedicale = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDateVisiteMedicale($dateVisiteMedicale);
        $this->assertSame($dateVisiteMedicale, $obj->getDateVisiteMedicale());
    }

    /**
     * Tests setDateVisiteReprise()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateVisiteReprise(): void {

        // Set a Date/time mock.
        $dateVisiteReprise = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDateVisiteReprise($dateVisiteReprise);
        $this->assertSame($dateVisiteReprise, $obj->getDateVisiteReprise());
    }

    /**
     * Tests setDeptNaissance()
     *
     * @return void
     */
    public function testSetDeptNaissance(): void {

        $obj = new ListeEmployes();

        $obj->setDeptNaissance("deptNaissance");
        $this->assertEquals("deptNaissance", $obj->getDeptNaissance());
    }

    /**
     * Tests setDerniereVisiteMedicale()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDerniereVisiteMedicale(): void {

        // Set a Date/time mock.
        $derniereVisiteMedicale = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setDerniereVisiteMedicale($derniereVisiteMedicale);
        $this->assertSame($derniereVisiteMedicale, $obj->getDerniereVisiteMedicale());
    }

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new ListeEmployes();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests setFictif()
     *
     * @return void
     */
    public function testSetFictif(): void {

        $obj = new ListeEmployes();

        $obj->setFictif(true);
        $this->assertEquals(true, $obj->getFictif());
    }

    /**
     * Tests setGestionMailBulletin()
     *
     * @return void
     */
    public function testSetGestionMailBulletin(): void {

        $obj = new ListeEmployes();

        $obj->setGestionMailBulletin(true);
        $this->assertEquals(true, $obj->getGestionMailBulletin());
    }

    /**
     * Tests setHandicape()
     *
     * @return void
     */
    public function testSetHandicape(): void {

        $obj = new ListeEmployes();

        $obj->setHandicape(true);
        $this->assertEquals(true, $obj->getHandicape());
    }

    /**
     * Tests setLieuTravailConjoint()
     *
     * @return void
     */
    public function testSetLieuTravailConjoint(): void {

        $obj = new ListeEmployes();

        $obj->setLieuTravailConjoint("lieuTravailConjoint");
        $this->assertEquals("lieuTravailConjoint", $obj->getLieuTravailConjoint());
    }

    /**
     * Tests setMatricule()
     *
     * @return void
     */
    public function testSetMatricule(): void {

        $obj = new ListeEmployes();

        $obj->setMatricule("matricule");
        $this->assertEquals("matricule", $obj->getMatricule());
    }

    /**
     * Tests setNationalite()
     *
     * @return void
     */
    public function testSetNationalite(): void {

        $obj = new ListeEmployes();

        $obj->setNationalite("nationalite");
        $this->assertEquals("nationalite", $obj->getNationalite());
    }

    /**
     * Tests setNbHeureMois()
     *
     * @return void
     */
    public function testSetNbHeureMois(): void {

        $obj = new ListeEmployes();

        $obj->setNbHeureMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMois());
    }

    /**
     * Tests setNbJoursAnc()
     *
     * @return void
     */
    public function testSetNbJoursAnc(): void {

        $obj = new ListeEmployes();

        $obj->setNbJoursAnc(10);
        $this->assertEquals(10, $obj->getNbJoursAnc());
    }

    /**
     * Tests setNbJoursVisiteMed()
     *
     * @return void
     */
    public function testSetNbJoursVisiteMed(): void {

        $obj = new ListeEmployes();

        $obj->setNbJoursVisiteMed(10);
        $this->assertEquals(10, $obj->getNbJoursVisiteMed());
    }

    /**
     * Tests setNiveauConfidentialite()
     *
     * @return void
     */
    public function testSetNiveauConfidentialite(): void {

        $obj = new ListeEmployes();

        $obj->setNiveauConfidentialite("niveauConfidentialite");
        $this->assertEquals("niveauConfidentialite", $obj->getNiveauConfidentialite());
    }

    /**
     * Tests setNomConjoint()
     *
     * @return void
     */
    public function testSetNomConjoint(): void {

        $obj = new ListeEmployes();

        $obj->setNomConjoint("nomConjoint");
        $this->assertEquals("nomConjoint", $obj->getNomConjoint());
    }

    /**
     * Tests setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new ListeEmployes();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new ListeEmployes();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new ListeEmployes();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new ListeEmployes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNombreEnfants()
     *
     * @return void
     */
    public function testSetNombreEnfants(): void {

        $obj = new ListeEmployes();

        $obj->setNombreEnfants("nombreEnfants");
        $this->assertEquals("nombreEnfants", $obj->getNombreEnfants());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new ListeEmployes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new ListeEmployes();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setNumeroCarteSejour()
     *
     * @return void
     */
    public function testSetNumeroCarteSejour(): void {

        $obj = new ListeEmployes();

        $obj->setNumeroCarteSejour("numeroCarteSejour");
        $this->assertEquals("numeroCarteSejour", $obj->getNumeroCarteSejour());
    }

    /**
     * Tests setNumeroCarteTravail()
     *
     * @return void
     */
    public function testSetNumeroCarteTravail(): void {

        $obj = new ListeEmployes();

        $obj->setNumeroCarteTravail("numeroCarteTravail");
        $this->assertEquals("numeroCarteTravail", $obj->getNumeroCarteTravail());
    }

    /**
     * Tests setNumeroInsee()
     *
     * @return void
     */
    public function testSetNumeroInsee(): void {

        $obj = new ListeEmployes();

        $obj->setNumeroInsee("numeroInsee");
        $this->assertEquals("numeroInsee", $obj->getNumeroInsee());
    }

    /**
     * Tests setNumeroPermis()
     *
     * @return void
     */
    public function testSetNumeroPermis(): void {

        $obj = new ListeEmployes();

        $obj->setNumeroPermis("numeroPermis");
        $this->assertEquals("numeroPermis", $obj->getNumeroPermis());
    }

    /**
     * Tests setOrphelin()
     *
     * @return void
     */
    public function testSetOrphelin(): void {

        $obj = new ListeEmployes();

        $obj->setOrphelin(true);
        $this->assertEquals(true, $obj->getOrphelin());
    }

    /**
     * Tests setPasGestionPdp()
     *
     * @return void
     */
    public function testSetPasGestionPdp(): void {

        $obj = new ListeEmployes();

        $obj->setPasGestionPdp(true);
        $this->assertEquals(true, $obj->getPasGestionPdp());
    }

    /**
     * Tests setPension()
     *
     * @return void
     */
    public function testSetPension(): void {

        $obj = new ListeEmployes();

        $obj->setPension(true);
        $this->assertEquals(true, $obj->getPension());
    }

    /**
     * Tests setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new ListeEmployes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests setPermisDelivreLe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPermisDelivreLe(): void {

        // Set a Date/time mock.
        $permisDelivreLe = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setPermisDelivreLe($permisDelivreLe);
        $this->assertSame($permisDelivreLe, $obj->getPermisDelivreLe());
    }

    /**
     * Tests setPermisDelivrePar()
     *
     * @return void
     */
    public function testSetPermisDelivrePar(): void {

        $obj = new ListeEmployes();

        $obj->setPermisDelivrePar("permisDelivrePar");
        $this->assertEquals("permisDelivrePar", $obj->getPermisDelivrePar());
    }

    /**
     * Tests setPermisExpireLe()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPermisExpireLe(): void {

        // Set a Date/time mock.
        $permisExpireLe = new DateTime("2018-09-10");

        $obj = new ListeEmployes();

        $obj->setPermisExpireLe($permisExpireLe);
        $this->assertSame($permisExpireLe, $obj->getPermisExpireLe());
    }

    /**
     * Tests setPersonneAPrevenir()
     *
     * @return void
     */
    public function testSetPersonneAPrevenir(): void {

        $obj = new ListeEmployes();

        $obj->setPersonneAPrevenir("personneAPrevenir");
        $this->assertEquals("personneAPrevenir", $obj->getPersonneAPrevenir());
    }

    /**
     * Tests setPourcentAct()
     *
     * @return void
     */
    public function testSetPourcentAct(): void {

        $obj = new ListeEmployes();

        $obj->setPourcentAct(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAct());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new ListeEmployes();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests setPrenomConjoint()
     *
     * @return void
     */
    public function testSetPrenomConjoint(): void {

        $obj = new ListeEmployes();

        $obj->setPrenomConjoint("prenomConjoint");
        $this->assertEquals("prenomConjoint", $obj->getPrenomConjoint());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new ListeEmployes();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setSalaireBase()
     *
     * @return void
     */
    public function testSetSalaireBase(): void {

        $obj = new ListeEmployes();

        $obj->setSalaireBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBase());
    }

    /**
     * Tests setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new ListeEmployes();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new ListeEmployes();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Tests setSituationFam()
     *
     * @return void
     */
    public function testSetSituationFam(): void {

        $obj = new ListeEmployes();

        $obj->setSituationFam("situationFam");
        $this->assertEquals("situationFam", $obj->getSituationFam());
    }

    /**
     * Tests setTauxPensionCivile()
     *
     * @return void
     */
    public function testSetTauxPensionCivile(): void {

        $obj = new ListeEmployes();

        $obj->setTauxPensionCivile(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPensionCivile());
    }

    /**
     * Tests setTauxPensionMilitaire()
     *
     * @return void
     */
    public function testSetTauxPensionMilitaire(): void {

        $obj = new ListeEmployes();

        $obj->setTauxPensionMilitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPensionMilitaire());
    }

    /**
     * Tests setTds138()
     *
     * @return void
     */
    public function testSetTds138(): void {

        $obj = new ListeEmployes();

        $obj->setTds138("tds138");
        $this->assertEquals("tds138", $obj->getTds138());
    }

    /**
     * Tests setTds60()
     *
     * @return void
     */
    public function testSetTds60(): void {

        $obj = new ListeEmployes();

        $obj->setTds60(true);
        $this->assertEquals(true, $obj->getTds60());
    }

    /**
     * Tests setTds61()
     *
     * @return void
     */
    public function testSetTds61(): void {

        $obj = new ListeEmployes();

        $obj->setTds61("tds61");
        $this->assertEquals("tds61", $obj->getTds61());
    }

    /**
     * Tests setTds76()
     *
     * @return void
     */
    public function testSetTds76(): void {

        $obj = new ListeEmployes();

        $obj->setTds76("tds76");
        $this->assertEquals("tds76", $obj->getTds76());
    }

    /**
     * Tests setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new ListeEmployes();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new ListeEmployes();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests setTelConjoint()
     *
     * @return void
     */
    public function testSetTelConjoint(): void {

        $obj = new ListeEmployes();

        $obj->setTelConjoint("telConjoint");
        $this->assertEquals("telConjoint", $obj->getTelConjoint());
    }

    /**
     * Tests setTelPersAPrevenir()
     *
     * @return void
     */
    public function testSetTelPersAPrevenir(): void {

        $obj = new ListeEmployes();

        $obj->setTelPersAPrevenir("telPersAPrevenir");
        $this->assertEquals("telPersAPrevenir", $obj->getTelPersAPrevenir());
    }

    /**
     * Tests setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new ListeEmployes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests setTransfertEntree()
     *
     * @return void
     */
    public function testSetTransfertEntree(): void {

        $obj = new ListeEmployes();

        $obj->setTransfertEntree(true);
        $this->assertEquals(true, $obj->getTransfertEntree());
    }

    /**
     * Tests setTransfertSortie()
     *
     * @return void
     */
    public function testSetTransfertSortie(): void {

        $obj = new ListeEmployes();

        $obj->setTransfertSortie(true);
        $this->assertEquals(true, $obj->getTransfertSortie());
    }

    /**
     * Tests setTypeNationalite()
     *
     * @return void
     */
    public function testSetTypeNationalite(): void {

        $obj = new ListeEmployes();

        $obj->setTypeNationalite("typeNationalite");
        $this->assertEquals("typeNationalite", $obj->getTypeNationalite());
    }

    /**
     * Tests setTypePaiement()
     *
     * @return void
     */
    public function testSetTypePaiement(): void {

        $obj = new ListeEmployes();

        $obj->setTypePaiement("typePaiement");
        $this->assertEquals("typePaiement", $obj->getTypePaiement());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ListeEmployes();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCddcdi());
        $this->assertNull($obj->getCarteSejourDelivreeLe());
        $this->assertNull($obj->getCarteSejourExpireLe());
        $this->assertNull($obj->getCarteTravailDelivreeLe());
        $this->assertNull($obj->getCarteTravailExpireLe());
        $this->assertNull($obj->getCategoriePermis());
        $this->assertNull($obj->getCleDeux());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeTypeSal());
        $this->assertNull($obj->getCommuneNaissance());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCum30Ss());
        $this->assertNull($obj->getCumBaseGmp());
        $this->assertNull($obj->getCumBaseSs());
        $this->assertNull($obj->getCumBaseTrA());
        $this->assertNull($obj->getCumBaseTrB());
        $this->assertNull($obj->getCumBaseTrC());
        $this->assertNull($obj->getCumBrutAbatNonLim());
        $this->assertNull($obj->getCumBrutNonAbattu());
        $this->assertNull($obj->getCumBrutAl());
        $this->assertNull($obj->getCumCpDus());
        $this->assertNull($obj->getCumCpDus1());
        $this->assertNull($obj->getCumCpPris());
        $this->assertNull($obj->getCumCpPris1());
        $this->assertNull($obj->getCumHSup());
        $this->assertNull($obj->getCumHeurePaye());
        $this->assertNull($obj->getCumHeureTrav());
        $this->assertNull($obj->getCumJourPaye());
        $this->assertNull($obj->getCumJourTrav());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumNetImposable());
        $this->assertNull($obj->getCumPlafondGmp());
        $this->assertNull($obj->getCumPlafondSs1());
        $this->assertNull($obj->getCumPlafondSs2());
        $this->assertNull($obj->getCumProvCp());
        $this->assertNull($obj->getCumProvCp1());
        $this->assertNull($obj->getCumReposComp());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateNaissConjoint());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDateVisiteMedicale());
        $this->assertNull($obj->getDateVisiteReprise());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDerniereVisiteMedicale());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getGestionMailBulletin());
        $this->assertNull($obj->getHandicape());
        $this->assertNull($obj->getLieuTravailConjoint());
        $this->assertNull($obj->getMatricule());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbHeureMois());
        $this->assertNull($obj->getNbJoursAnc());
        $this->assertNull($obj->getNbJoursVisiteMed());
        $this->assertNull($obj->getNiveauConfidentialite());
        $this->assertNull($obj->getNomConjoint());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEnfants());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroCarteSejour());
        $this->assertNull($obj->getNumeroCarteTravail());
        $this->assertNull($obj->getNumeroInsee());
        $this->assertNull($obj->getNumeroPermis());
        $this->assertNull($obj->getOrphelin());
        $this->assertNull($obj->getPasGestionPdp());
        $this->assertNull($obj->getPension());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPermisDelivreLe());
        $this->assertNull($obj->getPermisDelivrePar());
        $this->assertNull($obj->getPermisExpireLe());
        $this->assertNull($obj->getPersonneAPrevenir());
        $this->assertNull($obj->getPourcentAct());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPrenomConjoint());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getSalaireBase());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTds138());
        $this->assertNull($obj->getTds60());
        $this->assertNull($obj->getTds61());
        $this->assertNull($obj->getTds76());
        $this->assertNull($obj->getTauxPensionCivile());
        $this->assertNull($obj->getTauxPensionMilitaire());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTelConjoint());
        $this->assertNull($obj->getTelPersAPrevenir());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTransfertEntree());
        $this->assertNull($obj->getTransfertSortie());
        $this->assertNull($obj->getTypeNationalite());
        $this->assertNull($obj->getTypePaiement());
    }
}
