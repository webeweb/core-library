<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\DadsuAnnuelle;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu annuelle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuAnnuelleTest extends AbstractTestCase {

    /**
     * Tests setNomFichierDadsu()
     *
     * @return void
     */
    public function testSetNomFichierDadsu(): void {

        $obj = new DadsuAnnuelle();

        $obj->setNomFichierDadsu("nomFichierDadsu");
        $this->assertEquals("nomFichierDadsu", $obj->getNomFichierDadsu());
    }

    /**
     * Tests setTdsAnnee()
     *
     * @return void
     */
    public function testSetTdsAnnee(): void {

        $obj = new DadsuAnnuelle();

        $obj->setTdsAnnee(10);
        $this->assertEquals(10, $obj->getTdsAnnee());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuAnnuelle();

        $this->assertNull($obj->getNomFichierDadsu());
        $this->assertNull($obj->getTdsAnnee());
    }
}
