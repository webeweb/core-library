<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointEmpTache;

/**
 * Point emp tache test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpTacheTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointEmpTache();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHRemplMens());
        $this->assertNull($obj->getMensualisation());
        $this->assertNull($obj->getMtPrime1Chantier());
        $this->assertNull($obj->getMtPrime2Chantier());
        $this->assertNull($obj->getMtPrime3Chantier());
        $this->assertNull($obj->getNbHeures1Rs());
        $this->assertNull($obj->getNbHeures1Tp());
        $this->assertNull($obj->getNbHeures2Rs());
        $this->assertNull($obj->getNbHeures2Tp());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxHoraire1Rs());
        $this->assertNull($obj->getTxHoraire1Tp());
        $this->assertNull($obj->getTxHoraire2Rs());
        $this->assertNull($obj->getTxHoraire2Tp());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
