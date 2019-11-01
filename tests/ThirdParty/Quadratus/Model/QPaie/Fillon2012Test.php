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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Fillon2012;

/**
 * Fillon2012 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class Fillon2012Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fillon2012();

        $this->assertNull($obj->getCoeff());
        $this->assertNull($obj->getForce());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbHSupFillon());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRmb());
        $this->assertNull($obj->getRmbMajoHe());
        $this->assertNull($obj->getReducFillon());
        $this->assertNull($obj->getReducFillonMajoHe());
        $this->assertNull($obj->getSmicM());
    }
}
