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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoTransfPaie;

/**
 * Histo transf paie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoTransfPaieTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoTransfPaie();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEcartCumule());
        $this->assertNull($obj->getHcrPayees());
        $this->assertNull($obj->getHnpComplH());
        $this->assertNull($obj->getHnphc11());
        $this->assertNull($obj->getHnphc25());
        $this->assertNull($obj->getHnphc33());
        $this->assertNull($obj->getNbComplH());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHAbsJf());
        $this->assertNull($obj->getNbHCompl());
        $this->assertNull($obj->getNbHRempl());
        $this->assertNull($obj->getNbHprevues());
        $this->assertNull($obj->getPeriode());
    }
}
