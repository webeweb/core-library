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

use WBW\Library\XmlTv\Model\Director;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayDirectorsTrait;

/**
 * Array directors trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayDirectorsTraitTest extends AbstractTestCase {

    /**
     * Test addDirector()
     *
     * @return void
     */
    public function testAddDirector(): void {

        // Set a Director mock.
        $director = new Director();

        $obj = new TestArrayDirectorsTrait();

        $obj->addDirector($director);
        $this->assertSame($director, $obj->getDirectors()[0]);
        $this->assertEquals(1, $obj->getNumberDirectors());
        $this->assertTrue($obj->hasDirectors());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayDirectorsTrait();

        $this->assertEquals([], $obj->getDirectors());
        $this->assertEquals(0, $obj->getNumberDirectors());
        $this->assertFalse($obj->hasDirectors());
    }
}
