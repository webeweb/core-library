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
use WBW\Library\Quadratus\Model\QPaie\AttestationCacm;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation cacm test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AttestationCacmTest extends AbstractTestCase {

    /**
     * Tests setAdresseEmploye()
     *
     * @return void
     */
    public function testSetAdresseEmploye(): void {

        $obj = new AttestationCacm();

        $obj->setAdresseEmploye("adresseEmploye");
        $this->assertEquals("adresseEmploye", $obj->getAdresseEmploye());
    }

    /**
     * Tests setAutreContrat()
     *
     * @return void
     */
    public function testSetAutreContrat(): void {

        $obj = new AttestationCacm();

        $obj->setAutreContrat("autreContrat");
        $this->assertEquals("autreContrat", $obj->getAutreContrat());
    }

    /**
     * Tests setAutreStatut()
     *
     * @return void
     */
    public function testSetAutreStatut(): void {

        $obj = new AttestationCacm();

        $obj->setAutreStatut("autreStatut");
        $this->assertEquals("autreStatut", $obj->getAutreStatut());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new AttestationCacm();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeMotifRupture()
     *
     * @return void
     */
    public function testSetCodeMotifRupture(): void {

        $obj = new AttestationCacm();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new AttestationCacm();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
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

        $obj = new AttestationCacm();

        $obj->setDateNaissance($dateNaissance);
        $this->assertSame($dateNaissance, $obj->getDateNaissance());
    }

    /**
     * Tests setDateNotification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateNotification(): void {

        // Set a Date/time mock.
        $dateNotification = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDateNotification($dateNotification);
        $this->assertSame($dateNotification, $obj->getDateNotification());
    }

    /**
     * Tests setDatePaiement()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePaiement(): void {

        // Set a Date/time mock.
        $datePaiement = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDatePaiement($datePaiement);
        $this->assertSame($datePaiement, $obj->getDatePaiement());
    }

    /**
     * Tests setDernLieuTravail()
     *
     * @return void
     */
    public function testSetDernLieuTravail(): void {

        $obj = new AttestationCacm();

        $obj->setDernLieuTravail("dernLieuTravail");
        $this->assertEquals("dernLieuTravail", $obj->getDernLieuTravail());
    }

    /**
     * Tests setDernierEmploi()
     *
     * @return void
     */
    public function testSetDernierEmploi(): void {

        $obj = new AttestationCacm();

        $obj->setDernierEmploi("dernierEmploi");
        $this->assertEquals("dernierEmploi", $obj->getDernierEmploi());
    }

    /**
     * Tests setDtDebPreavisEffectue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPreavisEffectue(): void {

        // Set a Date/time mock.
        $dtDebPreavisEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDebPreavisEffectue($dtDebPreavisEffectue);
        $this->assertSame($dtDebPreavisEffectue, $obj->getDtDebPreavisEffectue());
    }

    /**
     * Tests setDtDebPreavisNonEffectue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebPreavisNonEffectue(): void {

        // Set a Date/time mock.
        $dtDebPreavisNonEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDebPreavisNonEffectue($dtDebPreavisNonEffectue);
        $this->assertSame($dtDebPreavisNonEffectue, $obj->getDtDebPreavisNonEffectue());
    }

    /**
     * Tests setDtDebutEmploi()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutEmploi(): void {

        // Set a Date/time mock.
        $dtDebutEmploi = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDebutEmploi($dtDebutEmploi);
        $this->assertSame($dtDebutEmploi, $obj->getDtDebutEmploi());
    }

    /**
     * Tests setDtDernJourTrav()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernJourTrav(): void {

        // Set a Date/time mock.
        $dtDernJourTrav = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtDernJourTrav($dtDernJourTrav);
        $this->assertSame($dtDernJourTrav, $obj->getDtDernJourTrav());
    }

    /**
     * Tests setDtFinEmploi()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinEmploi(): void {

        // Set a Date/time mock.
        $dtFinEmploi = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtFinEmploi($dtFinEmploi);
        $this->assertSame($dtFinEmploi, $obj->getDtFinEmploi());
    }

    /**
     * Tests setDtFinPreavisEffectue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavisEffectue(): void {

        // Set a Date/time mock.
        $dtFinPreavisEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtFinPreavisEffectue($dtFinPreavisEffectue);
        $this->assertSame($dtFinPreavisEffectue, $obj->getDtFinPreavisEffectue());
    }

    /**
     * Tests setDtFinPreavisNonEffectue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPreavisNonEffectue(): void {

        // Set a Date/time mock.
        $dtFinPreavisNonEffectue = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setDtFinPreavisNonEffectue($dtFinPreavisNonEffectue);
        $this->assertSame($dtFinPreavisNonEffectue, $obj->getDtFinPreavisNonEffectue());
    }

    /**
     * Tests setEtblAdr()
     *
     * @return void
     */
    public function testSetEtblAdr(): void {

        $obj = new AttestationCacm();

        $obj->setEtblAdr("etblAdr");
        $this->assertEquals("etblAdr", $obj->getEtblAdr());
    }

    /**
     * Tests setEtblCacm()
     *
     * @return void
     */
    public function testSetEtblCacm(): void {

        $obj = new AttestationCacm();

        $obj->setEtblCacm("etblCacm");
        $this->assertEquals("etblCacm", $obj->getEtblCacm());
    }

    /**
     * Tests setEtblEffectif()
     *
     * @return void
     */
    public function testSetEtblEffectif(): void {

        $obj = new AttestationCacm();

        $obj->setEtblEffectif(10);
        $this->assertEquals(10, $obj->getEtblEffectif());
    }

    /**
     * Tests setEtblFax()
     *
     * @return void
     */
    public function testSetEtblFax(): void {

        $obj = new AttestationCacm();

        $obj->setEtblFax("etblFax");
        $this->assertEquals("etblFax", $obj->getEtblFax());
    }

    /**
     * Tests setEtblMail()
     *
     * @return void
     */
    public function testSetEtblMail(): void {

        $obj = new AttestationCacm();

        $obj->setEtblMail("etblMail");
        $this->assertEquals("etblMail", $obj->getEtblMail());
    }

    /**
     * Tests setEtblNaf()
     *
     * @return void
     */
    public function testSetEtblNaf(): void {

        $obj = new AttestationCacm();

        $obj->setEtblNaf("etblNaf");
        $this->assertEquals("etblNaf", $obj->getEtblNaf());
    }

    /**
     * Tests setEtblSiret()
     *
     * @return void
     */
    public function testSetEtblSiret(): void {

        $obj = new AttestationCacm();

        $obj->setEtblSiret("etblSiret");
        $this->assertEquals("etblSiret", $obj->getEtblSiret());
    }

    /**
     * Tests setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new AttestationCacm();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests setIndemnAutre()
     *
     * @return void
     */
    public function testSetIndemnAutre(): void {

        $obj = new AttestationCacm();

        $obj->setIndemnAutre(true);
        $this->assertEquals(true, $obj->getIndemnAutre());
    }

    /**
     * Tests setIndemnLegale()
     *
     * @return void
     */
    public function testSetIndemnLegale(): void {

        $obj = new AttestationCacm();

        $obj->setIndemnLegale(true);
        $this->assertEquals(true, $obj->getIndemnLegale());
    }

    /**
     * Tests setIndemnLic()
     *
     * @return void
     */
    public function testSetIndemnLic(): void {

        $obj = new AttestationCacm();

        $obj->setIndemnLic(true);
        $this->assertEquals(true, $obj->getIndemnLic());
    }

    /**
     * Tests setIndemnSupp()
     *
     * @return void
     */
    public function testSetIndemnSupp(): void {

        $obj = new AttestationCacm();

        $obj->setIndemnSupp(true);
        $this->assertEquals(true, $obj->getIndemnSupp());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationCacm();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLienParente()
     *
     * @return void
     */
    public function testSetLienParente(): void {

        $obj = new AttestationCacm();

        $obj->setLienParente(true);
        $this->assertEquals(true, $obj->getLienParente());
    }

    /**
     * Tests setMotifPreavisNonPaye()
     *
     * @return void
     */
    public function testSetMotifPreavisNonPaye(): void {

        $obj = new AttestationCacm();

        $obj->setMotifPreavisNonPaye("motifPreavisNonPaye");
        $this->assertEquals("motifPreavisNonPaye", $obj->getMotifPreavisNonPaye());
    }

    /**
     * Tests setMotifRupture()
     *
     * @return void
     */
    public function testSetMotifRupture(): void {

        $obj = new AttestationCacm();

        $obj->setMotifRupture("motifRupture");
        $this->assertEquals("motifRupture", $obj->getMotifRupture());
    }

    /**
     * Tests setMtIndemnAutre()
     *
     * @return void
     */
    public function testSetMtIndemnAutre(): void {

        $obj = new AttestationCacm();

        $obj->setMtIndemnAutre(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnAutre());
    }

    /**
     * Tests setMtIndemnLegale()
     *
     * @return void
     */
    public function testSetMtIndemnLegale(): void {

        $obj = new AttestationCacm();

        $obj->setMtIndemnLegale(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnLegale());
    }

    /**
     * Tests setMtIndemnLic()
     *
     * @return void
     */
    public function testSetMtIndemnLic(): void {

        $obj = new AttestationCacm();

        $obj->setMtIndemnLic(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnLic());
    }

    /**
     * Tests setMtIndemnSupp()
     *
     * @return void
     */
    public function testSetMtIndemnSupp(): void {

        $obj = new AttestationCacm();

        $obj->setMtIndemnSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIndemnSupp());
    }

    /**
     * Tests setMtSalaireBrut()
     *
     * @return void
     */
    public function testSetMtSalaireBrut(): void {

        $obj = new AttestationCacm();

        $obj->setMtSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalaireBrut());
    }

    /**
     * Tests setNbHeureMens()
     *
     * @return void
     */
    public function testSetNbHeureMens(): void {

        $obj = new AttestationCacm();

        $obj->setNbHeureMens(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureMens());
    }

    /**
     * Tests setNiveauQualif()
     *
     * @return void
     */
    public function testSetNiveauQualif(): void {

        $obj = new AttestationCacm();

        $obj->setNiveauQualif("niveauQualif");
        $this->assertEquals("niveauQualif", $obj->getNiveauQualif());
    }

    /**
     * Tests setNoCacm()
     *
     * @return void
     */
    public function testSetNoCacm(): void {

        $obj = new AttestationCacm();

        $obj->setNoCacm("noCacm");
        $this->assertEquals("noCacm", $obj->getNoCacm());
    }

    /**
     * Tests setNoCssm()
     *
     * @return void
     */
    public function testSetNoCssm(): void {

        $obj = new AttestationCacm();

        $obj->setNoCssm("noCssm");
        $this->assertEquals("noCssm", $obj->getNoCssm());
    }

    /**
     * Tests setNomMarital()
     *
     * @return void
     */
    public function testSetNomMarital(): void {

        $obj = new AttestationCacm();

        $obj->setNomMarital("nomMarital");
        $this->assertEquals("nomMarital", $obj->getNomMarital());
    }

    /**
     * Tests setNomNaissance()
     *
     * @return void
     */
    public function testSetNomNaissance(): void {

        $obj = new AttestationCacm();

        $obj->setNomNaissance("nomNaissance");
        $this->assertEquals("nomNaissance", $obj->getNomNaissance());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new AttestationCacm();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AttestationCacm();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setOrganismeCacm()
     *
     * @return void
     */
    public function testSetOrganismeCacm(): void {

        $obj = new AttestationCacm();

        $obj->setOrganismeCacm("organismeCacm");
        $this->assertEquals("organismeCacm", $obj->getOrganismeCacm());
    }

    /**
     * Tests setPeriodeEmploiDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEmploiDeb(): void {

        // Set a Date/time mock.
        $periodeEmploiDeb = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setPeriodeEmploiDeb($periodeEmploiDeb);
        $this->assertSame($periodeEmploiDeb, $obj->getPeriodeEmploiDeb());
    }

    /**
     * Tests setPeriodeEmploiFin()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEmploiFin(): void {

        // Set a Date/time mock.
        $periodeEmploiFin = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setPeriodeEmploiFin($periodeEmploiFin);
        $this->assertSame($periodeEmploiFin, $obj->getPeriodeEmploiFin());
    }

    /**
     * Tests setPreavisNonEffectuePaye()
     *
     * @return void
     */
    public function testSetPreavisNonEffectuePaye(): void {

        $obj = new AttestationCacm();

        $obj->setPreavisNonEffectuePaye(true);
        $this->assertEquals(true, $obj->getPreavisNonEffectuePaye());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new AttestationCacm();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests setSignAutre()
     *
     * @return void
     */
    public function testSetSignAutre(): void {

        $obj = new AttestationCacm();

        $obj->setSignAutre("signAutre");
        $this->assertEquals("signAutre", $obj->getSignAutre());
    }

    /**
     * Tests setSignDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignDate(): void {

        // Set a Date/time mock.
        $signDate = new DateTime("2018-09-10");

        $obj = new AttestationCacm();

        $obj->setSignDate($signDate);
        $this->assertSame($signDate, $obj->getSignDate());
    }

    /**
     * Tests setSignFormJuridique()
     *
     * @return void
     */
    public function testSetSignFormJuridique(): void {

        $obj = new AttestationCacm();

        $obj->setSignFormJuridique("signFormJuridique");
        $this->assertEquals("signFormJuridique", $obj->getSignFormJuridique());
    }

    /**
     * Tests setSignMotifRupture()
     *
     * @return void
     */
    public function testSetSignMotifRupture(): void {

        $obj = new AttestationCacm();

        $obj->setSignMotifRupture("signMotifRupture");
        $this->assertEquals("signMotifRupture", $obj->getSignMotifRupture());
    }

    /**
     * Tests setSignNom()
     *
     * @return void
     */
    public function testSetSignNom(): void {

        $obj = new AttestationCacm();

        $obj->setSignNom("signNom");
        $this->assertEquals("signNom", $obj->getSignNom());
    }

    /**
     * Tests setSignPrenom()
     *
     * @return void
     */
    public function testSetSignPrenom(): void {

        $obj = new AttestationCacm();

        $obj->setSignPrenom("signPrenom");
        $this->assertEquals("signPrenom", $obj->getSignPrenom());
    }

    /**
     * Tests setSignQualite()
     *
     * @return void
     */
    public function testSetSignQualite(): void {

        $obj = new AttestationCacm();

        $obj->setSignQualite(10);
        $this->assertEquals(10, $obj->getSignQualite());
    }

    /**
     * Tests setSignRaisonSociale()
     *
     * @return void
     */
    public function testSetSignRaisonSociale(): void {

        $obj = new AttestationCacm();

        $obj->setSignRaisonSociale("signRaisonSociale");
        $this->assertEquals("signRaisonSociale", $obj->getSignRaisonSociale());
    }

    /**
     * Tests setStatutCadre()
     *
     * @return void
     */
    public function testSetStatutCadre(): void {

        $obj = new AttestationCacm();

        $obj->setStatutCadre(true);
        $this->assertEquals(true, $obj->getStatutCadre());
    }

    /**
     * Tests setStatutJuridique()
     *
     * @return void
     */
    public function testSetStatutJuridique(): void {

        $obj = new AttestationCacm();

        $obj->setStatutJuridique("statutJuridique");
        $this->assertEquals("statutJuridique", $obj->getStatutJuridique());
    }

    /**
     * Tests setStatutParticulier()
     *
     * @return void
     */
    public function testSetStatutParticulier(): void {

        $obj = new AttestationCacm();

        $obj->setStatutParticulier(10);
        $this->assertEquals(10, $obj->getStatutParticulier());
    }

    /**
     * Tests setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new AttestationCacm();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Tests setTitreLienParente()
     *
     * @return void
     */
    public function testSetTitreLienParente(): void {

        $obj = new AttestationCacm();

        $obj->setTitreLienParente("titreLienParente");
        $this->assertEquals("titreLienParente", $obj->getTitreLienParente());
    }

    /**
     * Tests setTypeContrat()
     *
     * @return void
     */
    public function testSetTypeContrat(): void {

        $obj = new AttestationCacm();

        $obj->setTypeContrat(10);
        $this->assertEquals(10, $obj->getTypeContrat());
    }

    /**
     * Tests setTypeHoraire()
     *
     * @return void
     */
    public function testSetTypeHoraire(): void {

        $obj = new AttestationCacm();

        $obj->setTypeHoraire(10);
        $this->assertEquals(10, $obj->getTypeHoraire());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AttestationCacm();

        $this->assertNull($obj->getAdresseEmploye());
        $this->assertNull($obj->getAutreContrat());
        $this->assertNull($obj->getAutreStatut());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDatePaiement());
        $this->assertNull($obj->getDernLieuTravail());
        $this->assertNull($obj->getDernierEmploi());
        $this->assertNull($obj->getDtDebPreavisEffectue());
        $this->assertNull($obj->getDtDebPreavisNonEffectue());
        $this->assertNull($obj->getDtDebutEmploi());
        $this->assertNull($obj->getDtDernJourTrav());
        $this->assertNull($obj->getDtFinEmploi());
        $this->assertNull($obj->getDtFinPreavisEffectue());
        $this->assertNull($obj->getDtFinPreavisNonEffectue());
        $this->assertNull($obj->getEtblAdr());
        $this->assertNull($obj->getEtblCacm());
        $this->assertNull($obj->getEtblEffectif());
        $this->assertNull($obj->getEtblFax());
        $this->assertNull($obj->getEtblMail());
        $this->assertNull($obj->getEtblNaf());
        $this->assertNull($obj->getEtblSiret());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIndemnAutre());
        $this->assertNull($obj->getIndemnLegale());
        $this->assertNull($obj->getIndemnLic());
        $this->assertNull($obj->getIndemnSupp());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifPreavisNonPaye());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getMtIndemnAutre());
        $this->assertNull($obj->getMtIndemnLegale());
        $this->assertNull($obj->getMtIndemnLic());
        $this->assertNull($obj->getMtIndemnSupp());
        $this->assertNull($obj->getMtSalaireBrut());
        $this->assertNull($obj->getNbHeureMens());
        $this->assertNull($obj->getNiveauQualif());
        $this->assertNull($obj->getNoCacm());
        $this->assertNull($obj->getNoCssm());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganismeCacm());
        $this->assertNull($obj->getPeriodeEmploiDeb());
        $this->assertNull($obj->getPeriodeEmploiFin());
        $this->assertNull($obj->getPreavisNonEffectuePaye());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSignAutre());
        $this->assertNull($obj->getSignDate());
        $this->assertNull($obj->getSignFormJuridique());
        $this->assertNull($obj->getSignMotifRupture());
        $this->assertNull($obj->getSignNom());
        $this->assertNull($obj->getSignPrenom());
        $this->assertNull($obj->getSignQualite());
        $this->assertNull($obj->getSignRaisonSociale());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getStatutJuridique());
        $this->assertNull($obj->getStatutParticulier());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTitreLienParente());
        $this->assertNull($obj->getTypeContrat());
        $this->assertNull($obj->getTypeHoraire());
    }
}
