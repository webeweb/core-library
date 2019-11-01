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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\ClientsLstPersoColonnes;

/**
 * Clients lst perso colonnes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ClientsLstPersoColonnesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ClientsLstPersoColonnes();

        $this->assertNull($obj->getClauseWhere());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIndiceTri());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getIsFormule());
        $this->assertNull($obj->getJointure());
        $this->assertNull($obj->getNbDecimales());
        $this->assertNull($obj->getNomChamp());
        $this->assertNull($obj->getNomTable());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getSaisie());
        $this->assertNull($obj->getSelection());
        $this->assertNull($obj->getTaille());
        $this->assertNull($obj->getTitre());
    }
}
