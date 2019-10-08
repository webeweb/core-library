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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\MotsClefETEBAC;

/**
 * Mots clef e t e b a c model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class MotsClefETEBACTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new MotsClefETEBAC();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getListeComptes());
        $this->assertNull($obj->getMot());
        $this->assertNull($obj->getNumeroCompteDepense());
        $this->assertNull($obj->getNumeroCompteRecette());
        $this->assertNull($obj->getRegle());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new MotsClefETEBAC();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new MotsClefETEBAC();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setListeComptes() method.
     *
     * @return void
     */
    public function testSetListeComptes() {

        $obj = new MotsClefETEBAC();

        $obj->setListeComptes("listeComptes");
        $this->assertEquals("listeComptes", $obj->getListeComptes());
    }

    /**
     * Tests the setMot() method.
     *
     * @return void
     */
    public function testSetMot() {

        $obj = new MotsClefETEBAC();

        $obj->setMot("mot");
        $this->assertEquals("mot", $obj->getMot());
    }

    /**
     * Tests the setNumeroCompteDepense() method.
     *
     * @return void
     */
    public function testSetNumeroCompteDepense() {

        $obj = new MotsClefETEBAC();

        $obj->setNumeroCompteDepense("numeroCompteDepense");
        $this->assertEquals("numeroCompteDepense", $obj->getNumeroCompteDepense());
    }

    /**
     * Tests the setNumeroCompteRecette() method.
     *
     * @return void
     */
    public function testSetNumeroCompteRecette() {

        $obj = new MotsClefETEBAC();

        $obj->setNumeroCompteRecette("numeroCompteRecette");
        $this->assertEquals("numeroCompteRecette", $obj->getNumeroCompteRecette());
    }

    /**
     * Tests the setRegle() method.
     *
     * @return void
     */
    public function testSetRegle() {

        $obj = new MotsClefETEBAC();

        $obj->setRegle("regle");
        $this->assertEquals("regle", $obj->getRegle());
    }
}
