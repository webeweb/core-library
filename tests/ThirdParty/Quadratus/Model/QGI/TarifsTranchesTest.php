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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\TarifsTranches;

/**
 * Tarifs tranches test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class TarifsTranchesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TarifsTranches();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getCoeff());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getNumTranche());
        $this->assertNull($obj->getPrixNet());
        $this->assertNull($obj->getPrixUnit());
        $this->assertNull($obj->getQteMini());
        $this->assertNull($obj->getTypeCodeArticle());
        $this->assertNull($obj->getTypeCodeClient());
    }
}
