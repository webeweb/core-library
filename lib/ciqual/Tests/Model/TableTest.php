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

use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Ciqual\Model\Table;
use WBW\Library\Ciqual\Tests\AbstractTestCase;

/**
 * Table test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Model
 */
class TableTest extends AbstractTestCase {

    /**
     * Test addAliment()
     *
     * @return void
     */
    public function testAddAliment(): void {

        // Set an Aliment mock.
        $aliment = new Aliment();

        $obj = new Table();

        $obj->addAliment($aliment);
        $this->assertSame($aliment, $obj->getAliments()[0]);
    }

    /**
     * Test addComposition()
     *
     * @return void
     */
    public function testAddComposition(): void {

        // Set a Composition mock.
        $composition = new Composition();

        $obj = new Table();

        $obj->addComposition($composition);
        $this->assertSame($composition, $obj->getCompositions()[0]);
    }

    /**
     * Test addConstituant()
     *
     * @return void
     */
    public function testAddConstituant(): void {

        // Set a Constituant mock.
        $constituant = new Constituant();

        $obj = new Table();

        $obj->addConstituant($constituant);
        $this->assertSame($constituant, $obj->getConstituants()[0]);
    }

    /**
     * Test addGroupeAliments()
     *
     * @return void
     */
    public function testAddGroupeAliments(): void {

        // Set a Groupe aliments mock.
        $groupeAliments = new GroupeAliments();

        $obj = new Table();

        $obj->addGroupeAliments($groupeAliments);
        $this->assertSame($groupeAliments, $obj->getGroupesAliments()[0]);
    }

    /**
     * Test add()
     *
     * @return void
     */
    public function testAddSource(): void {

        // Set a Source mock.
        $source = new Source();

        $obj = new Table();

        $obj->addSource($source);
        $this->assertSame($source, $obj->getSources()[0]);
    }

    /**
     * Test add()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Table();

        $this->assertEquals([], $obj->getAliments());
        $this->assertEquals([], $obj->getCompositions());
        $this->assertEquals([], $obj->getConstituants());
        $this->assertEquals([], $obj->getGroupesAliments());
        $this->assertEquals([], $obj->getSources());
    }
}
