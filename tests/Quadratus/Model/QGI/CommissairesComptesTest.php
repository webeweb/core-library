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
use WBW\Library\Core\Quadratus\Model\QGI\CommissairesComptes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Commissaires comptes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class CommissairesComptesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CommissairesComptes();

        $this->assertNull($obj->getCodeCAC());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDateNomination());
        $this->assertNull($obj->getDureeMandat());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPosition());
        $this->assertNull($obj->getTitulaire());
    }

    /**
     * Tests the setCodeCAC() method.
     *
     * @return void
     */
    public function testSetCodeCAC() {

        $obj = new CommissairesComptes();

        $obj->setCodeCAC("codeCAC");
        $this->assertEquals("codeCAC", $obj->getCodeCAC());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new CommissairesComptes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setDateNomination() method.
     *
     * @return void
     */
    public function testSetDateNomination() {

        $obj = new CommissairesComptes();

        $obj->setDateNomination(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateNomination());
    }

    /**
     * Tests the setDureeMandat() method.
     *
     * @return void
     */
    public function testSetDureeMandat() {

        $obj = new CommissairesComptes();

        $obj->setDureeMandat(10);
        $this->assertEquals(10, $obj->getDureeMandat());
    }

    /**
     * Tests the setObservations() method.
     *
     * @return void
     */
    public function testSetObservations() {

        $obj = new CommissairesComptes();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Tests the setPosition() method.
     *
     * @return void
     */
    public function testSetPosition() {

        $obj = new CommissairesComptes();

        $obj->setPosition(10);
        $this->assertEquals(10, $obj->getPosition());
    }

    /**
     * Tests the setTitulaire() method.
     *
     * @return void
     */
    public function testSetTitulaire() {

        $obj = new CommissairesComptes();

        $obj->setTitulaire(true);
        $this->assertEquals(true, $obj->getTitulaire());
    }

}
