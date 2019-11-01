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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HistoTransfertCpta;

/**
 * Histo transfert cpta test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HistoTransfertCptaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoTransfertCpta();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getDateEcriture());
        $this->assertNull($obj->getNumLot());
        $this->assertNull($obj->getPeriodeTransfert());
        $this->assertNull($obj->getTypeTransfert());
    }
}
