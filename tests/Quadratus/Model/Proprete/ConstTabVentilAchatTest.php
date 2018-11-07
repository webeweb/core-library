<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use WBW\Library\Core\Quadratus\Model\Proprete\ConstTabVentilAchat;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Const tab ventil achat model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class ConstTabVentilAchatTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ConstTabVentilAchat();

        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getCodeVentilFourn());
        $this->assertNull($obj->getCompteVentil());
        $this->assertNull($obj->getLibelle());
    }

    /**
     * Tests the setCodeVentilArticle() method.
     *
     * @return void
     */
    public function testSetCodeVentilArticle() {

        $obj = new ConstTabVentilAchat();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Tests the setCodeVentilFourn() method.
     *
     * @return void
     */
    public function testSetCodeVentilFourn() {

        $obj = new ConstTabVentilAchat();

        $obj->setCodeVentilFourn("codeVentilFourn");
        $this->assertEquals("codeVentilFourn", $obj->getCodeVentilFourn());
    }

    /**
     * Tests the setCompteVentil() method.
     *
     * @return void
     */
    public function testSetCompteVentil() {

        $obj = new ConstTabVentilAchat();

        $obj->setCompteVentil("compteVentil");
        $this->assertEquals("compteVentil", $obj->getCompteVentil());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ConstTabVentilAchat();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

}
