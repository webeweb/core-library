<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CaisseAttestation;

/**
 * Caisse attestation test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CaisseAttestationTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CaisseAttestation();

        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateAttestation());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getInfoFichier());
        $this->assertNull($obj->getLicence());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNumVersion());
        $this->assertNull($obj->getOrdinateur());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPrenomResponsable());
        $this->assertNull($obj->getRaisonSocialeDistri());
        $this->assertNull($obj->getRaisonSocialeSociete());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUtilisateur());
    }
}
