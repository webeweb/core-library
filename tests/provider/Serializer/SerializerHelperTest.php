<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Serializer;

use Psr\Log\LoggerInterface;
use WBW\Library\Provider\Serializer\SerializerHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;

/**
 * Serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Serializer
 */
class SerializerHelperTest extends AbstractTestCase {

    /**
     * Tests the getLogger() method.
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