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
use WBW\Library\Quadratus\Model\QPaie\AttestationExtras;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Attestation extras test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AttestationExtrasTest extends AbstractTestCase {

    /**
     * Tests setAncienAssedic()
     *
     * @return void
     */
    public function testSetAncienAssedic(): void {

        $obj = new AttestationExtras();

        $obj->setAncienAssedic(true);
        $this->assertEquals(true, $obj->getAncienAssedic());
    }

    /**
     * Tests setAncienGarp()
     *
     * @return void
     */
    public function testSetAncienGarp(): void {

        $obj = new AttestationExtras();

        $obj->setAncienGarp(true);
        $this->assertEquals(true, $obj->getAncienGarp());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new AttestationExtras();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeMotifRupture()
     *
     * @return void
     */
    public function testSetCodeMotifRupture(): void {

        $obj = new AttestationExtras();

        $obj->setCodeMotifRupture("codeMotifRupture");
        $this->assertEquals("codeMotifRupture", $obj->getCodeMotifRupture());
    }

    /**
     * Tests setCodeNaf()
     *
     * @return void
     */
    public function testSetCodeNaf(): void {

        $obj = new AttestationExtras();

        $obj->setCodeNaf("codeNaf");
        $this->assertEquals("codeNaf", $obj->getCodeNaf());
    }

    /**
     * Tests setEffectif()
     *
     * @return void
     */
    public function testSetEffectif(): void {

        $obj = new AttestationExtras();

        $obj->setEffectif(10);
        $this->assertEquals(10, $obj->getEffectif());
    }

    /**
     * Tests setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new AttestationExtras();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests setEtblAdresse()
     *
     * @return void
     */
    public function testSetEtblAdresse(): void {

        $obj = new AttestationExtras();

        $obj->setEtblAdresse("etblAdresse");
        $this->assertEquals("etblAdresse", $obj->getEtblAdresse());
    }

    /**
     * Tests setEtblRaisonSociale()
     *
     * @return void
     */
    public function testSetEtblRaisonSociale(): void {

        $obj = new AttestationExtras();

        $obj->setEtblRaisonSociale("etblRaisonSociale");
        $this->assertEquals("etblRaisonSociale", $obj->getEtblRaisonSociale());
    }

    /**
     * Tests setEtblTel()
     *
     * @return void
     */
    public function testSetEtblTel(): void {

        $obj = new AttestationExtras();

        $obj->setEtblTel("etblTel");
        $this->assertEquals("etblTel", $obj->getEtblTel());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new AttestationExtras();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new AttestationExtras();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new AttestationExtras();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests setNomPoleEmploi()
     *
     * @return void
     */
    public function testSetNomPoleEmploi(): void {

        $obj = new AttestationExtras();

        $obj->setNomPoleEmploi("nomPoleEmploi");
        $this->assertEquals("nomPoleEmploi", $obj->getNomPoleEmploi());
    }

    /**
     * Tests setNomRegimeRetraite()
     *
     * @return void
     */
    public function testSetNomRegimeRetraite(): void {

        $obj = new AttestationExtras();

        $obj->setNomRegimeRetraite("nomRegimeRetraite");
        $this->assertEquals("nomRegimeRetraite", $obj->getNomRegimeRetraite());
    }

    /**
     * Tests setNumeroAffiliation()
     *
     * @return void
     */
    public function testSetNumeroAffiliation(): void {

        $obj = new AttestationExtras();

        $obj->setNumeroAffiliation("numeroAffiliation");
        $this->assertEquals("numeroAffiliation", $obj->getNumeroAffiliation());
    }

    /**
     * Tests setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new AttestationExtras();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new AttestationExtras();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new AttestationExtras();

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

        $obj = new AttestationExtras();

        $obj->setPeriodeEmploiFin($periodeEmploiFin);
        $this->assertSame($periodeEmploiFin, $obj->getPeriodeEmploiFin());
    }

    /**
     * Tests setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new AttestationExtras();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Tests setSignatureDate()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetSignatureDate(): void {

        // Set a Date/time mock.
        $signatureDate = new DateTime("2018-09-10");

        $obj = new AttestationExtras();

        $obj->setSignatureDate($signatureDate);
        $this->assertSame($signatureDate, $obj->getSignatureDate());
    }

    /**
     * Tests setSignatureNom()
     *
     * @return void
     */
    public function testSetSignatureNom(): void {

        $obj = new AttestationExtras();

        $obj->setSignatureNom("signatureNom");
        $this->assertEquals("signatureNom", $obj->getSignatureNom());
    }

    /**
     * Tests setSignatureQualite()
     *
     * @return void
     */
    public function testSetSignatureQualite(): void {

        $obj = new AttestationExtras();

        $obj->setSignatureQualite("signatureQualite");
        $this->assertEquals("signatureQualite", $obj->getSignatureQualite());
    }

    /**
     * Tests setSignatureVille()
     *
     * @return void
     */
    public function testSetSignatureVille(): void {

        $obj = new AttestationExtras();

        $obj->setSignatureVille("signatureVille");
        $this->assertEquals("signatureVille", $obj->getSignatureVille());
    }

    /**
     * Tests setSiret()
     *
     * @return void
     */
    public function testSetSiret(): void {

        $obj = new AttestationExtras();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AttestationExtras();

        $this->assertNull($obj->getAncienAssedic());
        $this->assertNull($obj->getAncienGarp());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getCodeNaf());
        $this->assertNull($obj->getEffectif());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomPoleEmploi());
        $this->assertNull($obj->getNomRegimeRetraite());
        $this->assertNull($obj->getNumeroAffiliation());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeEmploiDeb());
        $this->assertNull($obj->getPeriodeEmploiFin());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureVille());
    }
}
