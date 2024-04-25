<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Provider;

use WBW\Library\Common\Provider\AbstractRequest;
use WBW\Library\Common\Provider\SubstituableRequestInterface;
use WBW\Library\Common\Traits\Strings\StringIdTrait;

/**
 * Test substituable request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Provider
 */
class TestSubstituableRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringIdTrait;

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return "/resource-path/{id}";
    }

    /**
     * {@inheritDoc}
     */
    public function getSubstituables(): array {

        return [
            "{id}" => $this->getId(),
        ];
    }
}
