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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\LignesCafat;

/**
 * Lignes cafat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class LignesCafatTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesCafat();

        $this->assertNull($obj->getCodeCommune());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDebauchage());
        $this->assertNull($obj->getDateEmbauchage());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNoEt());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAssure());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getSalaireBrut());
        $this->assertNull($obj->getTauxAt());
    }
}
