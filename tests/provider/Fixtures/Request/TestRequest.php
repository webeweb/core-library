<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Fixtures\Request;

use WBW\Library\Provider\Request\AbstractRequest;

/**
 * Test request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Tests\Fixtures\Request
 */
class TestRequest extends AbstractRequest {

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return "/resource-path";
    }
}
