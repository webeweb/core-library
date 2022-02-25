<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\ConstTabVentilAchat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Const tab ventil achat test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstTabVentilAchatTest extends AbstractTestCase {

    /**
     * Tests setCodeVentilArticle()
     *
     * @return void
     */
    public function testSetCodeVentilArticle(): void {

        $obj = new ConstTabVentilAchat();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Tests setCodeVentilFourn()
     *
     * @return void
     */
    public function testSetCodeVentilFourn(): void {

        $obj = new ConstTabVentilAchat();

        $obj->setCodeVentilFourn("codeVentilFourn");
        $this->assertEquals("codeVentilFourn", $obj->getCodeVentilFourn());
    }

    /**
     * Tests setCompteVentil()
     *
     * @return void
     */
    public function testSetCompteVentil(): void {

        $obj = new ConstTabVentilAchat();

        $obj->setCompteVentil("compteVentil");
        $this->assertEquals("compteVentil", $obj->getCompteVentil());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ConstTabVentilAchat();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstTabVentilAchat();

        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getCodeVentilFourn());
        $this->assertNull($obj->getCompteVentil());
        $this->assertNull($obj->getLibelle());
    }
}
