<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\LabelInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestLabelTrait;

/**
 * Label trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class LabelTraitTest extends AbstractTestCase {

    /**
     * Test setLabel()
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
