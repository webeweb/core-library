<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Helper;

use Psr\Log\LoggerInterface;
use WBW\Library\Serializer\Helper\SerializerHelper;
use WBW\Library\Serializer\Tests\AbstractTestCase;

/**
 * Serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Helper
 */
class SerializerHelperTest extends AbstractTestCase {

    /**
     * Tests getLogger()
     *
     * @return void
     */
    public function testGetLogger(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        SerializerHelper::setLogger($logger);
        $this->assertSame($logger, SerializerHelper::getLogger());
    }
}
