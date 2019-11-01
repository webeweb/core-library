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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\PointageSynchroSupprime;

/**
 * Pointage synchro supprime test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class PointageSynchroSupprimeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PointageSynchroSupprime();

        $this->assertNull($obj->getCleEnreg());
        $this->assertNull($obj->getCreeParGenPrev());
        $this->assertNull($obj->getNomTable());
        $this->assertNull($obj->getTimeSuppression());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
