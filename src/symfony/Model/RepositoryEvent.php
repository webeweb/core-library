<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;
use WBW\Library\Traits\Strings\StringDataTrait;
use WBW\Library\Traits\Strings\StringEntityTrait;
use WBW\Library\Traits\Strings\StringIdentifierTrait;
use WBW\Library\Traits\Strings\StringIpAddressTrait;
use WBW\Library\Traits\Strings\StringQueryTrait;
use WBW\Library\Traits\Strings\StringRequestTrait;
use WBW\Library\Traits\Strings\StringRouteTrait;
use WBW\Library\Traits\Strings\StringTypeTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;

/**
 * Repository event.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RepositoryEvent implements RepositoryEventInterface {

    use DateTimeDateTrait;
    use IntegerIdTrait;
    use StringDataTrait;
    use StringEntityTrait;
    use StringIpAddressTrait;
    use StringIdentifierTrait;
    use StringQueryTrait;
    use StringRequestTrait;
    use StringRouteTrait;
    use StringTypeTrait;
    use StringUrlTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRepositoryEvent($this);
    }
}
