<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\MotsClefEtebac;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Mots clef etebac test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class MotsClefEtebacTest extends AbstractTestCase {

    /**
     * Tests setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new MotsClefEtebac();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new MotsClefEtebac();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setListeComptes()
     *
     * @return void
     */
    public function testSetListeComptes(): void {

        $obj = new MotsClefEtebac();

        $obj->setListeComptes("listeComptes");
        $this->assertEquals("listeComptes", $obj->getListeComptes());
    }

    /**
     * Tests setMot()
     *
     * @return void
     */
    public function testSetMot(): void {

        $obj = new MotsClefEtebac();

        $obj->setMot("mot");
        $this->assertEquals("mot", $obj->getMot());
    }

    /**
     * Tests setNumeroCompteDepense()
     *
     * @return void
     */
    public function testSetNumeroCompteDepense(): void {

        $obj = new MotsClefEtebac();

        $obj->setNumeroCompteDepense("numeroCompteDepense");
        $this->assertEquals("numeroCompteDepense", $obj->getNumeroCompteDepense());
    }

    /**
     * Tests setNumeroCompteRecette()
     *
     * @return void
     */
    public function testSetNumeroCompteRecette(): void {

        $obj = new MotsClefEtebac();

        $obj->setNumeroCompteRecette("numeroCompteRecette");
        $this->assertEquals("numeroCompteRecette", $obj->getNumeroCompteRecette());
    }

    /**
     * Tests setRegle()
     *
     * @return void
     */
    public function testSetRegle(): void {

        $obj = new MotsClefEtebac();

        $obj->setRegle("regle");
        $this->assertEquals("regle", $obj->getRegle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MotsClefEtebac();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getListeComptes());
        $this->assertNull($obj->getMot());
        $this->assertNull($obj->getNumeroCompteDepense());
        $this->assertNull($obj->getNumeroCompteRecette());
        $this->assertNull($obj->getRegle());
    }
}
