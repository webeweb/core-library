<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\PointageReglementsTetes;

/**
 * Pointage reglements tetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PointageReglementsTetesTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollCreation() method.
     *
     * @return void
     */
    public function testSetCodeCollCreation(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollCreation("codeCollCreation");
        $this->assertEquals("codeCollCreation", $obj->getCodeCollCreation());
    }

    /**
     * Tests the setCodeCollGenere() method.
     *
     * @return void
     */
    public function testSetCodeCollGenere(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollGenere("codeCollGenere");
        $this->assertEquals("codeCollGenere", $obj->getCodeCollGenere());
    }

    /**
     * Tests the setCodeCollModif() method.
     *
     * @return void
     */
    public function testSetCodeCollModif(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollModif("codeCollModif");
        $this->assertEquals("codeCollModif", $obj->getCodeCollModif());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new PointageReglementsTetes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateGenere() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateGenere(): void {

        // Set a Date/time mock.
        $dateGenere = new DateTime("2018-09-10");

        $obj = new PointageReglementsTetes();

        $obj->setDateGenere($dateGenere);
        $this->assertSame($dateGenere, $obj->getDateGenere());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new PointageReglementsTetes();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new PointageReglementsTetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontantSaisi() method.
     *
     * @return void
     */
    public function testSetMontantSaisi(): void {

        $obj = new PointageReglementsTetes();

        $obj->setMontantSaisi(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisi());
    }

    /**
     * Tests the setNumCptPayeur() method.
     *
     * @return void
     */
    public function testSetNumCptPayeur(): void {

        $obj = new PointageReglementsTetes();

        $obj->setNumCptPayeur("numCptPayeur");
        $this->assertEquals("numCptPayeur", $obj->getNumCptPayeur());
    }

    /**
     * Tests the setNumDoss() method.
     *
     * @return void
     */
    public function testSetNumDoss(): void {

        $obj = new PointageReglementsTetes();

        $obj->setNumDoss("numDoss");
        $this->assertEquals("numDoss", $obj->getNumDoss());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointageReglementsTetes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollCreation());
        $this->assertNull($obj->getCodeCollGenere());
        $this->assertNull($obj->getCodeCollModif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateGenere());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantSaisi());
        $this->assertNull($obj->getNumCptPayeur());
        $this->assertNull($obj->getNumDoss());
    }
}
