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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsLstPersoIndiceCollab;

/**
 * Clients lst perso indice collab test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPersoIndiceCollabTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsLstPersoIndiceCollab();

        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getRefGuid());
    }
}
