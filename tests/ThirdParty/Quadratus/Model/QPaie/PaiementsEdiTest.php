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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\PaiementsEdi;

/**
 * Paiements edi test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class PaiementsEdiTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PaiementsEdi();

        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getGenererCouponPaiement());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantDucsAnnuelle());
        $this->assertNull($obj->getMoyenPaiement());
        $this->assertNull($obj->getRib());
    }
}
