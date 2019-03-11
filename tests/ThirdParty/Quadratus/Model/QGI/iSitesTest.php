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

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iSites;

/**
 * i sites model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iSitesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iSites();

        $this->assertNull($obj->getAdresseIP());
        $this->assertNull($obj->getNomSite());
    }

    /**
     * Tests the setAdresseIP() method.
     *
     * @return void
     */
    public function testSetAdresseIP() {

        $obj = new iSites();

        $obj->setAdresseIP("adresseIP");
        $this->assertEquals("adresseIP", $obj->getAdresseIP());
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
}
