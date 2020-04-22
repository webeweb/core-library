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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iSites;

/**
 * i sites test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iSitesTest extends AbstractTestCase {

    /**
     * Tests the setAdresseIp() method.
     *
     * @return void
     */
    public function testSetAdresseIp() {

        $obj = new iSites();

        $obj->setAdresseIp("adresseIp");
        $this->assertEquals("adresseIp", $obj->getAdresseIp());
    }

    /**
     * Tests the setNomSite() method.
     *
     * @return void
     */
    public function testSetNomSite() {

        $obj = new iSites();

        $obj->setNomSite("nomSite");
        $this->assertEquals("nomSite", $obj->getNomSite());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new iSites();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getNomSite());
    }
}
