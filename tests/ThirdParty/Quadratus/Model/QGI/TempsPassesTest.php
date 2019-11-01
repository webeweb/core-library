<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TempsPasses;

/**
 * Temps passes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TempsPassesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TempsPasses();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getCodeVehicule());
        $this->assertNull($obj->getCoutKm());
        $this->assertNull($obj->getDateSaisie());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getGUniqId());
        $this->assertNull($obj->getHeureDebut());
        $this->assertNull($obj->getHeureFin());
        $this->assertNull($obj->getIdTps());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getMontantCrt());
        $this->assertNull($obj->getMontantTva());
        $this->assertNull($obj->getNbKm());
        $this->assertNull($obj->getNbUo());
        $this->assertNull($obj->getPu());
        $this->assertNull($obj->getPv1());
        $this->assertNull($obj->getPv2());
        $this->assertNull($obj->getPv3());
        $this->assertNull($obj->getPeriodeEditionNdF());
        $this->assertNull($obj->getQte());
        $this->assertNull($obj->getTauxRemise());
        $this->assertNull($obj->getTauxRemiseIci());
        $this->assertNull($obj->getUniqIdFacture());
        $this->assertNull($obj->getValide());
        $this->assertNull($obj->getValideCollab());
        $this->assertNull($obj->getValideDate());
    }
}
