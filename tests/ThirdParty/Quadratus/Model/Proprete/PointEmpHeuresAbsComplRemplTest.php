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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointEmpHeuresAbsComplRempl;

/**
 * Point emp heures abs compl rempl test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointEmpHeuresAbsComplRemplTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointEmpHeuresAbsComplRempl();

        $this->assertNull($obj->getAvenantSigne());
        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateAbsDecalee());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEmployeRemplace());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getHeuresJour());
        $this->assertNull($obj->getHeuresNuit());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getTypeHeure());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUniqIdPlanning());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
