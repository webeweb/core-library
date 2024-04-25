<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\RequestDetailInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Model\TestRequestDetailTrait;

/**
 * Request detail trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RequestDetailTraitTest extends AbstractTestCase {

    /**
     * Test setRequestDetail()
     *
     * @return void
     */
    public function testSetRequestDetail(): void {

        // Set a Request detail mock.
        $requestDetail = $this->getMockBuilder(RequestDetailInterface::class)->getMock();

        $obj = new TestRequestDetailTrait();

        $obj->setRequestDetail($requestDetail);
        $this->assertSame($requestDetail, $obj->getRequestDetail());
    }
}
