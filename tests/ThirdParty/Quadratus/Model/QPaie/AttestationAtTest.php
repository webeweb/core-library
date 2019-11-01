<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationAt;

/**
 * Attestation at test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAtTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationAt();

        $this->assertNull($obj->getAccident());
        $this->assertNull($obj->getAccidentMoisEmbauche());
        $this->assertNull($obj->getAdresse1());
        $this->assertNull($obj->getAdresse3());
        $this->assertNull($obj->getAnciennete());
        $this->assertNull($obj->getAutreVivtime());
        $this->assertNull($obj->getCasPart());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateAccident());
        $this->assertNull($obj->getDateContrat());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDernHeure());
        $this->assertNull($obj->getDernJ());
        $this->assertNull($obj->getEmbauche());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAAdresse1());
        $this->assertNull($obj->getEtblAAdresse2());
        $this->assertNull($obj->getEtblAAdresse3());
        $this->assertNull($obj->getEtblATel());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblAdresse3());
        $this->assertNull($obj->getEtblNatureActivite());
        $this->assertNull($obj->getEtblNoAdherent());
        $this->assertNull($obj->getEtblNomPrenom());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getIntegral());
        $this->assertNull($obj->getIntituleCompte());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieuNaissance());
        $this->assertNull($obj->getMaintien());
        $this->assertNull($obj->getMaladiePro());
        $this->assertNull($obj->getMedecin());
        $this->assertNull($obj->getMontantCotisTheo());
        $this->assertNull($obj->getMontantSalTheo());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNationaliteAutre());
        $this->assertNull($obj->getNationaliteCee());
        $this->assertNull($obj->getNationaliteFr());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomMarital());
        $this->assertNull($obj->getNonRepris());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPartiel());
        $this->assertNull($obj->getPerReferenceAu());
        $this->assertNull($obj->getPerReferenceCotisations());
        $this->assertNull($obj->getPerReferenceDu());
        $this->assertNull($obj->getPerReferenceMontant());
        $this->assertNull($obj->getPerReferenceNbHeures());
        $this->assertNull($obj->getPerReferenceSalaires());
        $this->assertNull($obj->getPeriodeSubrAu());
        $this->assertNull($obj->getPeriodeSubrDu());
        $this->assertNull($obj->getPrenomEmploye());
        $this->assertNull($obj->getQualification());
        $this->assertNull($obj->getReprise());
        $this->assertNull($obj->getRisqueAt());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSalaireMini());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getSubIntegral());
        $this->assertNull($obj->getSubPartiel());
        $this->assertNull($obj->getSubrogationDureeMax());
        $this->assertNull($obj->getSubrogationMontant());
        $this->assertNull($obj->getTypeAttestation());
    }
}
