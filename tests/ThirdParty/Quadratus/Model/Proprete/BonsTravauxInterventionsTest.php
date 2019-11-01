<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonsTravauxInterventions;

/**
 * Bons travaux interventions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxInterventionsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonsTravauxInterventions();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getDimanche());
        $this->assertNull($obj->getJeudi());
        $this->assertNull($obj->getLundi());
        $this->assertNull($obj->getMardi());
        $this->assertNull($obj->getMercredi());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumSem());
        $this->assertNull($obj->getSamedi());
        $this->assertNull($obj->getVendredi());
    }
}
