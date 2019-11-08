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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Libelles;

/**
 * Libelles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class LibellesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Libelles();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new Libelles();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Libelles();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Libelles();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new Libelles();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
