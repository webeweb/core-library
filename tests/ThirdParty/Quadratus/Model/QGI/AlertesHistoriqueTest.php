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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\AlertesHistorique;

/**
 * Alertes historique test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class AlertesHistoriqueTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AlertesHistorique();

        $this->assertNull($obj->getArEnvoye());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollabDst());
        $this->assertNull($obj->getCodeCollabOrg());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDeclenchement());
        $this->assertNull($obj->getDateReponse());
        $this->assertNull($obj->getIdAlerteHisto());
        $this->assertNull($obj->getTexteAlerte());
        $this->assertNull($obj->getTexteReponse());
    }
}
