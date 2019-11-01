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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\AvenantsPrepares;

/**
 * Avenants prepares test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class AvenantsPreparesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new AvenantsPrepares();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getContinuerVerif());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getTypeDocument());
    }
}
