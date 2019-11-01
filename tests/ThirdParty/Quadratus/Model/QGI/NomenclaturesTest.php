<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Nomenclatures;

/**
 * Nomenclatures test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class NomenclaturesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Nomenclatures();

        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCommentaire2());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDouble1());
        $this->assertNull($obj->getDouble2());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTexte2());
        $this->assertNull($obj->getTexte3());
        $this->assertNull($obj->getTexte4());
        $this->assertNull($obj->getTexte5());
        $this->assertNull($obj->getType());
    }
}
