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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\RegularisationAf;

/**
 * Regularisation af test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class RegularisationAfTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RegularisationAf();

        $this->assertNull($obj->getBaseAf());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getIndiceBulDeb());
        $this->assertNull($obj->getIndiceBulFin());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPerBulDeb());
        $this->assertNull($obj->getPerBulFin());
        $this->assertNull($obj->getPeriode());
    }
}
