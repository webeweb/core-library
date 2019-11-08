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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Libelles;

/**
 * Libelles test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LibellesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Libelles();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getTypeMontant());
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
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant() {

        $obj = new Libelles();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
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

    /**
     * Tests the setTypeMontant() method.
     *
     * @return void
     */
    public function testSetTypeMontant() {

        $obj = new Libelles();

        $obj->setTypeMontant("typeMontant");
        $this->assertEquals("typeMontant", $obj->getTypeMontant());
    }
}
