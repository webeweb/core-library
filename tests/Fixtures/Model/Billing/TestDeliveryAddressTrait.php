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

namespace WBW\Library\Common\Tests\Fixtures\Model\Billing;

use WBW\Library\Common\Model\Billing\DeliveryAddressInterface;
use WBW\Library\Common\Model\Billing\DeliveryAddressTrait;

/**
 * Test delivery address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Model\Billing
 */
class TestDeliveryAddressTrait implements DeliveryAddressInterface {

    use DeliveryAddressTrait;

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return [];
    }
}
