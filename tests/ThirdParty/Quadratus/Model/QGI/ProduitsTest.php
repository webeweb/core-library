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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Produits;

/**
 * Produits test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class ProduitsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Produits();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCompteur());
        $this->assertNull($obj->getCptMaj());
        $this->assertNull($obj->getDernierNumero());
        $this->assertNull($obj->getFichierLicence());
        $this->assertNull($obj->getGammeWindows());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getLettreLicence());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomProdLicence());
    }
}
