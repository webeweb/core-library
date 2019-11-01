<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ControleTva;

/**
 * Controle tva test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ControleTvaTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ControleTva();

        $this->assertNull($obj->getCodeCalc());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getColonneTaux());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMttTaux());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getRacineCpt());
        $this->assertNull($obj->getSaisieManuelle());
        $this->assertNull($obj->getTypeControle());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getValeurTaux());
    }
}
