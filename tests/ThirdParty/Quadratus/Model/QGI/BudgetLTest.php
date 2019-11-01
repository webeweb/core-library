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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\BudgetL;

/**
 * Budget l test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class BudgetLTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BudgetL();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getHSoldees());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNomTravail());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrixHeure());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getTypeAffectation());
        $this->assertNull($obj->getUniqIdLm());
    }
}
