<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\Langues;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Langues test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class LanguesTest extends AbstractTestCase {

    /**
     * Tests setCodeLangue()
     *
     * @return void
     */
    public function testSetCodeLangue(): void {

        $obj = new Langues();

        $obj->setCodeLangue("codeLangue");
        $this->assertEquals("codeLangue", $obj->getCodeLangue());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new Langues();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Langues();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Langues();

        $this->assertNull($obj->getCodeLangue());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumeroCompte());
    }
}
