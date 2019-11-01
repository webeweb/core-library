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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iPaieDroits;

/**
 * i paie droits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iPaieDroitsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iPaieDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getEspaceClient());
        $this->assertNull($obj->getFctAbsencesCp());
        $this->assertNull($obj->getFctAcomptes());
        $this->assertNull($obj->getFctArchives());
        $this->assertNull($obj->getFctBulletins());
        $this->assertNull($obj->getFctDocuments());
        $this->assertNull($obj->getFctDonneesV());
        $this->assertNull($obj->getFctEtatCivil());
        $this->assertNull($obj->getFctModifAbsencesCp());
        $this->assertNull($obj->getFctModifAcomptes());
        $this->assertNull($obj->getFctModifArchives());
        $this->assertNull($obj->getFctModifBulletins());
        $this->assertNull($obj->getFctModifDocuments());
        $this->assertNull($obj->getFctModifDonneesV());
        $this->assertNull($obj->getFctModifEtatCivil());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getNiveauConf());
        $this->assertNull($obj->getNoDossPaie());
        $this->assertNull($obj->getNomUser());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getUserExpert());
        $this->assertNull($obj->getVisuSalaires());
    }
}
