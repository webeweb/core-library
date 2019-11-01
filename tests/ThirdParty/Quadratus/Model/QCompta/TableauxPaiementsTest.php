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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\TableauxPaiements;

/**
 * Tableaux paiements test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class TableauxPaiementsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TableauxPaiements();

        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getEntretien());
        $this->assertNull($obj->getLoyerHt());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroCb());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDeuxCb());
        $this->assertNull($obj->getValeurRachat());
    }
}
