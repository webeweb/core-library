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

use WBW\Library\Quadratus\Model\QGI\ArticlesLangues;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles langues test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ArticlesLanguesTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesLangues();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeLangue()
     *
     * @return void
     */
    public function testSetCodeLangue(): void {

        $obj = new ArticlesLangues();

        $obj->setCodeLangue("codeLangue");
        $this->assertEquals("codeLangue", $obj->getCodeLangue());
    }

    /**
     * Tests setDesignationApres()
     *
     * @return void
     */
    public function testSetDesignationApres(): void {

        $obj = new ArticlesLangues();

        $obj->setDesignationApres("designationApres");
        $this->assertEquals("designationApres", $obj->getDesignationApres());
    }

    /**
     * Tests setDesignationAvant()
     *
     * @return void
     */
    public function testSetDesignationAvant(): void {

        $obj = new ArticlesLangues();

        $obj->setDesignationAvant("designationAvant");
        $this->assertEquals("designationAvant", $obj->getDesignationAvant());
    }

    /**
     * Tests setIntitule1()
     *
     * @return void
     */
    public function testSetIntitule1(): void {

        $obj = new ArticlesLangues();

        $obj->setIntitule1("intitule1");
        $this->assertEquals("intitule1", $obj->getIntitule1());
    }

    /**
     * Tests setIntitule2()
     *
     * @return void
     */
    public function testSetIntitule2(): void {

        $obj = new ArticlesLangues();

        $obj->setIntitule2("intitule2");
        $this->assertEquals("intitule2", $obj->getIntitule2());
    }

    /**
     * Tests setIntitule3()
     *
     * @return void
     */
    public function testSetIntitule3(): void {

        $obj = new ArticlesLangues();

        $obj->setIntitule3("intitule3");
        $this->assertEquals("intitule3", $obj->getIntitule3());
    }

    /**
     * Tests setIntitule4()
     *
     * @return void
     */
    public function testSetIntitule4(): void {

        $obj = new ArticlesLangues();

        $obj->setIntitule4("intitule4");
        $this->assertEquals("intitule4", $obj->getIntitule4());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticlesLangues();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeLangue());
        $this->assertNull($obj->getDesignationApres());
        $this->assertNull($obj->getDesignationAvant());
        $this->assertNull($obj->getIntitule1());
        $this->assertNull($obj->getIntitule2());
        $this->assertNull($obj->getIntitule3());
        $this->assertNull($obj->getIntitule4());
    }
}
