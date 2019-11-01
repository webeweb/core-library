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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ChantiersHistoRev;

/**
 * Chantiers histo rev test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersHistoRevTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChantiersHistoRev();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFormule());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getFormule());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumLigneRev());
        $this->assertNull($obj->getPeriodeRevisee());
        $this->assertNull($obj->getPourcentage());
        $this->assertNull($obj->getRefusClient());
    }
}
