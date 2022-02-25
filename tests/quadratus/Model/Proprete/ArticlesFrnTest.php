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

use WBW\Library\Quadratus\Model\Proprete\ArticlesFrn;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles frn test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticlesFrnTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesFrn();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new ArticlesFrn();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests setCommentaires()
     *
     * @return void
     */
    public function testSetCommentaires(): void {

        $obj = new ArticlesFrn();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests setConditionnement()
     *
     * @return void
     */
    public function testSetConditionnement(): void {

        $obj = new ArticlesFrn();

        $obj->setConditionnement("conditionnement");
        $this->assertEquals("conditionnement", $obj->getConditionnement());
    }

    /**
     * Tests setDelaiLe()
     *
     * @return void
     */
    public function testSetDelaiLe(): void {

        $obj = new ArticlesFrn();

        $obj->setDelaiLe(10);
        $this->assertEquals(10, $obj->getDelaiLe());
    }

    /**
     * Tests setDelaiLocal()
     *
     * @return void
     */
    public function testSetDelaiLocal(): void {

        $obj = new ArticlesFrn();

        $obj->setDelaiLocal(true);
        $this->assertEquals(true, $obj->getDelaiLocal());
    }

    /**
     * Tests setDelaiNombre()
     *
     * @return void
     */
    public function testSetDelaiNombre(): void {

        $obj = new ArticlesFrn();

        $obj->setDelaiNombre(10);
        $this->assertEquals(10, $obj->getDelaiNombre());
    }

    /**
     * Tests setDelaiType()
     *
     * @return void
     */
    public function testSetDelaiType(): void {

        $obj = new ArticlesFrn();

        $obj->setDelaiType(10);
        $this->assertEquals(10, $obj->getDelaiType());
    }

    /**
     * Tests setRefArticleFournisseur()
     *
     * @return void
     */
    public function testSetRefArticleFournisseur(): void {

        $obj = new ArticlesFrn();

        $obj->setRefArticleFournisseur("refArticleFournisseur");
        $this->assertEquals("refArticleFournisseur", $obj->getRefArticleFournisseur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
