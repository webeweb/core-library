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

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AgendaDroitsAcces;

/**
 * Agenda droits acces test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AgendaDroitsAccesTest extends AbstractTestCase {

    /**
     * Tests the setCodeCollDroit() method.
     *
     * @return void
     */
    public function testSetCodeCollDroit(): void {

        $obj = new AgendaDroitsAcces();

        $obj->setCodeCollDroit("codeCollDroit");
        $this->assertEquals("codeCollDroit", $obj->getCodeCollDroit());
    }

    /**
     * Tests the setCodeCollSuivi() method.
     *
     * @return void
     */
    public function testSetCodeCollSuivi(): void {

        $obj = new AgendaDroitsAcces();

        $obj->setCodeCollSuivi("codeCollSuivi");
        $this->assertEquals("codeCollSuivi", $obj->getCodeCollSuivi());
    }

    /**
     * Tests the setNiveauDroit() method.
     *
     * @return void
     */
    public function testSetNiveauDroit(): void {

        $obj = new AgendaDroitsAcces();

        $obj->setNiveauDroit("niveauDroit");
        $this->assertEquals("niveauDroit", $obj->getNiveauDroit());
    }

    /**
     * Tests the __construct() method.
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
