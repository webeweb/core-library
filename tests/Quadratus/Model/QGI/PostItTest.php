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
use WBW\Library\Core\Quadratus\Model\QGI\PostIt;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Post it model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class PostItTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PostIt();

        $this->assertNull($obj->getCodeCollDest());
        $this->assertNull($obj->getCodeCollOrg());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getRefGUID());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqID());
    }

    /**
     * Tests the setCodeCollDest() method.
     *
     * @return void
     */
    public function testSetCodeCollDest() {

        $obj = new PostIt();

        $obj->setCodeCollDest("codeCollDest");
        $this->assertEquals("codeCollDest", $obj->getCodeCollDest());
    }

    /**
     * Tests the setCodeCollOrg() method.
     *
     * @return void
     */
    public function testSetCodeCollOrg() {

        $obj = new PostIt();

        $obj->setCodeCollOrg("codeCollOrg");
        $this->assertEquals("codeCollOrg", $obj->getCodeCollOrg());
    }

    /**
     * Tests the setDateHeure() method.
     *
     * @return void
     */
    public function testSetDateHeure() {

        $obj = new PostIt();

        $obj->setDateHeure(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateHeure());
    }

    /**
     * Tests the setDateSysSaisie() method.
     *
     * @return void
     */
    public function testSetDateSysSaisie() {

        $obj = new PostIt();

        $obj->setDateSysSaisie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysSaisie());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new PostIt();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setRefGUID() method.
     *
     * @return void
     */
    public function testSetRefGUID() {

        $obj = new PostIt();

        $obj->setRefGUID("refGUID");
        $this->assertEquals("refGUID", $obj->getRefGUID());
    }

    /**
     * Tests the setType() method.
     *
     * @return void
     */
    public function testSetType() {

        $obj = new PostIt();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new PostIt();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

}
