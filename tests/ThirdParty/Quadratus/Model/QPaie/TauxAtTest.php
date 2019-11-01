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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\TauxAt;

/**
 * Taux at test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class TauxAtTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TauxAt();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCodeAt());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getRisque());
        $this->assertNull($obj->getSection());
        $this->assertNull($obj->getTaux());
    }
}
