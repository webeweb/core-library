<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Fixtures\Model\Billing;

use WBW\Library\Common\Model\Billing\SendingAddressInterface;
use WBW\Library\Common\Model\Billing\SendingAddressTrait;

/**
 * Test sending address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Fixtures\Model
 */
class TestSendingAddressTrait implements SendingAddressInterface {

    use SendingAddressTrait;

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return [];
    }
}
