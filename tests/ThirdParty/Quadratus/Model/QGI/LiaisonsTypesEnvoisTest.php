<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\LiaisonsTypesEnvois;

/**
 * Liaisons types envois test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class LiaisonsTypesEnvoisTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LiaisonsTypesEnvois();

        $this->assertNull($obj->getABloquer());
        $this->assertNull($obj->getAEmettre());
        $this->assertNull($obj->getAccepteDepuisQBureau());
        $this->assertNull($obj->getAccepteDepuisQc());
        $this->assertNull($obj->getAccepteDepuisQp());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getModifiable());
        $this->assertNull($obj->getSansImages());
    }
}
