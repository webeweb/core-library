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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EntreeSortieEmp;

/**
 * Entree sortie emp test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EntreeSortieEmpTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EntreeSortieEmp();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMotifRupture());
        $this->assertNull($obj->getDateEs());
        $this->assertNull($obj->getDateFinPeriodeEssai());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateNotification());
        $this->assertNull($obj->getDateRenouvCdd1());
        $this->assertNull($obj->getDateRenouvCdd2());
        $this->assertNull($obj->getEntrepriseTravailTemp());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTransfertEs());
        $this->assertNull($obj->getTravailTemp());
        $this->assertNull($obj->getTypeEs());
    }
}
