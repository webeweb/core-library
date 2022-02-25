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
use WBW\Library\Quadratus\Model\QGI\ElementsSupprimes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Elements supprimes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ElementsSupprimesTest extends AbstractTestCase {

    /**
     * Tests setDate1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1(): void {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new ElementsSupprimes();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests setDateElem()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateElem(): void {

        // Set a Date/time mock.
        $dateElem = new DateTime("2018-09-10");

        $obj = new ElementsSupprimes();

        $obj->setDateElem($dateElem);
        $this->assertSame($dateElem, $obj->getDateElem());
    }

    /**
     * Tests setMemo1()
     *
     * @return void
     */
    public function testSetMemo1(): void {

        $obj = new ElementsSupprimes();

        $obj->setMemo1("memo1");
        $this->assertEquals("memo1", $obj->getMemo1());
    }

    /**
     * Tests setTexte1()
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new ElementsSupprimes();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests setTypeElem()
     *
     * @return void
     */
    public function testSetTypeElem(): void {

        $obj = new ElementsSupprimes();

        $obj->setTypeElem("typeElem");
        $this->assertEquals("typeElem", $obj->getTypeElem());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new ElementsSupprimes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ElementsSupprimes();

        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDateElem());
        $this->assertNull($obj->getMemo1());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTypeElem());
        $this->assertNull($obj->getUniqId());
    }
}
