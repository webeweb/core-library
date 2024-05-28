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

namespace WBW\Library\Easilys\Tests\Fixtures\Response;

use WBW\Library\Easilys\Response\AbstractResponse;

/**
 * Test abstract response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Fixtures\Response
 */
class TestAbstractResponse extends AbstractResponse {

    /**
     * Get the data.
     *
     * @return mixed[] Returns the data.
     */
    public function getData(): array {
        return $this->data;
    }
}
