<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\iSites;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i sites test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iSitesTest extends AbstractTestCase {

    /**
     * Test setAdresseIp()
     *
     * @return void
     */
    public function testSetAdresseIp(): void {

        $obj = new iSites();

        $obj->setAdresseIp("adresseIp");
        $this->assertEquals("adresseIp", $obj->getAdresseIp());
    }

    /**
     * Test setNomSite()
     *
     * @return void
     */
    public function testSetNomSite(): void {

        $obj = new iSites();

        $obj->setNomSite("nomSite");
        $this->assertEquals("nomSite", $obj->getNomSite());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new iSites();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getNomSite());
    }
}
