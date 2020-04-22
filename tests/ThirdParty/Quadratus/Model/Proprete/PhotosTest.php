<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Photos;

/**
 * Photos test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PhotosTest extends AbstractTestCase {

    /**
     * Tests the setAPublierEspaceClient() method.
     *
     * @return void
     */
    public function testSetAPublierEspaceClient() {

        $obj = new Photos();

        $obj->setAPublierEspaceClient(true);
        $this->assertEquals(true, $obj->getAPublierEspaceClient());
    }

    /**
     * Tests the setAuteur() method.
     *
     * @return void
     */
    public function testSetAuteur() {

        $obj = new Photos();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Photos();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setNomFichierId() method.
     *
     * @return void
     */
    public function testSetNomFichierId() {

        $obj = new Photos();

        $obj->setNomFichierId("nomFichierId");
        $this->assertEquals("nomFichierId", $obj->getNomFichierId());
    }

    /**
     * Tests the setTypeId() method.
     *
     * @return void
     */
    public function testSetTypeId() {

        $obj = new Photos();

        $obj->setTypeId("typeId");
        $this->assertEquals("typeId", $obj->getTypeId());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new Photos();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new Photos();

        $this->assertNull($obj->getAPublierEspaceClient());
        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getNomFichierId());
        $this->assertNull($obj->getTypeId());
        $this->assertNull($obj->getUniqId());
    }
}
