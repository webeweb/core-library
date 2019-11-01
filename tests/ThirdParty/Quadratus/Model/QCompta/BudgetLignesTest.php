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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\BudgetLignes;

/**
 * Budget lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class BudgetLignesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BudgetLignes();

        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCodeBudget());
        $this->assertNull($obj->getCoef());
        $this->assertNull($obj->getColSaisie());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getCompte());
        $this->assertNull($obj->getMt1());
        $this->assertNull($obj->getMt10());
        $this->assertNull($obj->getMt11());
        $this->assertNull($obj->getMt12());
        $this->assertNull($obj->getMt13());
        $this->assertNull($obj->getMt14());
        $this->assertNull($obj->getMt15());
        $this->assertNull($obj->getMt16());
        $this->assertNull($obj->getMt17());
        $this->assertNull($obj->getMt18());
        $this->assertNull($obj->getMt19());
        $this->assertNull($obj->getMt2());
        $this->assertNull($obj->getMt20());
        $this->assertNull($obj->getMt21());
        $this->assertNull($obj->getMt22());
        $this->assertNull($obj->getMt23());
        $this->assertNull($obj->getMt24());
        $this->assertNull($obj->getMt3());
        $this->assertNull($obj->getMt4());
        $this->assertNull($obj->getMt5());
        $this->assertNull($obj->getMt6());
        $this->assertNull($obj->getMt7());
        $this->assertNull($obj->getMt8());
        $this->assertNull($obj->getMt9());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTypeSaisie());
    }
}
