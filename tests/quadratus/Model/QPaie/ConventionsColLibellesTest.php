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
     * Tests setActive()
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new ConventionsColLibelles();

        $obj->setActive(true);
        $this->assertEquals(true, $obj->getActive());
    }

    /**
     * Tests setCategSalarie()
     *
     * @return void
     */
    public function testSetCategSalarie(): void {

        $obj = new ConventionsColLibelles();

        $obj->setCategSalarie(10);
        $this->assertEquals(10, $obj->getCategSalarie());
    }

    /**
     * Tests setCodeConvention()
     *
     * @return void
     */
    public function testSetCodeConvention(): void {

        $obj = new ConventionsColLibelles();

        $obj->setCodeConvention("codeConvention");
        $this->assertEquals("codeConvention", $obj->getCodeConvention());
    }

    /**
     * Tests setCodeLibelle()
     *
     * @return void
     */
    public function testSetCodeLibelle(): void {

        $obj = new ConventionsColLibelles();

        $obj->setCodeLibelle("codeLibelle");
        $this->assertEquals("codeLibelle", $obj->getCodeLibelle());
    }

    /**
     * Tests setFraisSanteAm()
     *
     * @return void
     */
    public function testSetFraisSanteAm(): void {

        $obj = new ConventionsColLibelles();

        $obj->setFraisSanteAm(true);
        $this->assertEquals(true, $obj->getFraisSanteAm());
    }

    /**
     * Tests setIndiceCateg()
     *
     * @return void
     */
    public function testSetIndiceCateg(): void {

        $obj = new ConventionsColLibelles();

        $obj->setIndiceCateg(10);
        $this->assertEquals(10, $obj->getIndiceCateg());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new ConventionsColLibelles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setPosition()
     *
     * @return void
     */
    public function testSetPosition(): void {

        $obj = new ConventionsColLibelles();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests __construct()
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
