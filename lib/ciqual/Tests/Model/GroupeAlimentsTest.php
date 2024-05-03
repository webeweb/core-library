<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ciqual\Tests\Model;

use JsonSerializable;
use PHPUnit\Framework\TestCase;
use WBW\Library\Ciqual\Model\GroupeAliments;

class GroupeAlimentsTest extends TestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        $obj = new GroupeAliments();

        $this->assertIsArray($obj->jsonSerialize());
    }

    /**
     * Test setNomEngSousGroupe()
     *
     * @return void
     */
    public function testSetNomEngSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomEngSousGroupe("nomEngSousGroupe");
        $this->assertEquals("nomEngSousGroupe", $obj->getNomEngSousGroupe());
    }

    /**
     * Test setNomEngSousSousGroupe()
     *
     * @return void
     */
    public function testSetNomEngSousSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomEngSousSousGroupe("nomEngSousSousGroupe");
        $this->assertEquals("nomEngSousSousGroupe", $obj->getNomEngSousSousGroupe());
    }

    /**
     * Test setNomFrSousGroupe()
     *
     * @return void
     */
    public function testSetNomFrSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomFrSousGroupe("nomFrSousGroupe");
        $this->assertEquals("nomFrSousGroupe", $obj->getNomFrSousGroupe());
    }

    /**
     * Test setNomFrSousSousGroupe()
     *
     * @return void
     */
    public function testSetNomFrSousSousGroupe(): void {

        $obj = new GroupeALiments();

        $obj->setNomFrSousSousGroupe("nomFrSousSousGroupe");
        $this->assertEquals("nomFrSousSousGroupe", $obj->getNomFrSousSousGroupe());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("ALIM_GRP", GroupeAliments::DOM_NODE_NAME);

        $obj = new GroupeALiments();
        $this->assertInstanceOf(JsonSerializable::class, $obj);

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeSousGroupe());
        $this->assertNull($obj->getCodeSousSousGroupe());
        $this->assertNull($obj->getNomEng());
        $this->assertNull($obj->getNomEngSousGroupe());
        $this->assertNull($obj->getNomEngSousSousGroupe());
        $this->assertNull($obj->getNomFr());
        $this->assertNull($obj->getNomFrSousGroupe());
        $this->assertNull($obj->getNomFrSousSousGroupe());
    }
}
