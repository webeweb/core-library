<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\LabelInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestLabelTrait;

/**
 * Label trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class LabelTraitTest extends AbstractTestCase {

    /**
     * Tests setLabel()
     *
     * @return void
     */
    public function testSetLabel(): void {

        // Set a Label mock.
        $label = $this->getMockBuilder(LabelInterface::class)->getMock();

        $obj = new TestLabelTrait();

        $obj->setLabel($label);
        $this->assertSame($label, $obj->getLabel());
    }
}
