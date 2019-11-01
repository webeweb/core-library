<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DosRevEtatCpt;

/**
 * Dos rev etat cpt test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DosRevEtatCptTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DosRevEtatCpt();

        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCredit());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDebit());
        $this->assertNull($obj->getEtatCpt());
        $this->assertNull($obj->getModifie());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriodeRev());
        $this->assertNull($obj->getSolde());
    }
}
