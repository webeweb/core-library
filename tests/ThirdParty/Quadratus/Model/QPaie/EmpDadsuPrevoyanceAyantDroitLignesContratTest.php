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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\EmpDadsuPrevoyanceAyantDroitLignesContrat;

/**
 * Emp dadsu prevoyance ayant droit lignes contrat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroitLignesContratTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getNumeroAyantDroit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getRefContrat());
    }
}
