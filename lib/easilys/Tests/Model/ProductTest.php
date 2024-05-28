<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\Allergen;
use WBW\Library\Easilys\Model\Code;
use WBW\Library\Easilys\Model\Family;
use WBW\Library\Easilys\Model\Generic;
use WBW\Library\Easilys\Model\NutritionValue;
use WBW\Library\Easilys\Model\Origin;
use WBW\Library\Easilys\Model\Product;
use WBW\Library\Easilys\Model\Quality;
use WBW\Library\Easilys\Model\Range;
use WBW\Library\Easilys\Model\StorageType;
use WBW\Library\Easilys\Model\Tax;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Product test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class ProductTest extends AbstractTestCase {

    /**
     * Test addAllergen()
     *
     * @return void
     */
    public function testAddAllergen(): void {

        // Set an Allergen mock.
        $allergen = new Allergen();

        $obj = new Product();

        $obj->addAllergen($allergen);
        $this->assertSame($allergen, $obj->getAllergens()[0]);
    }

    /**
     * Test addCode()
     *
     * @return void
     */
    public function testAddCode(): void {

        // Set a Code mock.
        $code = new Code();

        $obj = new Product();

        $obj->addCode($code);
        $this->assertSame($code, $obj->getCodes()[0]);
    }

    /**
     * Test addGeneric()
     *
     * @return void
     */
    public function testAddGeneric(): void {

        // Set a Generic mock.
        $generic = new Generic();

        $obj = new Product();

        $obj->addGeneric($generic);
        $this->assertSame($generic, $obj->getGenerics()[0]);
    }

    /**
     * Test addPurchaseGeneric()
     *
     * @return void
     */
    public function testAddPurchaseGeneric(): void {

        // Set a Purchase generic mock.
        $purchaseGeneric = new Generic();

        $obj = new Product();

        $obj->addPurchaseGeneric($purchaseGeneric);
        $this->assertSame($purchaseGeneric, $obj->getPurchaseGenerics()[0]);
    }

    /**
     * Test setBestBeforeStatus()
     *
     * @return void
     */
    public function testSetBestBeforeStatus(): void {

        $obj = new Product();

        $obj->setBestBeforeStatus(1);
        $this->assertEquals(1, $obj->getBestBeforeStatus());
    }

    /**
     * Test setBrand()
     *
     * @return void
     */
    public function testSetBrand(): void {

        $obj = new Product();

        $obj->setBrand("brand");
        $this->assertEquals("brand", $obj->getBrand());
    }

    /**
     * Test setComposition()
     *
     * @return void
     */
    public function testSetComposition(): void {

        $obj = new Product();

        $obj->setComposition("composition");
        $this->assertEquals("composition", $obj->getComposition());
    }

    /**
     * Test setDocumentUrl()
     *
     * @return void
     */
    public function testSetDocumentUrl(): void {

        $obj = new Product();

        $obj->setDocumentUrl("documentUrl");
        $this->assertEquals("documentUrl", $obj->getDocumentUrl());
    }

    /**
     * Test setEan13()
     *
     * @return void
     */
    public function testSetEan13(): void {

        $obj = new Product();

        $obj->setEan13("ean13");
        $this->assertEquals("ean13", $obj->getEan13());
    }

    /**
     * Test setExtDocumentProductSheet()
     *
     * @return void
     */
    public function testSetExtDocumentProductSheet(): void {

        $obj = new Product();

        $obj->setExtDocumentProductSheet("extDocumentProductSheet");
        $this->assertEquals("extDocumentProductSheet", $obj->getExtDocumentProductSheet());
    }

    /**
     * Test setFamily()
     *
     * @return void
     */
    public function testSetFamily(): void {

        // Set a Family mock.
        $family = new Family();

        $obj = new Product();

        $obj->setFamily($family);
        $this->assertSame($family, $obj->getFamily());
    }

    /**
     * Test setImportedOriginSupplierLabel()
     *
     * @return void
     */
    public function testSetImportedOriginSupplierLabel(): void {

        $obj = new Product();

        $obj->setImportedOriginSupplierLabel("importedOriginSupplierLabel");
        $this->assertEquals("importedOriginSupplierLabel", $obj->getImportedOriginSupplierLabel());
    }

    /**
     * Test setLabelDocumentProductSheet()
     *
     * @return void
     */
    public function testSetLabelDocumentProductSheet(): void {

        $obj = new Product();

        $obj->setLabelDocumentProductSheet("lkabelDocumentProductSheet");
        $this->assertEquals("lkabelDocumentProductSheet", $obj->getLabelDocumentProductSheet());
    }

    /**
     * Test setLabelPublic()
     *
     * @return void
     */
    public function testSetLabelPublic(): void {

        $obj = new Product();

        $obj->setLabelPublic("labelPublic");
        $this->assertEquals("labelPublic", $obj->getLabelPublic());
    }

    /**
     * Test setNutritionValue()
     *
     * @return void
     */
    public function testSetNutritionValue(): void {

        // Set a nutrition value mock.
        $nutritionValue = new NutritionValue();

        $obj = new Product();

        $obj->setNutritionValue($nutritionValue);
        $this->assertSame($nutritionValue, $obj->getNutritionValue());
    }

    /**
     * Test setOrigin()
     *
     * @return void
     */
    public function testSetOrigin(): void {

        // Set an origin mock.
        $origin = new Origin();

        $obj = new Product();

        $obj->setOrigin($origin);
        $this->assertSame($origin, $obj->getOrigin());
    }

    /**
     * Test setQuality()
     *
     * @return void
     */
    public function testSetQuality(): void {

        // Set a Quality mock.
        $quality = new Quality();

        $obj = new Product();

        $obj->setQuality($quality);
        $this->assertSame($quality, $obj->getQuality());
    }

    /**
     * Test setRange()
     *
     * @return void
     */
    public function testSetRange(): void {

        // Set a Range mock.
        $range = new Range();

        $obj = new Product();

        $obj->setRange($range);
        $this->assertSame($range, $obj->getRange());
    }

    /**
     * Test setRatioCookedOverRaw()
     *
     * @return void
     */
    public function testSetRatioCookedOverRaw(): void {

        $obj = new Product();

        $obj->setRatioCookedOverRaw(1);
        $this->assertEquals(1, $obj->getRatioCookedOverRaw());
    }

    /**
     * Test setRefProductOfSupplier()
     *
     * @return void
     */
    public function testSetRefProductOfSupplier(): void {

        $obj = new Product();

        $obj->setRefProductOfSupplier("refProductOfSupplier");
        $this->assertEquals("refProductOfSupplier", $obj->getRefProductOfSupplier());
    }

    /**
     * Test setStorageType()
     *
     * @return void
     */
    public function testSetStorageType(): void {

        // Set a Storage type mock.
        $storageType = new StorageType();

        $obj = new Product();

        $obj->setStorageType($storageType);
        $this->assertSame($storageType, $obj->getStorageType());
    }

    /**
     * Test setSupplierAllergens()
     *
     * @return void
     */
    public function testSetSupplierAllergens(): void {

        $obj = new Product();

        $obj->setSupplierAllergen("supplierAllergens");
        $this->assertEquals("supplierAllergens", $obj->getSupplierAllergen());
    }

    /**
     * Test setSupplierCertification()
     *
     * @return void
     */
    public function testSetSupplierCertification(): void {

        $obj = new Product();

        $obj->setSupplierCertification("supplierCertification");
        $this->assertEquals("supplierCertification", $obj->getSupplierCertification());
    }

    /**
     * Test setSupplierLabel()
     *
     * @return void
     */
    public function testSetSupplierLabel(): void {

        $obj = new Product();

        $obj->setSupplierLabel("supplierLabel");
        $this->assertEquals("supplierLabel", $obj->getSupplierLabel());
    }

    /**
     * Test setTax()
     *
     * @return void
     */
    public function testSetTax(): void {

        // Set a Tax mock.
        $tax = new Tax();

        $obj = new Product();

        $obj->setTax($tax);
        $this->assertSame($tax, $obj->getTax());
    }

    /**
     * Test setWeightPerPiece()
     *
     * @return void
     */
    public function testSetWeightPerPiece(): void {

        $obj = new Product();

        $obj->setWeightPerPiece(1);
        $this->assertEquals(1, $obj->getWeightPerPiece());
    }

    /**
     * Test setWeightProductionUnit()
     *
     * @return void
     */
    public function testSetWeightProductionUnit(): void {

        $obj = new Product();

        $obj->setWeightProductionUnit(1);
        $this->assertEquals(1, $obj->getWeightProductionUnit());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Product();

        $this->assertNull($obj->getId());
        $this->assertEquals([], $obj->getCertifications());
        $this->assertNull($obj->getCodeInternal());
        $this->assertNull($obj->getDateCreated());
        $this->assertNull($obj->getDateUpdated());
        $this->assertNull($obj->getIdDocumentProductSheet());
        $this->assertNull($obj->getIdSiteOwner());
        $this->assertNull($obj->getIcon());
        $this->assertNull($obj->getImage());
        $this->assertNull($obj->getLabel());

        $this->assertEquals([], $obj->getAllergens());
        $this->assertNull($obj->getBestBeforeStatus());
        $this->assertNull($obj->getBrand());
        $this->assertEquals([], $obj->getCodes());
        $this->assertNull($obj->getComposition());
        $this->assertNull($obj->getDocumentUrl());
        $this->assertNull($obj->getEan13());
        $this->assertNull($obj->getExtDocumentProductSheet());
        $this->assertNull($obj->getFamily());
        $this->assertEquals([], $obj->getGenerics());
        $this->assertNull($obj->getImportedOriginSupplierLabel());
        $this->assertNull($obj->getLabelDocumentProductSheet());
        $this->assertNull($obj->getLabelPublic());
        $this->assertNull($obj->getNutritionValue());
        $this->assertNull($obj->getOrigin());
        $this->assertEquals([], $obj->getPurchaseGenerics());
        $this->assertNull($obj->getQuality());
        $this->assertNull($obj->getRange());
        $this->assertNull($obj->getRatioCookedOverRaw());
        $this->assertNull($obj->getRefProductOfSupplier());
        $this->assertNull($obj->getStorageType());
        $this->assertNull($obj->getSupplierAllergen());
        $this->assertNull($obj->getSupplierCertification());
        $this->assertNull($obj->getSupplierLabel());
        $this->assertNull($obj->getTax());
        $this->assertNull($obj->getWeightPerPiece());
        $this->assertNull($obj->getWeightProductionUnit());
    }
}
