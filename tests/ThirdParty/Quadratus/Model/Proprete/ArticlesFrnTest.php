<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ArticlesFrn;

/**
 * Articles frn model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesFrnTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ArticlesFrn();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getConditionnement());
        $this->assertNull($obj->getDelaiLe());
        $this->assertNull($obj->getDelaiLocal());
        $this->assertNull($obj->getDelaiNombre());
        $this->assertNull($obj->getDelaiType());
        $this->assertNull($obj->getRefArticleFournisseur());
    }

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle() {

        $obj = new ArticlesFrn();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeFournisseur() {

        $obj = new ArticlesFrn();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests the setCommentaires() method.
     *
     * @return void
     */
    public function testSetCommentaires() {

        $obj = new ArticlesFrn();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests the setConditionnement() method.
     *
     * @return void
     */
    public function testSetConditionnement() {

        $obj = new ArticlesFrn();

        $obj->setConditionnement("conditionnement");
        $this->assertEquals("conditionnement", $obj->getConditionnement());
    }

    /**
     * Tests the setDelaiLe() method.
     *
     * @return void
     */
    public function testSetDelaiLe() {

        $obj = new ArticlesFrn();

        $obj->setDelaiLe(10);
        $this->assertEquals(10, $obj->getDelaiLe());
    }

    /**
     * Tests the setDelaiLocal() method.
     *
     * @return void
     */
    public function testSetDelaiLocal() {

        $obj = new ArticlesFrn();

        $obj->setDelaiLocal(true);
        $this->assertEquals(true, $obj->getDelaiLocal());
    }

    /**
     * Tests the setDelaiNombre() method.
     *
     * @return void
     */
    public function testSetDelaiNombre() {

        $obj = new ArticlesFrn();

        $obj->setDelaiNombre(10);
        $this->assertEquals(10, $obj->getDelaiNombre());
    }

    /**
     * Tests the setDelaiType() method.
     *
     * @return void
     */
    public function testSetDelaiType() {

        $obj = new ArticlesFrn();

        $obj->setDelaiType(10);
        $this->assertEquals(10, $obj->getDelaiType());
    }

    /**
     * Tests the setRefArticleFournisseur() method.
     *
     * @return void
     */
    public function testSetRefArticleFournisseur() {

        $obj = new ArticlesFrn();

        $obj->setRefArticleFournisseur("refArticleFournisseur");
        $this->assertEquals("refArticleFournisseur", $obj->getRefArticleFournisseur());
    }
}
