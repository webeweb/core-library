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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\HeuresEffectuees;

/**
 * Heures effectuees test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class HeuresEffectueesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new HeuresEffectuees();

        $this->assertNull($obj->getDateJour());
        $this->assertNull($obj->getHDebAm());
        $this->assertNull($obj->getHDebPm());
        $this->assertNull($obj->getHFinAm());
        $this->assertNull($obj->getHFinPm());
        $this->assertNull($obj->getNbHAbsenceCp());
        $this->assertNull($obj->getNbHjfnt());
        $this->assertNull($obj->getNbHMajo());
        $this->assertNull($obj->getNbHNuit());
        $this->assertNull($obj->getNbHReposCompPris());
        $this->assertNull($obj->getNbHReposRemplacePris());
        $this->assertNull($obj->getNbHTravailReel());
        $this->assertNull($obj->getNbJReposRecupPris());
        $this->assertNull($obj->getNbJourCpPris());
        $this->assertNull($obj->getNumeroEmploye());
    }
}
