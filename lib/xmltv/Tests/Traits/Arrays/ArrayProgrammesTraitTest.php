<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Arrays;

use WBW\Library\XmlTv\Model\Programme;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayProgrammesTrait;

/**
 * Array programmes trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayProgrammesTraitTest extends AbstractTestCase {

    /**
     * Test addProgramme()
     *
     * @return void
     */
    public function testAddProgramme(): void {

        // Set a Programme mock.
        $programme = new Programme();

        $obj = new TestArrayProgrammesTrait();

        $obj->addProgramme($programme);
        $this->assertSame($programme, $obj->getProgrammes()[0]);
        $this->assertEquals(1, $obj->getNumberProgrammes());
        $this->assertTrue($obj->hasProgrammes());
    }

    /**
     * Test sortProgrammes()
     *
     * @return void
     */
    public function testSortProgrammes(): void {

        // Set the Programme mocks.
        $programme1 = new Programme();
        $programme1->setStart("1");
        $programme2 = new Programme();
        $programme2->setStart("2");

        $obj = new TestArrayProgrammesTrait();

        $obj->addProgramme($programme2);
        $obj->addProgramme($programme1);
        $this->assertEquals("2", $obj->getProgrammes()[0]->getStart());
        $this->assertEquals("1", $obj->getProgrammes()[1]->getStart());

        $obj->sortProgrammes();
        $this->assertEquals("1", $obj->getProgrammes()[0]->getStart());
        $this->assertEquals("2", $obj->getProgrammes()[1]->getStart());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayProgrammesTrait();

        $this->assertEquals([], $obj->getProgrammes());
        $this->assertEquals(0, $obj->getNumberProgrammes());
        $this->assertFalse($obj->hasProgrammes());
    }
}
