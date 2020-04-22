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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Qualifiants;

/**
 * Qualifiants test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class QualifiantsTest extends AbstractTestCase {

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Qualifiants();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setColonne() method.
     *
     * @return void
     */
    public function testSetColonne() {

        $obj = new Qualifiants();

        $obj->setColonne(10);
        $this->assertEquals(10, $obj->getColonne());
    }

    /**
     * Tests the setVisuAppels() method.
     *
     * @return void
     */
    public function testSetVisuAppels() {

        $obj = new Qualifiants();

        $obj->setVisuAppels(true);
        $this->assertEquals(true, $obj->getVisuAppels());
    }

    /**
     * Tests the setVisuDocuments() method.
     *
     * @return void
     */
    public function testSetVisuDocuments() {

        $obj = new Qualifiants();

        $obj->setVisuDocuments(true);
        $this->assertEquals(true, $obj->getVisuDocuments());
    }

    /**
     * Tests the setVisuEvenements() method.
     *
     * @return void
     */
    public function testSetVisuEvenements() {

        $obj = new Qualifiants();

        $obj->setVisuEvenements(true);
        $this->assertEquals(true, $obj->getVisuEvenements());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Qualifiants();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getColonne());
        $this->assertNull($obj->getVisuAppels());
        $this->assertNull($obj->getVisuDocuments());
        $this->assertNull($obj->getVisuEvenements());
    }
}
