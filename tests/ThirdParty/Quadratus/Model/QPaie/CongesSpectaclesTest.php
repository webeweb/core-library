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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CongesSpectacles;

/**
 * Conges spectacles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CongesSpectaclesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CongesSpectacles();

        $this->assertNull($obj->getBaseConges());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getCeInitial());
        $this->assertNull($obj->getCodeEmploi());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getContact());
        $this->assertNull($obj->getContratEnCours());
        $this->assertNull($obj->getDateCertificatEmploi());
        $this->assertNull($obj->getDateEmbauche());
        $this->assertNull($obj->getDateFinContrat());
        $this->assertNull($obj->getDateNaissance());
        $this->assertNull($obj->getDatePaiement());
        $this->assertNull($obj->getDebutPeriodeAttest());
        $this->assertNull($obj->getDeptNaissance());
        $this->assertNull($obj->getDisquette());
        $this->assertNull($obj->getEdite());
        $this->assertNull($obj->getEmpAdresse1());
        $this->assertNull($obj->getEmpAdresse2());
        $this->assertNull($obj->getEmpCodePostal());
        $this->assertNull($obj->getEmpCommune());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEtblAdresse1());
        $this->assertNull($obj->getEtblAdresse2());
        $this->assertNull($obj->getEtblCodePostal());
        $this->assertNull($obj->getEtblCommune());
        $this->assertNull($obj->getEtblRaisonSociale());
        $this->assertNull($obj->getEtblTel());
        $this->assertNull($obj->getIndiceCe());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieuCertificatEmploi());
        $this->assertNull($obj->getLieuNaissance());
        $this->assertNull($obj->getNir());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNomNaissance());
        $this->assertNull($obj->getNombreCachets());
        $this->assertNull($obj->getNouvelleAttest());
        $this->assertNull($obj->getNumCaisseSpectacle());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getNumeroCeInitial());
        $this->assertNull($obj->getNumeroCongesSpectacle());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPeriodeAttest());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPseudonyme());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSignataireCertificatEmploi());
        $this->assertNull($obj->getStatutCadre());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getTitre());
        $this->assertNull($obj->getTypeCe());
    }
}
