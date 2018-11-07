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

use WBW\Library\Core\Quadratus\Model\QGI\SousRepertoiresAppels;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Sous repertoires appels model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class SousRepertoiresAppelsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SousRepertoiresAppels();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getProprietes());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new SousRepertoiresAppels();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new SousRepertoiresAppels();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNiveauLigne() method.
     *
     * @return void
     */
    public function testSetNiveauLigne() {

        $obj = new SousRepertoiresAppels();

        $obj->setNiveauLigne(10);
        $this->assertEquals(10, $obj->getNiveauLigne());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne() {

        $obj = new SousRepertoiresAppels();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setProprietes() method.
     *
     * @return void
     */
    public function testSetProprietes() {

        $obj = new SousRepertoiresAppels();

        $obj->setProprietes("proprietes");
        $this->assertEquals("proprietes", $obj->getProprietes());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new SousRepertoiresAppels();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

}
