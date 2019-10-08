<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\SuiviActivite;

/**
 * Suivi activite model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class SuiviActiviteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SuiviActivite();

        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getIdAction());
        $this->assertNull($obj->getResultat());
    }

    /**
     * Tests the setCodeColl() method.
     *
     * @return void
     */
    public function testSetCodeColl() {

        $obj = new SuiviActivite();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Tests the setDateHeure() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeure() {

        $obj = new SuiviActivite();

        $obj->setDateHeure(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateHeure());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new SuiviActivite();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setIdAction() method.
     *
     * @return void
     */
    public function testSetIdAction() {

        $obj = new SuiviActivite();

        $obj->setIdAction(10);
        $this->assertEquals(10, $obj->getIdAction());
    }

    /**
     * Tests the setResultat() method.
     *
     * @return void
     */
    public function testSetResultat() {

        $obj = new SuiviActivite();

        $obj->setResultat("resultat");
        $this->assertEquals("resultat", $obj->getResultat());
    }
}
