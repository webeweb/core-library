<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\ConventionsColLibelles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Conventions col libelles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ConventionsColLibellesTest extends AbstractTestCase {

    /**
     * Test setActive()
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new ConventionsColLibelles();

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Test setCategSalarie()
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new ConventionsColLibelles();

        $obj->setCategSalarie(10);
        $this->assertEquals(10, $obj->getCategSalarie());
    }

    /**
     * Test setCodeConvention()
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new ConventionsColLibelles();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Test setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new ConventionsColLibelles();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Test setFraisSanteAm()
     *
     * @return void
     */
    public function testSetFraisSanteAm(): void {

        $obj = new ConventionsColLibelles();

        $obj->setFraisSanteAm(true);
        $this->assertTrue($obj->getFraisSanteAm());
    }

    /**
     * Test setIndiceCateg()
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new ConventionsColLibelles();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ConventionsColLibelles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new ConventionsColLibelles();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConventionsColLibelles();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getCategSalarie());
        $this->assertNull($obj->getCodeConvention());
        $this->assertNull($obj->getCodeLibelle());
        $this->assertNull($obj->getFraisSanteAm());
        $this->assertNull($obj->getIndiceCateg());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getPosition());
    }
}
