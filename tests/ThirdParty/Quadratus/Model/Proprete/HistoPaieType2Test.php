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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaieType2;

/**
 * Histo paie type2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieType2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoPaieType2();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrime());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTauxMajoration());
        $this->assertNull($obj->getTypeDnjf());
    }
}
