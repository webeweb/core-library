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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HeuresAbsence;

/**
 * Heures absence test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresAbsenceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HeuresAbsence();

        $this->assertNull($obj->getAbsenceAu());
        $this->assertNull($obj->getAbsenceDu());
        $this->assertNull($obj->getDateJour());
        $this->assertNull($obj->getNbHaReintegrer());
        $this->assertNull($obj->getNbHNonEffectue());
        $this->assertNull($obj->getNbHRetenueSalaire());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTransfere());
        $this->assertNull($obj->getTypeAbsence());
    }
}
