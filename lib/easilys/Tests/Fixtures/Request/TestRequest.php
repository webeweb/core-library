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

namespace WBW\Library\Easilys\Tests\Fixtures\Request;

use RuntimeException;
use WBW\Library\Easilys\Request\AbstractRequest;
use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * Test request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Fixtures\Request
 */
class TestRequest extends AbstractRequest {

    /**
     * {@inheritddoc}
     */
    public function deserializeResponse(string $rawResponse): AbstractResponse {
        throw new RuntimeException();
    }

    /**
     * {@inheritddoc}
     */
    public function getParams(): array {
        return parent::getParams();
    }

    /**
     * {@inheritddoc}
     */
    public function getResourcePath(): string {
        return "";
    }
}
