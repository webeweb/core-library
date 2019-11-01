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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\AttestationExtras;

/**
 * Attestation extras test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class AttestationExtrasTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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
