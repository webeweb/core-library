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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DadsuAssuranceEntete;

/**
 * Dadsu assurance entete test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuAssuranceEnteteTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DadsuAssuranceEntete();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePeriodicite());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateEmission());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMailContact());
        $this->assertNull($obj->getMoisAnniv());
        $this->assertNull($obj->getNomContact());
        $this->assertNull($obj->getTelContact());
        $this->assertNull($obj->getUniteGestion());
    }
}
