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

namespace WBW\Library\Easilys\Tests\Fixtures\Response;

use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * Test response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Fixtures\Response
 */
class TestResponse extends AbstractResponse {

    /**
     * Get the data.
     *
     * @return array Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
