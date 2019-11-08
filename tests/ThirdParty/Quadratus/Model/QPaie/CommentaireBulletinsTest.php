<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\CommentaireBulletins;

/**
 * Commentaire bulletins test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class CommentaireBulletinsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

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

    /**
     * Tests the setCommentaire1() method.
     *
     * @return void
     */
    public function testSetCommentaire1() {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire1("commentaire1");
        $this->assertEquals("commentaire1", $obj->getCommentaire1());
    }

    /**
     * Tests the setCommentaire2() method.
     *
     * @return void
     */
    public function testSetCommentaire2() {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire2("commentaire2");
        $this->assertEquals("commentaire2", $obj->getCommentaire2());
    }

    /**
     * Tests the setCommentaire3() method.
     *
     * @return void
     */
    public function testSetCommentaire3() {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire3("commentaire3");
        $this->assertEquals("commentaire3", $obj->getCommentaire3());
    }

    /**
     * Tests the setCommentaire4() method.
     *
     * @return void
     */
    public function testSetCommentaire4() {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire4("commentaire4");
        $this->assertEquals("commentaire4", $obj->getCommentaire4());
    }

    /**
     * Tests the setCommentaire5() method.
     *
     * @return void
     */
    public function testSetCommentaire5() {

        $obj = new CommentaireBulletins();

        $obj->setCommentaire5("commentaire5");
        $this->assertEquals("commentaire5", $obj->getCommentaire5());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new CommentaireBulletins();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new CommentaireBulletins();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new CommentaireBulletins();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Tests the setTxtCommentaireRtf() method.
     *
     * @return void
     */
    public function testSetTxtCommentaireRtf() {

        $obj = new CommentaireBulletins();

        $obj->setTxtCommentaireRtf("txtCommentaireRtf");
        $this->assertEquals("txtCommentaireRtf", $obj->getTxtCommentaireRtf());
    }

    /**
     * Tests the setTxtCommentaireSaisi() method.
     *
     * @return void
     */
    public function testSetTxtCommentaireSaisi() {

        $obj = new CommentaireBulletins();

        $obj->setTxtCommentaireSaisi("txtCommentaireSaisi");
        $this->assertEquals("txtCommentaireSaisi", $obj->getTxtCommentaireSaisi());
    }
}
