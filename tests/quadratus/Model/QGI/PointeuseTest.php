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
use WBW\Library\Quadratus\Model\QGI\Pointeuse;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Pointeuse test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class PointeuseTest extends AbstractTestCase {

    /**
     * Tests setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new Pointeuse();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Tests setDateHeureSysteme()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeureSysteme(): void {

        // Set a Date/time mock.
        $dateHeureSysteme = new DateTime("2018-09-10");

        $obj = new Pointeuse();

        $obj->setDateHeureSysteme($dateHeureSysteme);
        $this->assertSame($dateHeureSysteme, $obj->getDateHeureSysteme());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Pointeuse();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setIdPointeuse()
     *
     * @return void
     */
    public function testSetIdPointeuse(): void {

        $obj = new Pointeuse();

        $obj->setIdPointeuse(10);
        $this->assertEquals(10, $obj->getIdPointeuse());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Pointeuse();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDateHeureSysteme());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getIdPointeuse());
    }
}
