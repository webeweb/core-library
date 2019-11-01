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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Natures;

/**
 * Natures test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class NaturesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Natures();

        $this->assertNull($obj->getChapitreAffect());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getModeCalculRepart());
        $this->assertNull($obj->getNatureInactive());
        $this->assertNull($obj->getOrdreEdition());
        $this->assertNull($obj->getSuiviAnneeRecolte());
        $this->assertNull($obj->getSuiviQuantite());
        $this->assertNull($obj->getTypeNature());
    }
}
