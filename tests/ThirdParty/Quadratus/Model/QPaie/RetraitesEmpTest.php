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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RetraitesEmp;

/**
 * Retraites emp test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RetraitesEmpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RetraitesEmp();

        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIndiceContrat());
        $this->assertNull($obj->getNonGere());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeOrga());
    }
}
