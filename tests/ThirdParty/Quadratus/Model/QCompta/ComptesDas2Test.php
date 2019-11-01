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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ComptesDas2;

/**
 * Comptes das2 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ComptesDas2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ComptesDas2();

        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getIndemniteRbt());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getNature1());
        $this->assertNull($obj->getNature2());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getRetenueSource());
        $this->assertNull($obj->getTvada());
        $this->assertNull($obj->getTypeAn());
        $this->assertNull($obj->getTypeIr());
        $this->assertNull($obj->getTypeRs());
    }
}
