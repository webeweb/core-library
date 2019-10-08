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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\FonctionsControles;

/**
 * Fonctions controles model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FonctionsControlesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FonctionsControles();

        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMotControle());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new FonctionsControles();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setMotControle() method.
     *
     * @return void
     */
    public function testSetMotControle() {

        $obj = new FonctionsControles();

        $obj->setMotControle("motControle");
        $this->assertEquals("motControle", $obj->getMotControle());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new FonctionsControles();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }
}
