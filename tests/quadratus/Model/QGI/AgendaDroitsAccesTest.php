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

use WBW\Library\Quadratus\Model\QGI\AgendaDroitsAcces;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda droits acces test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaDroitsAccesTest extends AbstractTestCase {

    /**
     * Tests setCodeCollDroit()
     *
     * @return void
     */
    public function testSetCodeCollDroit(): void {

        $obj = new AgendaDroitsAcces();

        $obj->setCodeCollDroit("codeCollDroit");
        $this->assertEquals("codeCollDroit", $obj->getCodeCollDroit());
    }

    /**
     * Tests setCodeCollSuivi()
     *
     * @return void
     */
    public function testSetCodeCollSuivi(): void {

        $obj = new AgendaDroitsAcces();

        $obj->setCodeCollSuivi("codeCollSuivi");
        $this->assertEquals("codeCollSuivi", $obj->getCodeCollSuivi());
    }

    /**
     * Tests setNiveauDroit()
     *
     * @return void
     */
    public function testSetNiveauDroit(): void {

        $obj = new AgendaDroitsAcces();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaDroitsAcces();

        $this->assertNull($obj->getCodeCollDroit());
        $this->assertNull($obj->getCodeCollSuivi());
        $this->assertNull($obj->getNiveauDroit());
    }
}
