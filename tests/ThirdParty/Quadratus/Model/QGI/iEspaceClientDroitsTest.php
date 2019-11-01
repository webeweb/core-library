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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\iEspaceClientDroits;

/**
 * i espace client droits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class iEspaceClientDroitsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new iEspaceClientDroits();

        $this->assertNull($obj->getCodeCollabMessages());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDossierClient());
        $this->assertNull($obj->getFctDocuments());
        $this->assertNull($obj->getFctDocumentsAutre());
        $this->assertNull($obj->getFctDocumentsCompta());
        $this->assertNull($obj->getFctDocumentsJuridique());
        $this->assertNull($obj->getFctDocumentsPaie());
        $this->assertNull($obj->getFctInfos());
        $this->assertNull($obj->getFctMessagerie());
        $this->assertNull($obj->getNomUser());
        $this->assertNull($obj->getPassword());
    }
}
