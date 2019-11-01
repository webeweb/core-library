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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TranchesHSup;

/**
 * Tranches h sup test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TranchesHSupTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TranchesHSup();

        $this->assertNull($obj->getAComptabiliserRc());
        $this->assertNull($obj->getAComptabiliserRcit());
        $this->assertNull($obj->getAppliquerHSup());
        $this->assertNull($obj->getAppliquerReposRemplace());
        $this->assertNull($obj->getCodeLibHs());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDeclencheRcSemaine());
        $this->assertNull($obj->getHoraireDepassement());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getPourcentHSup());
        $this->assertNull($obj->getPourcentRc());
        $this->assertNull($obj->getPourcentReposRemplace());
        $this->assertNull($obj->getTypePaiement());
    }
}
