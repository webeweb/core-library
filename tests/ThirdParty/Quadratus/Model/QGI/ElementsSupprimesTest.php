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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ElementsSupprimes;

/**
 * Elements supprimes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ElementsSupprimesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ElementsSupprimes();

        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDateElem());
        $this->assertNull($obj->getMemo1());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTypeElem());
        $this->assertNull($obj->getUniqId());
    }

    /**
     * Tests the setDate1() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate1() {

        // Set a Date/time mock.
        $date1 = new DateTime("2018-09-10");

        $obj = new ElementsSupprimes();

        $obj->setDate1($date1);
        $this->assertSame($date1, $obj->getDate1());
    }

    /**
     * Tests the setDateElem() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateElem() {

        // Set a Date/time mock.
        $dateElem = new DateTime("2018-09-10");

        $obj = new ElementsSupprimes();

        $obj->setDateElem($dateElem);
        $this->assertSame($dateElem, $obj->getDateElem());
    }

    /**
     * Tests the setMemo1() method.
     *
     * @return void
     */
    public function testSetMemo1() {

        $obj = new ElementsSupprimes();

        $obj->setMemo1("memo1");
        $this->assertEquals("memo1", $obj->getMemo1());
    }

    /**
     * Tests the setTexte1() method.
     *
     * @return void
     */
    public function testSetTexte1() {

        $obj = new ElementsSupprimes();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests the setTypeElem() method.
     *
     * @return void
     */
    public function testSetTypeElem() {

        $obj = new ElementsSupprimes();

        $obj->setTypeElem("typeElem");
        $this->assertEquals("typeElem", $obj->getTypeElem());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new ElementsSupprimes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }
}
