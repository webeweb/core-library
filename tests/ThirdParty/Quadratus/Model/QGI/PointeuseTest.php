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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Pointeuse;

/**
 * Pointeuse test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PointeuseTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollab() method.
     *
     * @return void
     */
    public function testSetCodeCollab() {

        $obj = new Pointeuse();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests the setDateHeureSysteme() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeureSysteme() {

        // Set a Date/time mock.
        $dateHeureSysteme = new DateTime("2018-09-10");

        $obj = new Pointeuse();

        $obj->setDateHeureSysteme($dateHeureSysteme);
        $this->assertSame($dateHeureSysteme, $obj->getDateHeureSysteme());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new Pointeuse();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setIdPointeuse() method.
     *
     * @return void
     */
    public function testSetIdPointeuse() {

        $obj = new Pointeuse();

        $obj->setIdPointeuse(10);
        $this->assertEquals(10, $obj->getIdPointeuse());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Pointeuse();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDateHeureSysteme());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getIdPointeuse());
    }
}
