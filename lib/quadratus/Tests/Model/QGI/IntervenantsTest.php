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
use WBW\Library\Quadratus\Model\QGI\Intervenants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Intervenants test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class IntervenantsTest extends AbstractTestCase {

    /**
     * Test setAdresseSiteClient()
     *
     * @return void
     */
    public function testSetAdresseSiteClient(): void {

        $obj = new Intervenants();

        $obj->setAdresseSiteClient("adresseSiteClient");
        $this->assertEquals("adresseSiteClient", $obj->getAdresseSiteClient());
    }

    /**
     * Test setAdresseTranspac()
     *
     * @return void
     */
    public function testSetAdresseTranspac(): void {

        $obj = new Intervenants();

        $obj->setAdresseTranspac("adresseTranspac");
        $this->assertEquals("adresseTranspac", $obj->getAdresseTranspac());
    }

    /**
     * Test setAge()
     *
     * @return void
     */
    public function testSetAge(): void {

        $obj = new Intervenants();

        $obj->setAge("age");
        $this->assertEquals("age", $obj->getAge());
    }

    /**
     * Test setAutoriserAccesInternet()
     *
     * @return void
     */
    public function testSetAutoriserAccesInternet(): void {

        $obj = new Intervenants();

        $obj->setAutoriserAccesInternet(true);
        $this->assertTrue($obj->getAutoriserAccesInternet());
    }

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Intervenants();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Intervenants();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Test setBtq2()
     *
     * @return void
     */
    public function testSetBtq2(): void {

        $obj = new Intervenants();

        $obj->setBtq2("btq2");
        $this->assertEquals("btq2", $obj->getBtq2());
    }

    /**
     * Test setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Intervenants();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Test setBureauDistributeur2()
     *
     * @return void
     */
    public function testSetBureauDistributeur2(): void {

        $obj = new Intervenants();

        $obj->setBureauDistributeur2("bureauDistributeur2");
        $this->assertEquals("bureauDistributeur2", $obj->getBureauDistributeur2());
    }

    /**
     * Test setCapital()
     *
     * @return void
     */
    public function testSetCapital(): void {

        $obj = new Intervenants();

        $obj->setCapital(10.092018);
        $this->assertEquals(10.092018, $obj->getCapital());
    }

    /**
     * Test setCapitalMonnaie()
     *
     * @return void
     */
    public function testSetCapitalMonnaie(): void {

        $obj = new Intervenants();

        $obj->setCapitalMonnaie("capitalMonnaie");
        $this->assertEquals("capitalMonnaie", $obj->getCapitalMonnaie());
    }

    /**
     * Test setCategorieJuridique()
     *
     * @return void
     */
    public function testSetCategorieJuridique(): void {

        $obj = new Intervenants();

        $obj->setCategorieJuridique("categorieJuridique");
        $this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
    }

    /**
     * Test setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new Intervenants();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Intervenants();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeEpoux()
     *
     * @return void
     */
    public function testSetCodeEpoux(): void {

        $obj = new Intervenants();

        $obj->setCodeEpoux("codeEpoux");
        $this->assertEquals("codeEpoux", $obj->getCodeEpoux());
    }

    /**
     * Test setCodeInsee()
     *
     * @return void
     */
    public function testSetCodeInsee(): void {

        $obj = new Intervenants();

        $obj->setCodeInsee("codeInsee");
        $this->assertEquals("codeInsee", $obj->getCodeInsee());
    }

    /**
     * Test setCodeNaf()
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new Intervenants();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Test setCodeNaf2008()
     *
     * @return void
     */
    public function testSetCodeNaf2008(): void {

        $obj = new Intervenants();

        $obj->setCodeNaf2008("codeNaf2008");
        $this->assertEquals("codeNaf2008", $obj->getCodeNaf2008());
    }

    /**
     * Test setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Intervenants();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Test setCodeOfficielCommune2()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune2(): void {

        $obj = new Intervenants();

        $obj->setCodeOfficielCommune2("codeOfficielCommune2");
        $this->assertEquals("codeOfficielCommune2", $obj->getCodeOfficielCommune2());
    }

    /**
     * Test setCodePaysIso()
     *
     * @return void
     */
    public function testSetCodePaysIso(): void {

        $obj = new Intervenants();

        $obj->setCodePaysIso("codePaysIso");
        $this->assertEquals("codePaysIso", $obj->getCodePaysIso());
    }

    /**
     * Test setCodePaysIsoNaiss()
     *
     * @return void
     */
    public function testSetCodePaysIsoNaiss(): void {

        $obj = new Intervenants();

        $obj->setCodePaysIsoNaiss("codePaysIsoNaiss");
        $this->assertEquals("codePaysIsoNaiss", $obj->getCodePaysIsoNaiss());
    }

    /**
     * Test setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Intervenants();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Test setCodePostal2()
     *
     * @return void
     */
    public function testSetCodePostal2(): void {

        $obj = new Intervenants();

        $obj->setCodePostal2("codePostal2");
        $this->assertEquals("codePostal2", $obj->getCodePostal2());
    }

    /**
     * Test setCodePostalMariage()
     *
     * @return void
     */
    public function testSetCodePostalMariage(): void {

        $obj = new Intervenants();

        $obj->setCodePostalMariage("codePostalMariage");
        $this->assertEquals("codePostalMariage", $obj->getCodePostalMariage());
    }

    /**
     * Test setCodePostalNaissance()
     *
     * @return void
     */
    public function testSetCodePostalNaissance(): void {

        $obj = new Intervenants();

        $obj->setCodePostalNaissance("codePostalNaissance");
        $this->assertEquals("codePostalNaissance", $obj->getCodePostalNaissance());
    }

    /**
     * Test setCodePostalRc()
     *
     * @return void
     */
    public function testSetCodePostalRc(): void {

        $obj = new Intervenants();

        $obj->setCodePostalRc("codePostalRc");
        $this->assertEquals("codePostalRc", $obj->getCodePostalRc());
    }

    /**
     * Test setCodePostalRm()
     *
     * @return void
     */
    public function testSetCodePostalRm(): void {

        $obj = new Intervenants();

        $obj->setCodePostalRm("codePostalRm");
        $this->assertEquals("codePostalRm", $obj->getCodePostalRm());
    }

    /**
     * Test setCodeResponsable()
     *
     * @return void
     */
    public function testSetCodeResponsable(): void {

        $obj = new Intervenants();

        $obj->setCodeResponsable("codeResponsable");
        $this->assertEquals("codeResponsable", $obj->getCodeResponsable());
    }

    /**
     * Test setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Intervenants();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Test setComplement2()
     *
     * @return void
     */
    public function testSetComplement2(): void {

        $obj = new Intervenants();

        $obj->setComplement2("complement2");
        $this->assertEquals("complement2", $obj->getComplement2());
    }

    /**
     * Test setComplementSuite()
     *
     * @return void
     */
    public function testSetComplementSuite(): void {

        $obj = new Intervenants();

        $obj->setComplementSuite("complementSuite");
        $this->assertEquals("complementSuite", $obj->getComplementSuite());
    }

    /**
     * Test setCompteurLiens()
     *
     * @return void
     */
    public function testSetCompteurLiens(): void {

        $obj = new Intervenants();

        $obj->setCompteurLiens(10);
        $this->assertEquals(10, $obj->getCompteurLiens());
    }

    /**
     * Test setContact()
     *
     * @return void
     */
    public function testSetContact(): void {

        $obj = new Intervenants();

        $obj->setContact("contact");
        $this->assertEquals("contact", $obj->getContact());
    }

    /**
     * Test setCreationSociete()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetCreationSociete(): void {

        // Set a Date/time mock.
        $creationSociete = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setCreationSociete($creationSociete);
        $this->assertSame($creationSociete, $obj->getCreationSociete());
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

        $obj = new Intervenants();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Test setDateDebActivite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebActivite(): void {

        // Set a Date/time mock.
        $dateDebActivite = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setDateDebActivite($dateDebActivite);
        $this->assertSame($dateDebActivite, $obj->getDateDebActivite());
    }

    /**
     * Test setDateDivorce()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDivorce(): void {

        // Set a Date/time mock.
        $dateDivorce = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setDateDivorce($dateDivorce);
        $this->assertSame($dateDivorce, $obj->getDateDivorce());
    }

    /**
     * Test setDateInstallation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateInstallation(): void {

        // Set a Date/time mock.
        $dateInstallation = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setDateInstallation($dateInstallation);
        $this->assertSame($dateInstallation, $obj->getDateInstallation());
    }

    /**
     * Test setDateMariage()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateMariage(): void {

        // Set a Date/time mock.
        $dateMariage = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setDateMariage($dateMariage);
        $this->assertSame($dateMariage, $obj->getDateMariage());
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

        $obj = new Intervenants();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
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

        $obj = new Intervenants();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Test setDonneesAppel()
     *
     * @return void
     */
    public function testSetDonneesAppel(): void {

        $obj = new Intervenants();

        $obj->setDonneesAppel("donneesAppel");
        $this->assertEquals("donneesAppel", $obj->getDonneesAppel());
    }

    /**
     * Test setDroitCollabVisuDocuments()
     *
     * @return void
     */
    public function testSetDroitCollabVisuDocuments(): void {

        $obj = new Intervenants();

        $obj->setDroitCollabVisuDocuments("droitCollabVisuDocuments");
        $this->assertEquals("droitCollabVisuDocuments", $obj->getDroitCollabVisuDocuments());
    }

    /**
     * Test setDureeSociete()
     *
     * @return void
     */
    public function testSetDureeSociete(): void {

        $obj = new Intervenants();

        $obj->setDureeSociete("dureeSociete");
        $this->assertEquals("dureeSociete", $obj->getDureeSociete());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new Intervenants();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setEmail2()
     *
     * @return void
     */
    public function testSetEmail2(): void {

        $obj = new Intervenants();

        $obj->setEmail2("email2");
        $this->assertEquals("email2", $obj->getEmail2());
    }

    /**
     * Test setEnseigne()
     *
     * @return void
     */
    public function testSetEnseigne(): void {

        $obj = new Intervenants();

        $obj->setEnseigne("enseigne");
        $this->assertEquals("enseigne", $obj->getEnseigne());
    }

    /**
     * Test setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new Intervenants();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Test setFax2()
     *
     * @return void
     */
    public function testSetFax2(): void {

        $obj = new Intervenants();

        $obj->setFax2("fax2");
        $this->assertEquals("fax2", $obj->getFax2());
    }

    /**
     * Test setFrpCle()
     *
     * @return void
     */
    public function testSetFrpCle(): void {

        $obj = new Intervenants();

        $obj->setFrpCle("frpCle");
        $this->assertEquals("frpCle", $obj->getFrpCle());
    }

    /**
     * Test setFrpDossier()
     *
     * @return void
     */
    public function testSetFrpDossier(): void {

        $obj = new Intervenants();

        $obj->setFrpDossier("frpDossier");
        $this->assertEquals("frpDossier", $obj->getFrpDossier());
    }

    /**
     * Test setFrpRecette()
     *
     * @return void
     */
    public function testSetFrpRecette(): void {

        $obj = new Intervenants();

        $obj->setFrpRecette("frpRecette");
        $this->assertEquals("frpRecette", $obj->getFrpRecette());
    }

    /**
     * Test setGestJuri()
     *
     * @return void
     */
    public function testSetGestJuri(): void {

        $obj = new Intervenants();

        $obj->setGestJuri(true);
        $this->assertTrue($obj->getGestJuri());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Intervenants();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIdentTva()
     *
     * @return void
     */
    public function testSetIdentTva(): void {

        $obj = new Intervenants();

        $obj->setIdentTva("identTva");
        $this->assertEquals("identTva", $obj->getIdentTva());
    }

    /**
     * Test setIdentifiant()
     *
     * @return void
     */
    public function testSetIdentifiant(): void {

        $obj = new Intervenants();

        $obj->setIdentifiant("identifiant");
        $this->assertEquals("identifiant", $obj->getIdentifiant());
    }

    /**
     * Test setIdentifiantInternet()
     *
     * @return void
     */
    public function testSetIdentifiantInternet(): void {

        $obj = new Intervenants();

        $obj->setIdentifiantInternet("identifiantInternet");
        $this->assertEquals("identifiantInternet", $obj->getIdentifiantInternet());
    }

    /**
     * Test setInscriptionRc()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetInscriptionRc(): void {

        // Set a Date/time mock.
        $inscriptionRc = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setInscriptionRc($inscriptionRc);
        $this->assertSame($inscriptionRc, $obj->getInscriptionRc());
    }

    /**
     * Test setInscriptionRm()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetInscriptionRm(): void {

        // Set a Date/time mock.
        $inscriptionRm = new DateTime("2018-09-10");

        $obj = new Intervenants();

        $obj->setInscriptionRm($inscriptionRm);
        $this->assertSame($inscriptionRm, $obj->getInscriptionRm());
    }

    /**
     * Test setIsClient()
     *
     * @return void
     */
    public function testSetIsClient(): void {

        $obj = new Intervenants();

        $obj->setIsClient("isClient");
        $this->assertEquals("isClient", $obj->getIsClient());
    }

    /**
     * Test setIsFournisseur()
     *
     * @return void
     */
    public function testSetIsFournisseur(): void {

        $obj = new Intervenants();

        $obj->setIsFournisseur("isFournisseur");
        $this->assertEquals("isFournisseur", $obj->getIsFournisseur());
    }

    /**
     * Test setMdpInternet()
     *
     * @return void
     */
    public function testSetMdpInternet(): void {

        $obj = new Intervenants();

        $obj->setMdpInternet("mdpInternet");
        $this->assertEquals("mdpInternet", $obj->getMdpInternet());
    }

    /**
     * Test setMissionPrincipale()
     *
     * @return void
     */
    public function testSetMissionPrincipale(): void {

        $obj = new Intervenants();

        $obj->setMissionPrincipale("missionPrincipale");
        $this->assertEquals("missionPrincipale", $obj->getMissionPrincipale());
    }

    /**
     * Test setNationalite()
     *
     * @return void
     */
    public function testSetNationalite(): void {

        $obj = new Intervenants();

        $obj->setNationalite("nationalite");
        $this->assertEquals("nationalite", $obj->getNationalite());
    }

    /**
     * Test setNbEnfants()
     *
     * @return void
     */
    public function testSetNbEnfants(): void {

        $obj = new Intervenants();

        $obj->setNbEnfants("nbEnfants");
        $this->assertEquals("nbEnfants", $obj->getNbEnfants());
    }

    /**
     * Test setNbKm()
     *
     * @return void
     */
    public function testSetNbKm(): void {

        $obj = new Intervenants();

        $obj->setNbKm(10.092018);
        $this->assertEquals(10.092018, $obj->getNbKm());
    }

    /**
     * Test setNie1()
     *
     * @return void
     */
    public function testSetNie1(): void {

        $obj = new Intervenants();

        $obj->setNie1("nie1");
        $this->assertEquals("nie1", $obj->getNie1());
    }

    /**
     * Test setNie2()
     *
     * @return void
     */
    public function testSetNie2(): void {

        $obj = new Intervenants();

        $obj->setNie2("nie2");
        $this->assertEquals("nie2", $obj->getNie2());
    }

    /**
     * Test setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new Intervenants();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new Intervenants();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Test setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new Intervenants();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Test setNomMere()
     *
     * @return void
     */
    public function testSetNomMere(): void {

        $obj = new Intervenants();

        $obj->setNomMere("nomMere");
        $this->assertEquals("nomMere", $obj->getNomMere());
    }

    /**
     * Test setNomPere()
     *
     * @return void
     */
    public function testSetNomPere(): void {

        $obj = new Intervenants();

        $obj->setNomPere("nomPere");
        $this->assertEquals("nomPere", $obj->getNomPere());
    }

    /**
     * Test setNomSuite()
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new Intervenants();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Intervenants();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNomVille2()
     *
     * @return void
     */
    public function testSetNomVille2(): void {

        $obj = new Intervenants();

        $obj->setNomVille2("nomVille2");
        $this->assertEquals("nomVille2", $obj->getNomVille2());
    }

    /**
     * Test setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Intervenants();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Test setNomVoie2()
     *
     * @return void
     */
    public function testSetNomVoie2(): void {

        $obj = new Intervenants();

        $obj->setNomVoie2("nomVoie2");
        $this->assertEquals("nomVoie2", $obj->getNomVoie2());
    }

    /**
     * Test setNombreActions()
     *
     * @return void
     */
    public function testSetNombreActions(): void {

        $obj = new Intervenants();

        $obj->setNombreActions(10);
        $this->assertEquals(10, $obj->getNombreActions());
    }

    /**
     * Test setNumAgrementCga()
     *
     * @return void
     */
    public function testSetNumAgrementCga(): void {

        $obj = new Intervenants();

        $obj->setNumAgrementCga("numAgrementCga");
        $this->assertEquals("numAgrementCga", $obj->getNumAgrementCga());
    }

    /**
     * Test setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Intervenants();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Test setNumVoie2()
     *
     * @return void
     */
    public function testSetNumVoie2(): void {

        $obj = new Intervenants();

        $obj->setNumVoie2("numVoie2");
        $this->assertEquals("numVoie2", $obj->getNumVoie2());
    }

    /**
     * Test setPays()
     *
     * @return void
     */
    public function testSetPays(): void {

        $obj = new Intervenants();

        $obj->setPays("pays");
        $this->assertEquals("pays", $obj->getPays());
    }

    /**
     * Test setPaysNaissance()
     *
     * @return void
     */
    public function testSetPaysNaissance(): void {

        $obj = new Intervenants();

        $obj->setPaysNaissance("paysNaissance");
        $this->assertEquals("paysNaissance", $obj->getPaysNaissance());
    }

    /**
     * Test setPersonnePhysique()
     *
     * @return void
     */
    public function testSetPersonnePhysique(): void {

        $obj = new Intervenants();

        $obj->setPersonnePhysique(true);
        $this->assertTrue($obj->getPersonnePhysique());
    }

    /**
     * Test setPortable1()
     *
     * @return void
     */
    public function testSetPortable1(): void {

        $obj = new Intervenants();

        $obj->setPortable1("portable1");
        $this->assertEquals("portable1", $obj->getPortable1());
    }

    /**
     * Test setPortable12()
     *
     * @return void
     */
    public function testSetPortable12(): void {

        $obj = new Intervenants();

        $obj->setPortable12("portable12");
        $this->assertEquals("portable12", $obj->getPortable12());
    }

    /**
     * Test setPortable2()
     *
     * @return void
     */
    public function testSetPortable2(): void {

        $obj = new Intervenants();

        $obj->setPortable2("portable2");
        $this->assertEquals("portable2", $obj->getPortable2());
    }

    /**
     * Test setPortable22()
     *
     * @return void
     */
    public function testSetPortable22(): void {

        $obj = new Intervenants();

        $obj->setPortable22("portable22");
        $this->assertEquals("portable22", $obj->getPortable22());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new Intervenants();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setQualite()
     *
     * @return void
     */
    public function testSetQualite(): void {

        $obj = new Intervenants();

        $obj->setQualite("qualite");
        $this->assertEquals("qualite", $obj->getQualite());
    }

    /**
     * Test setRc()
     *
     * @return void
     */
    public function testSetRc(): void {

        $obj = new Intervenants();

        $obj->setRc("rc");
        $this->assertEquals("rc", $obj->getRc());
    }

    /**
     * Test setRcCode()
     *
     * @return void
     */
    public function testSetRcCode(): void {

        $obj = new Intervenants();

        $obj->setRcCode("rcCode");
        $this->assertEquals("rcCode", $obj->getRcCode());
    }

    /**
     * Test setRegimeMatrimonial()
     *
     * @return void
     */
    public function testSetRegimeMatrimonial(): void {

        $obj = new Intervenants();

        $obj->setRegimeMatrimonial("regimeMatrimonial");
        $this->assertEquals("regimeMatrimonial", $obj->getRegimeMatrimonial());
    }

    /**
     * Test setRegimeMatrimoniale()
     *
     * @return void
     */
    public function testSetRegimeMatrimoniale(): void {

        $obj = new Intervenants();

        $obj->setRegimeMatrimoniale("regimeMatrimoniale");
        $this->assertEquals("regimeMatrimoniale", $obj->getRegimeMatrimoniale());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Intervenants();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setRm()
     *
     * @return void
     */
    public function testSetRm(): void {

        $obj = new Intervenants();

        $obj->setRm("rm");
        $this->assertEquals("rm", $obj->getRm());
    }

    /**
     * Test setRmCode()
     *
     * @return void
     */
    public function testSetRmCode(): void {

        $obj = new Intervenants();

        $obj->setRmCode("rmCode");
        $this->assertEquals("rmCode", $obj->getRmCode());
    }

    /**
     * Test setSalarieIndependant()
     *
     * @return void
     */
    public function testSetSalarieIndependant(): void {

        $obj = new Intervenants();

        $obj->setSalarieIndependant("salarieIndependant");
        $this->assertEquals("salarieIndependant", $obj->getSalarieIndependant());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new Intervenants();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSituationFam()
     *
     * @return void
     */
    public function testSetSituationFam(): void {

        $obj = new Intervenants();

        $obj->setSituationFam("situationFam");
        $this->assertEquals("situationFam", $obj->getSituationFam());
    }

    /**
     * Test setTel1()
     *
     * @return void
     */
    public function testSetTel1(): void {

        $obj = new Intervenants();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Test setTel12()
     *
     * @return void
     */
    public function testSetTel12(): void {

        $obj = new Intervenants();

        $obj->setTel12("tel12");
        $this->assertEquals("tel12", $obj->getTel12());
    }

    /**
     * Test setTel2()
     *
     * @return void
     */
    public function testSetTel2(): void {

        $obj = new Intervenants();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Test setTel22()
     *
     * @return void
     */
    public function testSetTel22(): void {

        $obj = new Intervenants();

        $obj->setTel22("tel22");
        $this->assertEquals("tel22", $obj->getTel22());
    }

    /**
     * Test setTelVoiture()
     *
     * @return void
     */
    public function testSetTelVoiture(): void {

        $obj = new Intervenants();

        $obj->setTelVoiture("telVoiture");
        $this->assertEquals("telVoiture", $obj->getTelVoiture());
    }

    /**
     * Test setTelVoiture2()
     *
     * @return void
     */
    public function testSetTelVoiture2(): void {

        $obj = new Intervenants();

        $obj->setTelVoiture2("telVoiture2");
        $this->assertEquals("telVoiture2", $obj->getTelVoiture2());
    }

    /**
     * Test setTelex()
     *
     * @return void
     */
    public function testSetTelex(): void {

        $obj = new Intervenants();

        $obj->setTelex("telex");
        $this->assertEquals("telex", $obj->getTelex());
    }

    /**
     * Test setTelex2()
     *
     * @return void
     */
    public function testSetTelex2(): void {

        $obj = new Intervenants();

        $obj->setTelex2("telex2");
        $this->assertEquals("telex2", $obj->getTelex2());
    }

    /**
     * Test setTravailADomicile()
     *
     * @return void
     */
    public function testSetTravailADomicile(): void {

        $obj = new Intervenants();

        $obj->setTravailADomicile(true);
        $this->assertTrue($obj->getTravailADomicile());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Intervenants();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test setTypeSociete()
     *
     * @return void
     */
    public function testSetTypeSociete(): void {

        $obj = new Intervenants();

        $obj->setTypeSociete("typeSociete");
        $this->assertEquals("typeSociete", $obj->getTypeSociete());
    }

    /**
     * Test setVilleMariage()
     *
     * @return void
     */
    public function testSetVilleMariage(): void {

        $obj = new Intervenants();

        $obj->setVilleMariage("villeMariage");
        $this->assertEquals("villeMariage", $obj->getVilleMariage());
    }

    /**
     * Test setVilleNaissance()
     *
     * @return void
     */
    public function testSetVilleNaissance(): void {

        $obj = new Intervenants();

        $obj->setVilleNaissance("villeNaissance");
        $this->assertEquals("villeNaissance", $obj->getVilleNaissance());
    }

    /**
     * Test setVilleRc()
     *
     * @return void
     */
    public function testSetVilleRc(): void {

        $obj = new Intervenants();

        $obj->setVilleRc("villeRc");
        $this->assertEquals("villeRc", $obj->getVilleRc());
    }

    /**
     * Test setVilleRm()
     *
     * @return void
     */
    public function testSetVilleRm(): void {

        $obj = new Intervenants();

        $obj->setVilleRm("villeRm");
        $this->assertEquals("villeRm", $obj->getVilleRm());
    }

    /**
     * Test setZipCode()
     *
     * @return void
     */
    public function testSetZipCode(): void {

        $obj = new Intervenants();

        $obj->setZipCode("zipCode");
        $this->assertEquals("zipCode", $obj->getZipCode());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Intervenants();

        $this->assertNull($obj->getAdresseSiteClient());
        $this->assertNull($obj->getAdresseTranspac());
        $this->assertNull($obj->getAge());
        $this->assertNull($obj->getAutoriserAccesInternet());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtq2());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeur2());
        $this->assertNull($obj->getCapital());
        $this->assertNull($obj->getCapitalMonnaie());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeEpoux());
        $this->assertNull($obj->getCodeInsee());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodeOfficielCommune2());
        $this->assertNull($obj->getCodePaysIso());
        $this->assertNull($obj->getCodePaysIsoNaiss());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostal2());
        $this->assertNull($obj->getCodePostalMariage());
        $this->assertNull($obj->getCodePostalNaissance());
        $this->assertNull($obj->getCodePostalRc());
        $this->assertNull($obj->getCodePostalRm());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplement2());
        $this->assertNull($obj->getComplementSuite());
        $this->assertNull($obj->getCompteurLiens());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getCreationSociete());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebActivite());
        $this->assertNull($obj->getDateDivorce());
        $this->assertNull($obj->getDateInstallation());
        $this->assertNull($obj->getDateMariage());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDonneesAppel());
        $this->assertNull($obj->getDroitCollabVisuDocuments());
        $this->assertNull($obj->getDureeSociete());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmail2());
        $this->assertNull($obj->getEnseigne());
        $this->assertNull($obj->getFrpCle());
        $this->assertNull($obj->getFrpDossier());
        $this->assertNull($obj->getFrpRecette());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFax2());
        $this->assertNull($obj->getGestJuri());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIdentTva());
        $this->assertNull($obj->getIdentifiant());
        $this->assertNull($obj->getIdentifiantInternet());
        $this->assertNull($obj->getInscriptionRc());
        $this->assertNull($obj->getInscriptionRm());
        $this->assertNull($obj->getIsClient());
        $this->assertNull($obj->getIsFournisseur());
        $this->assertNull($obj->getMdpInternet());
        $this->assertNull($obj->getMissionPrincipale());
        $this->assertNull($obj->getNie1());
        $this->assertNull($obj->getNie2());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNationalite());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNbKm());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomMere());
        $this->assertNull($obj->getNomPere());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVille2());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoie2());
        $this->assertNull($obj->getNombreActions());
        $this->assertNull($obj->getNumAgrementCga());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoie2());
        $this->assertNull($obj->getPays());
        $this->assertNull($obj->getPaysNaissance());
        $this->assertNull($obj->getPersonnePhysique());
        $this->assertNull($obj->getPortable1());
        $this->assertNull($obj->getPortable12());
        $this->assertNull($obj->getPortable2());
        $this->assertNull($obj->getPortable22());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getQualite());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getRcCode());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRm());
        $this->assertNull($obj->getRmCode());
        $this->assertNull($obj->getRegimeMatrimonial());
        $this->assertNull($obj->getRegimeMatrimoniale());
        $this->assertNull($obj->getSalarieIndependant());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSituationFam());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel12());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTel22());
        $this->assertNull($obj->getTelVoiture());
        $this->assertNull($obj->getTelVoiture2());
        $this->assertNull($obj->getTelex());
        $this->assertNull($obj->getTelex2());
        $this->assertNull($obj->getTravailADomicile());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeSociete());
        $this->assertNull($obj->getVilleMariage());
        $this->assertNull($obj->getVilleNaissance());
        $this->assertNull($obj->getVilleRc());
        $this->assertNull($obj->getVilleRm());
        $this->assertNull($obj->getZipCode());
    }
}
