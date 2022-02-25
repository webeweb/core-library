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

use WBW\Library\Quadratus\Model\Proprete\ConstTabTvaAchat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Const tab tva achat test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ConstTabTvaAchatTest extends AbstractTestCase {

    /**
     * Tests setCodeTvaArticle()
     *
     * @return void
     */
    public function testSetCodeTvaArticle(): void {

        $obj = new ConstTabTvaAchat();

        $obj->setCodeTvaArticle("codeTvaArticle");
        $this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
    }

    /**
     * Tests setCodeTvaFourn()
     *
     * @return void
     */
    public function testSetCodeTvaFourn(): void {

        $obj = new ConstTabTvaAchat();

        $obj->setCodeTvaFourn("codeTvaFourn");
        $this->assertEquals("codeTvaFourn", $obj->getCodeTvaFourn());
    }

    /**
     * Tests setCompteTva()
     *
     * @return void
     */
    public function testSetCompteTva(): void {

        $obj = new ConstTabTvaAchat();

        $obj->setCompteTva("compteTva");
        $this->assertEquals("compteTva", $obj->getCompteTva());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ConstTabTvaAchat();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setTauxTva()
     *
     * @return void
     */
    public function testSetTauxTva(): void {

        $obj = new ConstTabTvaAchat();

        $obj->setTauxTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTva());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstTabTvaAchat();

        $this->assertNull($obj->getCodeTvaArticle());
        $this->assertNull($obj->getCodeTvaFourn());
        $this->assertNull($obj->getCompteTva());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getTauxTva());
    }
}
