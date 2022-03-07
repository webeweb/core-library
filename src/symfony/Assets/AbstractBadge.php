<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets;

use WBW\Library\Symfony\Serializer\JsonSerializer;
use WBW\Library\Traits\Strings\StringContentTrait;

/**
 * Abstract badge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets
 * @abstract
 */
abstract class AbstractBadge implements BadgeInterface {

    use StringContentTrait;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string|null $content The content.
     */
    protected function __construct(string $type, ?string $content = null) {
        $this->setContent($content);
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string {
        return $this->type;
    }


    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeBadge($this);
    }
    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return BadgeInterface Returns this badge.
     */
    protected function setType(string $type): BadgeInterface {
        $this->type = $type;
        return $this;
    }
}
