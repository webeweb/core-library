<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use WBW\Library\Core\Quadratus\Model\QGI\ConfidentialiteZones;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Confidentialite zones model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ConfidentialiteZonesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConfidentialiteZones();

        $this->assertNull($obj->getChamp());
        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests the setChamp() method.
     *
     * @return void
     */
    public function testSetChamp() {

        $obj = new ConfidentialiteZones();

        $obj->setChamp("champ");
        $this->assertEquals("champ", $obj->getChamp());
    }

    /**
     * Tests the setChapitre() method.
     *
     * @return void
     */
    public function testSetChapitre() {

        $obj = new ConfidentialiteZones();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new ConfidentialiteZones();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new ConfidentialiteZones();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

}
