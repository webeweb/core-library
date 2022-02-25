<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\Qualifiants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Qualifiants test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class QualifiantsTest extends AbstractTestCase {

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Qualifiants();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setColonne()
     *
     * @return void
     */
    public function testSetColonne(): void {

        $obj = new Qualifiants();

        $obj->setColonne(10);
        $this->assertEquals(10, $obj->getColonne());
    }

    /**
     * Tests setVisuAppels()
     *
     * @return void
     */
    public function testSetVisuAppels(): void {

        $obj = new Qualifiants();

        $obj->setVisuAppels(true);
        $this->assertEquals(true, $obj->getVisuAppels());
    }

    /**
     * Tests setVisuDocuments()
     *
     * @return void
     */
    public function testSetVisuDocuments(): void {

        $obj = new Qualifiants();

        $obj->setVisuDocuments(true);
        $this->assertEquals(true, $obj->getVisuDocuments());
    }

    /**
     * Tests setVisuEvenements()
     *
     * @return void
     */
    public function testSetVisuEvenements(): void {

        $obj = new Qualifiants();

        $obj->setVisuEvenements(true);
        $this->assertEquals(true, $obj->getVisuEvenements());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Qualifiants();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getColonne());
        $this->assertNull($obj->getVisuAppels());
        $this->assertNull($obj->getVisuDocuments());
        $this->assertNull($obj->getVisuEvenements());
    }
}
