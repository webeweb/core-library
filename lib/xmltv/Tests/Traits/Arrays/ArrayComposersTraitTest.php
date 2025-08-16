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

use WBW\Library\XmlTv\Model\Composer;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayComposersTrait;

/**
 * Array composers trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayComposersTraitTest extends AbstractTestCase {

    /**
     * Test addComposer()
     *
     * @return void
     */
    public function testAddComposer(): void {

        // Set a Composer mock.
        $composer = new Composer();

        $obj = new TestArrayComposersTrait();

        $obj->addComposer($composer);
        $this->assertSame($composer, $obj->getComposers()[0]);
        $this->assertEquals(1, $obj->getNumberComposers());
        $this->assertTrue($obj->hasComposers());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayComposersTrait();

        $this->assertEquals([], $obj->getComposers());
        $this->assertEquals(0, $obj->getNumberComposers());
        $this->assertFalse($obj->hasComposers());
    }
}
