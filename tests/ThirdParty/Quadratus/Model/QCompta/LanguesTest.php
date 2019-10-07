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

use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Langues;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Langues model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class LanguesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Langues();

        $this->assertNull($obj->getCodeLangue());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumeroCompte());
    }

    /**
     * Tests the setCodeLangue() method.
     *
     * @return void
     */
    public function testSetCodeLangue() {

        $obj = new Langues();

        $obj->setCodeLangue("codeLangue");
        $this->assertEquals("codeLangue", $obj->getCodeLangue());
    }

    /**
     * Tests the setIntitule() method.
     *
     * @return void
     */
    public function testSetIntitule() {

        $obj = new Langues();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new Langues();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }
}
