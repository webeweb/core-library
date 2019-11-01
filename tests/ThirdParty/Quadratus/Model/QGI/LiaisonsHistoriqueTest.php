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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LiaisonsHistorique;

/**
 * Liaisons historique test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsHistoriqueTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LiaisonsHistorique();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getDateLiaison());
        $this->assertNull($obj->getDateRetourPrevue());
        $this->assertNull($obj->getDestinataire());
        $this->assertNull($obj->getModules());
        $this->assertNull($obj->getModulesBloques());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroDossier());
        $this->assertNull($obj->getSens());
        $this->assertNull($obj->getTypeLiaison());
    }
}
