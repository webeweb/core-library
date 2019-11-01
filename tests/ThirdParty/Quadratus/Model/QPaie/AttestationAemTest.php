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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationAem;

/**
 * Attestation aem test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationAemTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AttestationAem();

        $this->assertNull($obj->getAemInitiale());
        $this->assertNull($obj->getActivite());
        $this->assertNull($obj->getAutresContributions());
        $this->assertNull($obj->getAutresRemunBrut());
        $this->assertNull($obj->getAutresTauxCotis());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAl());
        $this->assertNull($obj->getCertificationSociale());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeEmploi());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeNaf2008());
        $this->assertNull($obj->getCodeQualif());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getContratEnCours());
        $this->assertNull($obj->getContributions());
        $this->assertNull($obj->getDateEmbauche());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateFinContratInitiale());
        $this->assertNull($obj->getDateNaiss());
        $this->assertNull($obj->getEmpAdresse1());
        $this->assertNull($obj->getEmpAdresse2());
        $this->assertNull($obj->getEmpCodePostal());
        $this->assertNull($obj->getEmpCommune());
        $this->assertNull($obj->getEmpTel());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblCodePostal());
        $this->assertNull($obj->getEtblCommune());
        $this->assertNull($obj->getEtblFax());
        $this->assertNull($obj->getEtblMail());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIndiceAem());
        $this->assertNull($obj->getLabelPrestataire());
        $this->assertNull($obj->getLicenceSpectacle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienParente());
        $this->assertNull($obj->getMotifFinContrat());
        $this->assertNull($obj->getMotifRupture());
        $this->assertNull($obj->getNaf());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNomRetraite());
        $this->assertNull($obj->getNombreCachets());
        $this->assertNull($obj->getNombreCachetsIsoles());
        $this->assertNull($obj->getNombreHeures());
        $this->assertNull($obj->getNumAssedic());
        $this->assertNull($obj->getNumCaisseSpectacle());
        $this->assertNull($obj->getNumCertificationSociale());
        $this->assertNull($obj->getNumIdccEmployeur());
        $this->assertNull($obj->getNumIdccPrestationTravail());
        $this->assertNull($obj->getNumObjet());
        $this->assertNull($obj->getNumeroAemInitiale());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroLabel());
        $this->assertNull($obj->getNumeroLicence());
        $this->assertNull($obj->getOrganisateurSpectacle());
        $this->assertNull($obj->getOrganismeAssedic());
        $this->assertNull($obj->getOrganismeRetraite());
        $this->assertNull($obj->getPeriodeAttest());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSignatureDate());
        $this->assertNull($obj->getSignatureNom());
        $this->assertNull($obj->getSignaturePrenom());
        $this->assertNull($obj->getSignatureQualite());
        $this->assertNull($obj->getSignatureQualiteCode());
        $this->assertNull($obj->getSignatureVille());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getTauxCotis());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getTypeAem());
        $this->assertNull($obj->getTypeLienParente());
        $this->assertNull($obj->getTypeNationalite());
    }
}
