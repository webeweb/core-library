<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\ArticlesFrnPrixA;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles frn prix a test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticlesFrnPrixATest extends AbstractTestCase {

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Test setDateDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new ArticlesFrnPrixA();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Test setPrixCond()
     *
     * @return void
     */
    public function testSetPrixCond(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setPrixCond(true);
        $this->assertTrue($obj->getPrixCond());
    }

    /**
     * Test setPxAchat()
     *
     * @return void
     */
    public function testSetPxAchat(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setPxAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPxAchat());
    }

    /**
     * Test setQteAchat()
     *
     * @return void
     */
    public function testSetQteAchat(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setQteAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getQteAchat());
    }

    /**
     * Test setQteCond()
     *
     * @return void
     */
    public function testSetQteCond(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setQteCond(10);
        $this->assertEquals(10, $obj->getQteCond());
    }

    /**
     * Test setRemise1()
     *
     * @return void
     */
    public function testSetRemise1(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise1());
    }

    /**
     * Test setRemise2()
     *
     * @return void
     */
    public function testSetRemise2(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise2());
    }

    /**
     * Test setRemise3()
     *
     * @return void
     */
    public function testSetRemise3(): void {

        $obj = new ArticlesFrnPrixA();

        $obj->setRemise3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise3());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticlesFrnPrixA();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getPrixCond());
        $this->assertNull($obj->getPxAchat());
        $this->assertNull($obj->getQteAchat());
        $this->assertNull($obj->getQteCond());
        $this->assertNull($obj->getRemise1());
        $this->assertNull($obj->getRemise2());
        $this->assertNull($obj->getRemise3());
    }
}
