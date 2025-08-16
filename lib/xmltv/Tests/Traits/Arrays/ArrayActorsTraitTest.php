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

use WBW\Library\XmlTv\Model\Actor;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayActorsTrait;

/**
 * Array actors trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayActorsTraitTest extends AbstractTestCase {

    /**
     * Test addActor()
     *
     * @return void
     */
    public function testAddActor(): void {

        // Set an Actor mock.
        $actor = new Actor();

        $obj = new TestArrayActorsTrait();

        $obj->addActor($actor);
        $this->assertSame($actor, $obj->getActors()[0]);
        $this->assertEquals(1, $obj->getNumberActors());
        $this->assertTrue($obj->hasActors());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayActorsTrait();

        $this->assertEquals([], $obj->getActors());
        $this->assertEquals(0, $obj->getNumberActors());
        $this->assertFalse($obj->hasActors());
    }
}
