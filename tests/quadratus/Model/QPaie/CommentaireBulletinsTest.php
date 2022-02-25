<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\CommentaireBulletins;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Commentaire bulletins test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CommentaireBulletinsTest extends AbstractTestCase {

    /**
     * Tests setCommentaire1()
     *
     * @return void
     */
    public function testSetCommentaire1(): void {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire1("commentaire1");
        $this->assertEquals("commentaire1", $obj->getCommentaire1());
    }

    /**
     * Tests setCommentaire2()
     *
     * @return void
     */
    public function testSetCommentaire2(): void {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire2("commentaire2");
        $this->assertEquals("commentaire2", $obj->getCommentaire2());
    }

    /**
     * Tests setCommentaire3()
     *
     * @return void
     */
    public function testSetCommentaire3(): void {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire3("commentaire3");
        $this->assertEquals("commentaire3", $obj->getCommentaire3());
    }

    /**
     * Tests setCommentaire4()
     *
     * @return void
     */
    public function testSetCommentaire4(): void {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire4("commentaire4");
        $this->assertEquals("commentaire4", $obj->getCommentaire4());
    }

    /**
     * Tests setCommentaire5()
     *
     * @return void
     */
    public function testSetCommentaire5(): void {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire5("commentaire5");
        $this->assertEquals("commentaire5", $obj->getCommentaire5());
    }

    /**
     * Tests setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new CommentaireBulletins();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new CommentaireBulletins();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new CommentaireBulletins();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests setTxtCommentaireRtf()
     *
     * @return void
     */
    public function testSetTxtCommentaireRtf(): void {

        $obj = new CommentaireBulletins();

        $obj->setTxtCommentaireRtf("txtCommentaireRtf");
        $this->assertEquals("txtCommentaireRtf", $obj->getTxtCommentaireRtf());
    }

    /**
     * Tests setTxtCommentaireSaisi()
     *
     * @return void
     */
    public function testSetTxtCommentaireSaisi(): void {

        $obj = new CommentaireBulletins();

        $obj->setTxtCommentaireSaisi("txtCommentaireSaisi");
        $this->assertEquals("txtCommentaireSaisi", $obj->getTxtCommentaireSaisi());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CommentaireBulletins();

        $this->assertNull($obj->getCommentaire1());
        $this->assertNull($obj->getCommentaire2());
        $this->assertNull($obj->getCommentaire3());
        $this->assertNull($obj->getCommentaire4());
        $this->assertNull($obj->getCommentaire5());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxtCommentaireRtf());
        $this->assertNull($obj->getTxtCommentaireSaisi());
    }
}
