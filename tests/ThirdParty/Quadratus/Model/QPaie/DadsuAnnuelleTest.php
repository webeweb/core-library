<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DadsuAnnuelle;

/**
 * Dadsu annuelle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuAnnuelleTest extends AbstractTestCase {

    /**
     * Tests the setNomFichierDadsu() method.
     *
     * @return void
     */
    public function testSetNomFichierDadsu(): void {

        $obj = new DadsuAnnuelle();

        $obj->setNomFichierDadsu("nomFichierDadsu");
        $this->assertEquals("nomFichierDadsu", $obj->getNomFichierDadsu());
    }

    /**
     * Tests the setTdsAnnee() method.
     *
     * @return void
     */
    public function testSetTdsAnnee(): void {

        $obj = new DadsuAnnuelle();

        $obj->setTdsAnnee(10);
        $this->assertEquals(10, $obj->getTdsAnnee());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuAnnuelle();

        $this->assertNull($obj->getNomFichierDadsu());
        $this->assertNull($obj->getTdsAnnee());
    }
}
