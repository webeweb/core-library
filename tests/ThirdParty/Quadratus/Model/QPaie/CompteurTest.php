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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Compteur;

/**
 * Compteur test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CompteurTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Compteur();

        $this->assertNull($obj->getNbAttesAssedic());
        $this->assertNull($obj->getNbAttesAssedicADeduire());
        $this->assertNull($obj->getNbAttesAssedicFact());
        $this->assertNull($obj->getNbAttesIjss());
        $this->assertNull($obj->getNbAttesIjssADeduire());
        $this->assertNull($obj->getNbAttesIjssAt());
        $this->assertNull($obj->getNbAttesIjssAtaDeduire());
        $this->assertNull($obj->getNbAttesIjssAtFact());
        $this->assertNull($obj->getNbAttesIjssFact());
        $this->assertNull($obj->getNbAttestEmploi());
        $this->assertNull($obj->getNbAttestEmploiADeduire());
        $this->assertNull($obj->getNbAttestEmploiFact());
        $this->assertNull($obj->getNbBulEdites());
        $this->assertNull($obj->getNbBulEditesADeduire());
        $this->assertNull($obj->getNbBulEditesFact());
        $this->assertNull($obj->getNbBulValides());
        $this->assertNull($obj->getNbBulValidesADeduire());
        $this->assertNull($obj->getNbBulValidesFact());
        $this->assertNull($obj->getNbCertifTravail());
        $this->assertNull($obj->getNbCertifTravailADeduire());
        $this->assertNull($obj->getNbCertifTravailFact());
        $this->assertNull($obj->getNbDadsEditees());
        $this->assertNull($obj->getNbDadsEditeesADeduire());
        $this->assertNull($obj->getNbDadsEditeesFact());
        $this->assertNull($obj->getNbDsnEvtArret());
        $this->assertNull($obj->getNbDsnEvtArretADeduire());
        $this->assertNull($obj->getNbDsnEvtArretFact());
        $this->assertNull($obj->getNbDsnEvtFinContrat());
        $this->assertNull($obj->getNbDsnEvtFinContratADeduire());
        $this->assertNull($obj->getNbDsnEvtFinContratFact());
        $this->assertNull($obj->getNbDsnMensuelle());
        $this->assertNull($obj->getNbDsnMensuelleADeduire());
        $this->assertNull($obj->getNbDsnMensuelleFact());
        $this->assertNull($obj->getNbDue());
        $this->assertNull($obj->getNbDueaDeduire());
        $this->assertNull($obj->getNbDueFact());
        $this->assertNull($obj->getNbDisquettesVirements());
        $this->assertNull($obj->getNbDisquettesVirementsADeduire());
        $this->assertNull($obj->getNbDisquettesVirementsFact());
        $this->assertNull($obj->getNbSoldeToutCompte());
        $this->assertNull($obj->getNbSoldeToutCompteADeduire());
        $this->assertNull($obj->getNbSoldeToutCompteFact());
        $this->assertNull($obj->getNbTdsRealisees());
        $this->assertNull($obj->getNbTdsRealiseesADeduire());
        $this->assertNull($obj->getNbTdsRealiseesFact());
        $this->assertNull($obj->getPeriode());
    }
}
