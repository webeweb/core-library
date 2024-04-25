<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Model\System;

use WBW\Library\Common\Model\System\ProcessorInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestProcessorTrait;

/**
 * Processor trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class ProcessorTraitTest extends AbstractTestCase {

    /**
     * Test setProcessor()
     *
     * @return void
     */
    public function testSetProcessor(): void {

        // Set a Processor mock.
        $processor = $this->getMockBuilder(ProcessorInterface::class)->getMock();

        $obj = new TestProcessorTrait();
        $obj->setProcessor($processor);

        $this->assertSame($processor, $obj->getProcessor());
    }
}
