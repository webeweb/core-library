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
use WBW\Library\Quadratus\Model\QPaie\AttestationIjss;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation ijss test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AttestationIjssTest extends AbstractTestCase {

    /**
     * Test setAdresse1()
     *
     * @return void
     */
    public function testSetAdresse1(): void {

        $obj = new AttestationIjss();

        $obj->setAdresse1("adresse1");
        $this->assertEquals("adresse1", $obj->getAdresse1());
    }

    /**
     * Test setAdresse2()
     *
     * @return void
     */
    public function testSetAdresse2(): void {

        $obj = new AttestationIjss();

        $obj->setAdresse2("adresse2");
        $this->assertEquals("adresse2", $obj->getAdresse2());
    }

    /**
     * Test setAdresse3()
     *
     * @return void
     */
    public function testSetAdresse3(): void {

        $obj = new AttestationIjss();

        $obj->setAdresse3("adresse3");
        $this->assertEquals("adresse3", $obj->getAdresse3());
    }

    /**
     * Test setCasGeneral()
     *
     * @return void
     */
    public function testSetCasGeneral(): void {

        $obj = new AttestationIjss();

        $obj->setCasGeneral(true);
        $this->assertTrue($obj->getCasGeneral());
    }

    /**
     * Test setCasParticulier()
     *
     * @return void
     */
    public function testSetCasParticulier(): void {

        $obj = new AttestationIjss();

        $obj->setCasParticulier(true);
        $this->assertTrue($obj->getCasParticulier());
    }

    /**
     * Test setCategorieSal()
     *
     * @return void
     */
    public function testSetCategorieSal(): void {

        $obj = new AttestationIjss();

        $obj->setCategorieSal("categorieSal");
        $this->assertEquals("categorieSal", $obj->getCategorieSal());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new AttestationIjss();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setDateDebutPaternite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutPaternite(): void {

        // Set a Date/time mock.
        $dateDebutPaternite = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setDateDebutPaternite($dateDebutPaternite);
        $this->assertSame($dateDebutPaternite, $obj->getDateDebutPaternite());
    }

    /**
     * Test setDateDernJMens()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDernJMens(): void {

        // Set a Date/time mock.
        $dateDernJMens = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setDateDernJMens($dateDernJMens);
        $this->assertSame($dateDernJMens, $obj->getDateDernJMens());
    }

    /**
     * Test setDateNaissanceEmploye()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissanceEmploye(): void {

        // Set a Date/time mock.
        $dateNaissanceEmploye = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setDateNaissanceEmploye($dateNaissanceEmploye);
        $this->assertSame($dateNaissanceEmploye, $obj->getDateNaissanceEmploye());
    }

    /**
     * Test setDateNaissanceEnfant()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateNaissanceEnfant(): void {

        // Set a Date/time mock.
        $dateNaissanceEnfant = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setDateNaissanceEnfant($dateNaissanceEnfant);
        $this->assertSame($dateNaissanceEnfant, $obj->getDateNaissanceEnfant());
    }

    /**
     * Test setDernJ()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDernJ(): void {

        // Set a Date/time mock.
        $dernJ = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setDernJ($dernJ);
        $this->assertSame($dernJ, $obj->getDernJ());
    }

    /**
     * Test setDispenseTravail()
     *
     * @return void
     */
    public function testSetDispenseTravail(): void {

        $obj = new AttestationIjss();

        $obj->setDispenseTravail(true);
        $this->assertTrue($obj->getDispenseTravail());
    }

    /**
     * Test setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new AttestationIjss();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Test setEtblAdresse1()
     *
     * @return void
     */
    public function testSetEtblAdresse1(): void {

        $obj = new AttestationIjss();

        $obj->setEtblAdresse1("etblAdresse1");
        $this->assertEquals("etblAdresse1", $obj->getEtblAdresse1());
    }

    /**
     * Test setEtblAdresse2()
     *
     * @return void
     */
    public function testSetEtblAdresse2(): void {

        $obj = new AttestationIjss();

        $obj->setEtblAdresse2("etblAdresse2");
        $this->assertEquals("etblAdresse2", $obj->getEtblAdresse2());
    }

    /**
     * Test setEtblAdresse3()
     *
     * @return void
     */
    public function testSetEtblAdresse3(): void {

        $obj = new AttestationIjss();

        $obj->setEtblAdresse3("etblAdresse3");
        $this->assertEquals("etblAdresse3", $obj->getEtblAdresse3());
    }

    /**
     * Test setEtblRaisonSociale()
     *
     * @return void
     */
    public function testSetEtblRaisonSociale(): void {

        $obj = new AttestationIjss();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Test setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new AttestationIjss();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new AttestationIjss();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setIntituleCompte()
     *
     * @return void
     */
    public function testSetIntituleCompte(): void {

        $obj = new AttestationIjss();

        $obj->setIntituleCompte("intituleCompte");
        $this->assertEquals("intituleCompte", $obj->getIntituleCompte());
    }

    /**
     * Test setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationIjss();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Test setMaladie()
     *
     * @return void
     */
    public function testSetMaladie(): void {

        $obj = new AttestationIjss();

        $obj->setMaladie(true);
        $this->assertTrue($obj->getMaladie());
    }

    /**
     * Test setMaternite()
     *
     * @return void
     */
    public function testSetMaternite(): void {

        $obj = new AttestationIjss();

        $obj->setMaternite(true);
        $this->assertTrue($obj->getMaternite());
    }

    /**
     * Test setMatricule()
     *
     * @return void
     */
    public function testSetMatricule(): void {

        $obj = new AttestationIjss();

        $obj->setMatricule("matricule");
        $this->assertEquals("matricule", $obj->getMatricule());
    }

    /**
     * Test setMontantGeneral()
     *
     * @return void
     */
    public function testSetMontantGeneral(): void {

        $obj = new AttestationIjss();

        $obj->setMontantGeneral(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantGeneral());
    }

    /**
     * Test setMontantParticulier()
     *
     * @return void
     */
    public function testSetMontantParticulier(): void {

        $obj = new AttestationIjss();

        $obj->setMontantParticulier(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantParticulier());
    }

    /**
     * Test setMtCgEuroOuFranc()
     *
     * @return void
     */
    public function testSetMtCgEuroOuFranc(): void {

        $obj = new AttestationIjss();

        $obj->setMtCgEuroOuFranc("mtCgEuroOuFranc");
        $this->assertEquals("mtCgEuroOuFranc", $obj->getMtCgEuroOuFranc());
    }

    /**
     * Test setMtCpEuroOuFranc()
     *
     * @return void
     */
    public function testSetMtCpEuroOuFranc(): void {

        $obj = new AttestationIjss();

        $obj->setMtCpEuroOuFranc("mtCpEuroOuFranc");
        $this->assertEquals("mtCpEuroOuFranc", $obj->getMtCpEuroOuFranc());
    }

    /**
     * Test setMtSalBrutMoins150H()
     *
     * @return void
     */
    public function testSetMtSalBrutMoins150H(): void {

        $obj = new AttestationIjss();

        $obj->setMtSalBrutMoins150H(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalBrutMoins150H());
    }

    /**
     * Test setMtSalBrutMoins600H()
     *
     * @return void
     */
    public function testSetMtSalBrutMoins600H(): void {

        $obj = new AttestationIjss();

        $obj->setMtSalBrutMoins600H(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalBrutMoins600H());
    }

    /**
     * Test setNbEnfantsACharge()
     *
     * @return void
     */
    public function testSetNbEnfantsACharge(): void {

        $obj = new AttestationIjss();

        $obj->setNbEnfantsACharge("nbEnfantsACharge");
        $this->assertEquals("nbEnfantsACharge", $obj->getNbEnfantsACharge());
    }

    /**
     * Test setNbHCasPart()
     *
     * @return void
     */
    public function testSetNbHCasPart(): void {

        $obj = new AttestationIjss();

        $obj->setNbHCasPart(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHCasPart());
    }

    /**
     * Test setNbHGeneral()
     *
     * @return void
     */
    public function testSetNbHGeneral(): void {

        $obj = new AttestationIjss();

        $obj->setNbHGeneral(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHGeneral());
    }

    /**
     * Test setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new AttestationIjss();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Test setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new AttestationIjss();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Test setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new AttestationIjss();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Test setNonRepris()
     *
     * @return void
     */
    public function testSetNonRepris(): void {

        $obj = new AttestationIjss();

        $obj->setNonRepris(true);
        $this->assertTrue($obj->getNonRepris());
    }

    /**
     * Test setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new AttestationIjss();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AttestationIjss();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setOrganisme()
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new AttestationIjss();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Test setPaiementEnEuro()
     *
     * @return void
     */
    public function testSetPaiementEnEuro(): void {

        $obj = new AttestationIjss();

        $obj->setPaiementEnEuro(true);
        $this->assertTrue($obj->getPaiementEnEuro());
    }

    /**
     * Test setPaternite()
     *
     * @return void
     */
    public function testSetPaternite(): void {

        $obj = new AttestationIjss();

        $obj->setPaternite(true);
        $this->assertTrue($obj->getPaternite());
    }

    /**
     * Test setPeriodeAu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeAu(): void {

        // Set a Date/time mock.
        $periodeAu = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setPeriodeAu($periodeAu);
        $this->assertSame($periodeAu, $obj->getPeriodeAu());
    }

    /**
     * Test setPeriodeDu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDu(): void {

        // Set a Date/time mock.
        $periodeDu = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setPeriodeDu($periodeDu);
        $this->assertSame($periodeDu, $obj->getPeriodeDu());
    }

    /**
     * Test setPeriodeSubrAu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeSubrAu(): void {

        // Set a Date/time mock.
        $periodeSubrAu = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setPeriodeSubrAu($periodeSubrAu);
        $this->assertSame($periodeSubrAu, $obj->getPeriodeSubrAu());
    }

    /**
     * Test setPeriodeSubrDu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeSubrDu(): void {

        // Set a Date/time mock.
        $periodeSubrDu = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setPeriodeSubrDu($periodeSubrDu);
        $this->assertSame($periodeSubrDu, $obj->getPeriodeSubrDu());
    }

    /**
     * Test setPlusde200h()
     *
     * @return void
     */
    public function testSetPlusde200h(): void {

        $obj = new AttestationIjss();

        $obj->setPlusde200h(true);
        $this->assertTrue($obj->getPlusde200h());
    }

    /**
     * Test setPlusde800h()
     *
     * @return void
     */
    public function testSetPlusde800h(): void {

        $obj = new AttestationIjss();

        $obj->setPlusde800h(true);
        $this->assertTrue($obj->getPlusde800h());
    }

    /**
     * Test setPrenomEmploye()
     *
     * @return void
     */
    public function testSetPrenomEmploye(): void {

        $obj = new AttestationIjss();

        $obj->setPrenomEmploye("prenomEmploye");
        $this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
    }

    /**
     * Test setRectificative()
     *
     * @return void
     */
    public function testSetRectificative(): void {

        $obj = new AttestationIjss();

        $obj->setRectificative(true);
        $this->assertTrue($obj->getRectificative());
    }

    /**
     * Test setReprise()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetReprise(): void {

        // Set a Date/time mock.
        $reprise = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setReprise($reprise);
        $this->assertSame($reprise, $obj->getReprise());
    }

    /**
     * Test setRepriseMotifMed()
     *
     * @return void
     */
    public function testSetRepriseMotifMed(): void {

        $obj = new AttestationIjss();

        $obj->setRepriseMotifMed(true);
        $this->assertTrue($obj->getRepriseMotifMed());
    }

    /**
     * Test setRepriseRaisonPers()
     *
     * @return void
     */
    public function testSetRepriseRaisonPers(): void {

        $obj = new AttestationIjss();

        $obj->setRepriseRaisonPers(true);
        $this->assertTrue($obj->getRepriseRaisonPers());
    }

    /**
     * Test setSignatureDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSignatureDate(): void {

        // Set a Date/time mock.
        $signatureDate = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Test setSignatureNom()
     *
     * @return void
     */
    public function testSetSignatureNom(): void {

        $obj = new AttestationIjss();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Test setSignatureQualite()
     *
     * @return void
     */
    public function testSetSignatureQualite(): void {

        $obj = new AttestationIjss();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Test setSignatureVille()
     *
     * @return void
     */
    public function testSetSignatureVille(): void {

        $obj = new AttestationIjss();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Test setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new AttestationIjss();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Test setSituation()
     *
     * @return void
     */
    public function testSetSituation(): void {

        $obj = new AttestationIjss();

        $obj->setSituation("situation");
        $this->assertEquals("situation", $obj->getSituation());
    }

    /**
     * Test setSubrogationConstantes()
     *
     * @return void
     */
    public function testSetSubrogationConstantes(): void {

        $obj = new AttestationIjss();

        $obj->setSubrogationConstantes(true);
        $this->assertTrue($obj->getSubrogationConstantes());
    }

    /**
     * Test setSubrogationMontant()
     *
     * @return void
     */
    public function testSetSubrogationMontant(): void {

        $obj = new AttestationIjss();

        $obj->setSubrogationMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getSubrogationMontant());
    }

    /**
     * Test setSubrogationPartielle()
     *
     * @return void
     */
    public function testSetSubrogationPartielle(): void {

        $obj = new AttestationIjss();

        $obj->setSubrogationPartielle(true);
        $this->assertTrue($obj->getSubrogationPartielle());
    }

    /**
     * Test setSuspensionDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSuspensionDate(): void {

        // Set a Date/time mock.
        $suspensionDate = new DateTime("2018-09-10");

        $obj = new AttestationIjss();

        $obj->setSuspensionDate($suspensionDate);
        $this->assertSame($suspensionDate, $obj->getSuspensionDate());
    }

    /**
     * Test setSuspensionMotif()
     *
     * @return void
     */
    public function testSetSuspensionMotif(): void {

        $obj = new AttestationIjss();

        $obj->setSuspensionMotif("suspensionMotif");
        $this->assertEquals("suspensionMotif", $obj->getSuspensionMotif());
    }

    /**
     * Test setTravailTemp()
     *
     * @return void
     */
    public function testSetTravailTemp(): void {

        $obj = new AttestationIjss();

        $obj->setTravailTemp(true);
        $this->assertTrue($obj->getTravailTemp());
    }

    /**
     * Test setTypeAttestation()
     *
     * @return void
     */
    public function testSetTypeAttestation(): void {

        $obj = new AttestationIjss();

        $obj->setTypeAttestation("typeAttestation");
        $this->assertEquals("typeAttestation", $obj->getTypeAttestation());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AttestationIjss();

        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse2());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getCasGeneral());
        $this->assertNull($obj->getCasParticulier());
        $this->assertNull($obj->getCategorieSal());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDebutPaternite());
        $this->assertNull($obj->getDateDernJMens());
        $this->assertNull($obj->getDateNaissanceEmploye());
        $this->assertNull($obj->getDateNaissanceEnfant());
        $this->assertNull($obj->getDernJ());
        $this->assertNull($obj->getDispenseTravail());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblAdresse3());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntituleCompte());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMaladie());
        $this->assertNull($obj->getMaternite());
        $this->assertNull($obj->getMatricule());
        $this->assertNull($obj->getMontantGeneral());
        $this->assertNull($obj->getMontantParticulier());
        $this->assertNull($obj->getMtCgEuroOuFranc());
        $this->assertNull($obj->getMtCpEuroOuFranc());
        $this->assertNull($obj->getMtSalBrutMoins150H());
        $this->assertNull($obj->getMtSalBrutMoins600H());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbEnfantsACharge());
        $this->assertNull($obj->getNbHCasPart());
        $this->assertNull($obj->getNbHGeneral());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNonRepris());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPaiementEnEuro());
        $this->assertNull($obj->getPaternite());
        $this->assertNull($obj->getPeriodeAu());
        $this->assertNull($obj->getPeriodeDu());
        $this->assertNull($obj->getPeriodeSubrAu());
        $this->assertNull($obj->getPeriodeSubrDu());
        $this->assertNull($obj->getPlusde200h());
        $this->assertNull($obj->getPlusde800h());
        $this->assertNull($obj->getPrenomEmploye());
        $this->assertNull($obj->getRectificative());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getRepriseMotifMed());
        $this->assertNull($obj->getRepriseRaisonPers());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getSituation());
        $this->assertNull($obj->getSubrogationConstantes());
        $this->assertNull($obj->getSubrogationMontant());
        $this->assertNull($obj->getSubrogationPartielle());
        $this->assertNull($obj->getSuspensionDate());
        $this->assertNull($obj->getSuspensionMotif());
        $this->assertNull($obj->getTravailTemp());
        $this->assertNull($obj->getTypeAttestation());
    }
}
