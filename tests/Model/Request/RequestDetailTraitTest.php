<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Model\Request;

use WBW\Library\Common\Model\Request\RequestDetailInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Request\TestRequestDetailTrait;

/**
 * Request detail trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Request
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
