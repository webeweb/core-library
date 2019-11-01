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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Formations;

/**
 * Formations test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class FormationsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Formations();

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getId());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLieu());
        $this->assertNull($obj->getNbHFormation());
        $this->assertNull($obj->getNbhDifPrisHorsW());
        $this->assertNull($obj->getNbhDiFPrisW());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTypeFormation());
    }
}
