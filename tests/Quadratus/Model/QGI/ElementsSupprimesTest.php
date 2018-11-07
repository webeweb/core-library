<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\ElementsSupprimes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Elements supprimes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ElementsSupprimesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ElementsSupprimes();

        $this->assertNull($obj->getDate1());
        $this->assertNull($obj->getDateElem());
        $this->assertNull($obj->getMemo1());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTypeElem());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setDate1() method.
     *
     * @return void
     */
    public function testSetDate1() {

        $obj = new ElementsSupprimes();

        $obj->setDate1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDate1());
    }

    /**
     * Tests the setDateElem() method.
     *
     * @return void
     */
    public function testSetDateElem() {

        $obj = new ElementsSupprimes();

        $obj->setDateElem(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateElem());
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
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new ElementsSupprimes();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

}
