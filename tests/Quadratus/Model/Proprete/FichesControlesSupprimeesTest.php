<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\FichesControlesSupprimees;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Fiches controles supprimees model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class FichesControlesSupprimeesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new FichesControlesSupprimees();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getUniqIDBlocage());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FichesControlesSupprimees();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FichesControlesSupprimees();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FichesControlesSupprimees();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new FichesControlesSupprimees();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setDateTransfert() method.
     *
     * @return void
     */
    public function testSetDateTransfert() {

        $obj = new FichesControlesSupprimees();

        $obj->setDateTransfert(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfert());
    }

    /**
     * Tests the setNumeroFiche() method.
     *
     * @return void
     */
    public function testSetNumeroFiche() {

        $obj = new FichesControlesSupprimees();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Tests the setUniqIDBlocage() method.
     *
     * @return void
     */
    public function testSetUniqIDBlocage() {

        $obj = new FichesControlesSupprimees();

        $obj->setUniqIDBlocage("uniqIDBlocage");
        $this->assertEquals("uniqIDBlocage", $obj->getUniqIDBlocage());
    }

}
