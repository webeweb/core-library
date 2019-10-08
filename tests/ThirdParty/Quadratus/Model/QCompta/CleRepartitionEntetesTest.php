<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\CleRepartitionEntetes;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Cle repartition entetes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class CleRepartitionEntetesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CleRepartitionEntetes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTypeCle());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new CleRepartitionEntetes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new CleRepartitionEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setTotal() method.
     *
     * @return void
     */
    public function testSetTotal() {

        $obj = new CleRepartitionEntetes();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Tests the setTypeCle() method.
     *
     * @return void
     */
    public function testSetTypeCle() {

        $obj = new CleRepartitionEntetes();

        $obj->setTypeCle("typeCle");
        $this->assertEquals("typeCle", $obj->getTypeCle());
    }
}
