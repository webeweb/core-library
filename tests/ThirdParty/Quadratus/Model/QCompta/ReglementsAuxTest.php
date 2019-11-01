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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ReglementsAux;

/**
 * Reglements aux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ReglementsAuxTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ReglementsAux();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getAutreDomBanque());
        $this->assertNull($obj->getAutreRib());
        $this->assertNull($obj->getCodeJournalBanque());
        $this->assertNull($obj->getCodeModePaiement());
        $this->assertNull($obj->getDans1Groupe());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getMontantGroupe());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNoRib());
        $this->assertNull($obj->getNumGroupe());
        $this->assertNull($obj->getNumLotLcr());
        $this->assertNull($obj->getNumLotLettreP());
        $this->assertNull($obj->getNumLotTraite());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumUniqEcriture());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTypeReglement());
    }
}
