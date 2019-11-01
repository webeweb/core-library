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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ProgTypeLignes;

/**
 * Prog type lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ProgTypeLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ProgTypeLignes();

        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getVitesseReelle());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
