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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Materiels;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Materiels test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class MaterielsTest extends AbstractTestCase {

    /**
     * Test setCarTec()
     *
     * @return void
     */
    public function testSetCarTec(): void {

        $obj = new Materiels();

        $obj->setCarTec("carTec");
        $this->assertEquals("carTec", $obj->getCarTec());
    }

    /**
     * Test setCategorie()
     *
     * @return void
     */
    public function testSetCategorie(): void {

        $obj = new Materiels();

        $obj->setCategorie("categorie");
        $this->assertEquals("categorie", $obj->getCategorie());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Materiels();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeIntervenant()
     *
     * @return void
     */
    public function testSetCodeIntervenant(): void {

        $obj = new Materiels();

        $obj->setCodeIntervenant("codeIntervenant");
        $this->assertEquals("codeIntervenant", $obj->getCodeIntervenant());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Materiels();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateAchat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAchat(): void {

        // Set a Date/time mock.
        $dateAchat = new DateTime("2018-09-10");

        $obj = new Materiels();

        $obj->setDateAchat($dateAchat);
        $this->assertSame($dateAchat, $obj->getDateAchat());
    }

    /**
     * Test setDateFinUtil()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinUtil(): void {

        // Set a Date/time mock.
        $dateFinUtil = new DateTime("2018-09-10");

        $obj = new Materiels();

        $obj->setDateFinUtil($dateFinUtil);
        $this->assertSame($dateFinUtil, $obj->getDateFinUtil());
    }

    /**
     * Test setIndiceAff()
     *
     * @return void
     */
    public function testSetIndiceAff(): void {

        $obj = new Materiels();

        $obj->setIndiceAff(10);
        $this->assertEquals(10, $obj->getIndiceAff());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Materiels();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Materiels();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setSousCategorie()
     *
     * @return void
     */
    public function testSetSousCategorie(): void {

        $obj = new Materiels();

        $obj->setSousCategorie("sousCategorie");
        $this->assertEquals("sousCategorie", $obj->getSousCategorie());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Materiels();

        $this->assertNull($obj->getCarTec());
        $this->assertNull($obj->getCategorie());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeIntervenant());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateAchat());
        $this->assertNull($obj->getDateFinUtil());
        $this->assertNull($obj->getIndiceAff());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getSousCategorie());
    }
}
