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
use WBW\Library\Traits\Strings\StringIpAddressTrait;
use WBW\Library\Traits\Strings\StringMethodTrait;
use WBW\Library\Traits\Strings\StringRouteTrait;
use WBW\Library\Traits\Strings\StringUrlTrait;

/**
 * Request detail.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 */
class RequestDetail implements RequestDetailInterface {

    use DateTimeDateTrait;
    use IntegerIdTrait;
    use StringIpAddressTrait;
    use StringMethodTrait;
    use StringRouteTrait;
    use StringUrlTrait;

    /**
     * Data "GET".
     *
     * @var string|null
     */
    protected $dataGet;

    /**
     * Data "POST".
     *
     * @var string|null
     */
    protected $dataPost;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritdoc}
     */
    public function getDataGet(): ?string {
        return $this->dataGet;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataPost(): ?string {
        return $this->dataPost;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeRequestDetail($this);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataGet(?string $dataGet): RequestDetailInterface {
        $this->dataGet = $dataGet;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDataPost(?string $dataPost): RequestDetailInterface {
        $this->dataPost = $dataPost;
        return $this;
    }
}
