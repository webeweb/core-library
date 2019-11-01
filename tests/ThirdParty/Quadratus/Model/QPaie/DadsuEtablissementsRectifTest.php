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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\DadsuEtablissementsRectif;

/**
 * Dadsu etablissements rectif test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuEtablissementsRectifTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DadsuEtablissementsRectif();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getFormaProBase());
        $this->assertNull($obj->getFormaProBaseCdd());
        $this->assertNull($obj->getIndiceRectif());
        $this->assertNull($obj->getTaxeApprentissageBase());
    }
}
