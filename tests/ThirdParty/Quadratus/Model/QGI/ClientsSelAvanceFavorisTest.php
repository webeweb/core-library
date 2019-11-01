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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsSelAvanceFavoris;

/**
 * Clients sel avance favoris test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsSelAvanceFavorisTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsSelAvanceFavoris();

        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeListe());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getOrigine());
    }
}
