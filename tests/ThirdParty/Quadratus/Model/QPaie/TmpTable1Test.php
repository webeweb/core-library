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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TmpTable1;

/**
 * Tmp table1 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TmpTable1Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TmpTable1();

        $this->assertNull($obj->getClasse());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getEtablissement());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getInverse());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getQui());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurTot());
    }
}
