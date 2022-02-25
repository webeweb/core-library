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
use Exception;
use WBW\Library\Quadratus\Model\QGI\Nomenclatures;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Nomenclatures test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class NomenclaturesTest extends AbstractTestCase {

    /**
     * Tests setCode1()
     *
     * @return void
     */
    public function testSetCode1(): void {

        $obj = new Nomenclatures();

        $obj->setCode1("code1");
        $this->assertEquals("code1", $obj->getCode1());
    }

    /**
     * Tests setCode2()
     *
     * @return void
     */
    public function testSetCode2(): void {

        $obj = new Nomenclatures();

        $obj->setCode2("code2");
        $this->assertEquals("code2", $obj->getCode2());
    }

    /**
     * Tests setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Nomenclatures();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Tests setCommentaire2()
     *
     * @return void
     */
    public function testSetCommentaire2(): void {

        $obj = new Nomenclatures();

        $obj->setCommentaire2("commentaire2");
        $this->assertEquals("commentaire2", $obj->getCommentaire2());
    }

    /**
     * Tests setDate1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new Nomenclatures();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests setDate2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate2(): void {

        // Set a Date/time mock.
        $date2 = new DateTime("2018-09-10");

        $obj = new Nomenclatures();

        $obj->setDate2($date2);
        $this->assertSame($date2, $obj->getDate2());
    }

    /**
     * Tests setDouble1()
     *
     * @return void
     */
    public function testSetDouble1(): void {

        $obj = new Nomenclatures();

        $obj->setDouble1(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble1());
    }

    /**
     * Tests setDouble2()
     *
     * @return void
     */
    public function testSetDouble2(): void {

        $obj = new Nomenclatures();

        $obj->setDouble2(10.092018);
        $this->assertEquals(10.092018, $obj->getDouble2());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Nomenclatures();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Tests setTexte1()
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new Nomenclatures();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests setTexte2()
     *
     * @return void
     */
    public function testSetTexte2(): void {

        $obj = new Nomenclatures();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }

    /**
     * Tests setTexte3()
     *
     * @return void
     */
    public function testSetTexte3(): void {

        $obj = new Nomenclatures();

        $obj->setTexte3("texte3");
        $this->assertEquals("texte3", $obj->getTexte3());
    }

    /**
     * Tests setTexte4()
     *
     * @return void
     */
    public function testSetTexte4(): void {

        $obj = new Nomenclatures();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }

    /**
     * Tests setTexte5()
     *
     * @return void
     */
    public function testSetTexte5(): void {

        $obj = new Nomenclatures();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }

    /**
     * Tests setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Nomenclatures();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Nomenclatures();

        $this->assertNull($obj->getCode1());
        $this->assertNull($obj->getCode2());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getCommentaire2());
        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDate2());
        $this->assertNull($obj->getDouble1());
        $this->assertNull($obj->getDouble2());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTexte2());
        $this->assertNull($obj->getTexte3());
        $this->assertNull($obj->getTexte4());
        $this->assertNull($obj->getTexte5());
        $this->assertNull($obj->getType());
    }
}
