<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Serializer;

use Psr\Log\LoggerInterface;
use WBW\Library\Common\Serializer\AbstractSerializer;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Abstract serializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Helper
 */
class AbstractSerializerTest extends AbstractTestCase {

    /**
     * Test getLogger()
     *
     * @return void
     */
    public function testGetLogger(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        AbstractSerializer::setLogger($logger);
        $this->assertSame($logger, AbstractSerializer::getLogger());
    }
}
