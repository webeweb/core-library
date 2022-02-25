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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\ArticleFournisseur;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Article fournisseur test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticleFournisseurTest extends AbstractTestCase {

    /**
     * Tests setAvtDerCodeDevise()
     *
     * @return void
     */
    public function testSetAvtDerCodeDevise(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerCodeDevise("avtDerCodeDevise");
        $this->assertEquals("avtDerCodeDevise", $obj->getAvtDerCodeDevise());
    }

    /**
     * Tests setAvtDerDateAchat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetAvtDerDateAchat(): void {

        // Set a Date/time mock.
        $avtDerDateAchat = new DateTime("2018-09-10");

        $obj = new ArticleFournisseur();

        $obj->setAvtDerDateAchat($avtDerDateAchat);
        $this->assertSame($avtDerDateAchat, $obj->getAvtDerDateAchat());
    }

    /**
     * Tests setAvtDerEuros()
     *
     * @return void
     */
    public function testSetAvtDerEuros(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerEuros(true);
        $this->assertEquals(true, $obj->getAvtDerEuros());
    }

    /**
     * Tests setAvtDerPxAchat()
     *
     * @return void
     */
    public function testSetAvtDerPxAchat(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getAvtDerPxAchat());
    }

    /**
     * Tests setAvtDerQteAchat()
     *
     * @return void
     */
    public function testSetAvtDerQteAchat(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerQteAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getAvtDerQteAchat());
    }

    /**
     * Tests setAvtDerRemise1()
     *
     * @return void
     */
    public function testSetAvtDerRemise1(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getAvtDerRemise1());
    }

    /**
     * Tests setAvtDerRemise2()
     *
     * @return void
     */
    public function testSetAvtDerRemise2(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getAvtDerRemise2());
    }

    /**
     * Tests setAvtDerRemise3()
     *
     * @return void
     */
    public function testSetAvtDerRemise3(): void {

        $obj = new ArticleFournisseur();

        $obj->setAvtDerRemise3(10.092018);
        $this->assertEquals(10.092018, $obj->getAvtDerRemise3());
    }

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticleFournisseur();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new ArticleFournisseur();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Tests setCommentaires()
     *
     * @return void
     */
    public function testSetCommentaires(): void {

        $obj = new ArticleFournisseur();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests setConditionnement()
     *
     * @return void
     */
    public function testSetConditionnement(): void {

        $obj = new ArticleFournisseur();

        $obj->setConditionnement("conditionnement");
        $this->assertEquals("conditionnement", $obj->getConditionnement());
    }

    /**
     * Tests setDelaiLe()
     *
     * @return void
     */
    public function testSetDelaiLe(): void {

        $obj = new ArticleFournisseur();

        $obj->setDelaiLe(10);
        $this->assertEquals(10, $obj->getDelaiLe());
    }

    /**
     * Tests setDelaiNombre()
     *
     * @return void
     */
    public function testSetDelaiNombre(): void {

        $obj = new ArticleFournisseur();

        $obj->setDelaiNombre(10);
        $this->assertEquals(10, $obj->getDelaiNombre());
    }

    /**
     * Tests setDelaiType()
     *
     * @return void
     */
    public function testSetDelaiType(): void {

        $obj = new ArticleFournisseur();

        $obj->setDelaiType(10);
        $this->assertEquals(10, $obj->getDelaiType());
    }

    /**
     * Tests setDerCodeDevise()
     *
     * @return void
     */
    public function testSetDerCodeDevise(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerCodeDevise("derCodeDevise");
        $this->assertEquals("derCodeDevise", $obj->getDerCodeDevise());
    }

    /**
     * Tests setDerDateAchat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDerDateAchat(): void {

        // Set a Date/time mock.
        $derDateAchat = new DateTime("2018-09-10");

        $obj = new ArticleFournisseur();

        $obj->setDerDateAchat($derDateAchat);
        $this->assertSame($derDateAchat, $obj->getDerDateAchat());
    }

    /**
     * Tests setDerEuros()
     *
     * @return void
     */
    public function testSetDerEuros(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerEuros(true);
        $this->assertEquals(true, $obj->getDerEuros());
    }

    /**
     * Tests setDerPxAchat()
     *
     * @return void
     */
    public function testSetDerPxAchat(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getDerPxAchat());
    }

    /**
     * Tests setDerQteAchat()
     *
     * @return void
     */
    public function testSetDerQteAchat(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerQteAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getDerQteAchat());
    }

    /**
     * Tests setDerRemise1()
     *
     * @return void
     */
    public function testSetDerRemise1(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getDerRemise1());
    }

    /**
     * Tests setDerRemise2()
     *
     * @return void
     */
    public function testSetDerRemise2(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getDerRemise2());
    }

    /**
     * Tests setDerRemise3()
     *
     * @return void
     */
    public function testSetDerRemise3(): void {

        $obj = new ArticleFournisseur();

        $obj->setDerRemise3(10.092018);
        $this->assertEquals(10.092018, $obj->getDerRemise3());
    }

    /**
     * Tests setMiniCodeDevise()
     *
     * @return void
     */
    public function testSetMiniCodeDevise(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniCodeDevise("miniCodeDevise");
        $this->assertEquals("miniCodeDevise", $obj->getMiniCodeDevise());
    }

    /**
     * Tests setMiniDateAchat()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMiniDateAchat(): void {

        // Set a Date/time mock.
        $miniDateAchat = new DateTime("2018-09-10");

        $obj = new ArticleFournisseur();

        $obj->setMiniDateAchat($miniDateAchat);
        $this->assertSame($miniDateAchat, $obj->getMiniDateAchat());
    }

    /**
     * Tests setMiniEuros()
     *
     * @return void
     */
    public function testSetMiniEuros(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniEuros(true);
        $this->assertEquals(true, $obj->getMiniEuros());
    }

    /**
     * Tests setMiniPxAchat()
     *
     * @return void
     */
    public function testSetMiniPxAchat(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniPxAchat());
    }

    /**
     * Tests setMiniQteAchat()
     *
     * @return void
     */
    public function testSetMiniQteAchat(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniQteAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniQteAchat());
    }

    /**
     * Tests setMiniRemise1()
     *
     * @return void
     */
    public function testSetMiniRemise1(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniRemise1());
    }

    /**
     * Tests setMiniRemise2()
     *
     * @return void
     */
    public function testSetMiniRemise2(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniRemise2());
    }

    /**
     * Tests setMiniRemise3()
     *
     * @return void
     */
    public function testSetMiniRemise3(): void {

        $obj = new ArticleFournisseur();

        $obj->setMiniRemise3(10.092018);
        $this->assertEquals(10.092018, $obj->getMiniRemise3());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new ArticleFournisseur();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setQteEconomique()
     *
     * @return void
     */
    public function testSetQteEconomique(): void {

        $obj = new ArticleFournisseur();

        $obj->setQteEconomique(10.092018);
        $this->assertEquals(10.092018, $obj->getQteEconomique());
    }

    /**
     * Tests setRefArticleFournisseur()
     *
     * @return void
     */
    public function testSetRefArticleFournisseur(): void {

        $obj = new ArticleFournisseur();

        $obj->setRefArticleFournisseur("refArticleFournisseur");
        $this->assertEquals("refArticleFournisseur", $obj->getRefArticleFournisseur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticleFournisseur();

        $this->assertNull($obj->getAvtDerCodeDevise());
        $this->assertNull($obj->getAvtDerDateAchat());
        $this->assertNull($obj->getAvtDerEuros());
        $this->assertNull($obj->getAvtDerPxAchat());
        $this->assertNull($obj->getAvtDerQteAchat());
        $this->assertNull($obj->getAvtDerRemise1());
        $this->assertNull($obj->getAvtDerRemise2());
        $this->assertNull($obj->getAvtDerRemise3());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getConditionnement());
        $this->assertNull($obj->getDelaiLe());
        $this->assertNull($obj->getDelaiNombre());
        $this->assertNull($obj->getDelaiType());
        $this->assertNull($obj->getDerCodeDevise());
        $this->assertNull($obj->getDerDateAchat());
        $this->assertNull($obj->getDerEuros());
        $this->assertNull($obj->getDerPxAchat());
        $this->assertNull($obj->getDerQteAchat());
        $this->assertNull($obj->getDerRemise1());
        $this->assertNull($obj->getDerRemise2());
        $this->assertNull($obj->getDerRemise3());
        $this->assertNull($obj->getMiniCodeDevise());
        $this->assertNull($obj->getMiniDateAchat());
        $this->assertNull($obj->getMiniEuros());
        $this->assertNull($obj->getMiniPxAchat());
        $this->assertNull($obj->getMiniQteAchat());
        $this->assertNull($obj->getMiniRemise1());
        $this->assertNull($obj->getMiniRemise2());
        $this->assertNull($obj->getMiniRemise3());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getQteEconomique());
        $this->assertNull($obj->getRefArticleFournisseur());
    }
}
