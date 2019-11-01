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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\DecTva3514;

/**
 * Dec tva3514 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class DecTva3514Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DecTva3514();

        $this->assertNull($obj->get02BaseHt196());
        $this->assertNull($obj->get02TaxeDue196());
        $this->assertNull($obj->get03BaseHt55());
        $this->assertNull($obj->get03TaxeDue55());
        $this->assertNull($obj->get04BaseHt85());
        $this->assertNull($obj->get04TaxeDue85());
        $this->assertNull($obj->get05BaseHt21());
        $this->assertNull($obj->get05TaxeDue21());
        $this->assertNull($obj->get06BaseHtAncTaux());
        $this->assertNull($obj->get06TaxeDueAncTaux());
        $this->assertNull($obj->get07BaseHtTauxPart());
        $this->assertNull($obj->get07TaxeDueTauxPart());
        $this->assertNull($obj->get08BaseHttvAaReverser());
        $this->assertNull($obj->get08TaxeDueTvAaReverser());
        $this->assertNull($obj->get09TotalTvaBrute());
        $this->assertNull($obj->get10BiensImmos());
        $this->assertNull($obj->get11AutresBiens());
        $this->assertNull($obj->get12Omission());
        $this->assertNull($obj->get13TotalTvaDeduc());
        $this->assertNull($obj->get14A());
        $this->assertNull($obj->get15B());
        $this->assertNull($obj->get16RemboursTva());
        $this->assertNull($obj->get18CreditTvaca12());
        $this->assertNull($obj->get1MttAugmentation());
        $this->assertNull($obj->get20AcompteTa1());
        $this->assertNull($obj->get20AcompteTa2());
        $this->assertNull($obj->get21AcompteTot1());
        $this->assertNull($obj->get21AcompteTot2());
        $this->assertNull($obj->get2BBaseHt7());
        $this->assertNull($obj->get2BTaxeDue7());
        $this->assertNull($obj->get2MttCreditPrec());
        $this->assertNull($obj->get2MttDiminution());
        $this->assertNull($obj->get3MttDiminution());
        $this->assertNull($obj->get3Suspension());
        $this->assertNull($obj->get4HasDiminution());
        $this->assertNull($obj->get4MttDiminution());
        $this->assertNull($obj->getAcompteDu());
        $this->assertNull($obj->getDateDec());
        $this->assertNull($obj->getDateLimiteDec());
        $this->assertNull($obj->getDetCodeTa());
        $this->assertNull($obj->getDetTa1());
        $this->assertNull($obj->getDetTa2());
        $this->assertNull($obj->getDetTa3());
        $this->assertNull($obj->getDetTa4());
        $this->assertNull($obj->getExigibleLe());
        $this->assertNull($obj->getMttAPayer());
        $this->assertNull($obj->getMttDetTa1());
        $this->assertNull($obj->getMttDetTa2());
        $this->assertNull($obj->getMttDetTa3());
        $this->assertNull($obj->getMttDetTa4());
        $this->assertNull($obj->getMttDontTva());
        $this->assertNull($obj->getMttDontTaxesAssim());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getz0151());
        $this->assertNull($obj->getz0207());
        $this->assertNull($obj->getzHa());
    }
}
