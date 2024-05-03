<?php

declare(strict_types=1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\PriceList;
use WBW\Library\Easilys\Model\ProdFamily;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Price list test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class PriceListTest extends AbstractTestCase {

    /**
     * Test setIdUser()
     *
     * @return void
     */
    public function testSetIdUser() {

        $obj = new PriceList();

        $obj->setIdUser("idUser");
        $this->assertEquals("idUser", $obj->getIdUser());
    }

    /**
     * Test setProdFamily()
     *
     * @return void
     */
    public function testSetProdFamily() {

        // Set a Prod family mock.
        $prodFamily = new ProdFamily();

        $obj = new PriceList();

        $obj->setProdFamily($prodFamily);
        $this->assertSame($prodFamily, $obj->getProdFamily());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PriceList();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getDateCreated());
        $this->assertNull($obj->getDateEnd());
        $this->assertNull($obj->getDateStart());
        $this->assertNull($obj->getDateUpdated());
        $this->assertNull($obj->getExtId());
        $this->assertNull($obj->getIdSiteOwner());
        $this->assertNull($obj->getIsValidated());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getSupplier());

        $this->assertNull($obj->getIdUser());
        $this->assertNull($obj->getProdFamily());
    }
}
