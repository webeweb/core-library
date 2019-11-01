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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\HistoPaieAnal;

/**
 * Histo paie anal test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class HistoPaieAnalTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HistoPaieAnal();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getNumeroLigneAnal());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcent());
    }
}
