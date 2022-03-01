<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Assets\Icon;

use WBW\Library\Traits\Strings\StringNameTrait;

/**
 * Abstract icon.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Assets\Icon
 * @abstract
 */
abstract class AbstractIcon implements IconInterface {

    use StringNameTrait;

    /**
     * Style.
     *
     * @var string|null
     */
    private $style;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle(): ?string {
        return $this->style;
    }

    /**
     * {@inheritDoc}
     */
    public function setStyle(?string $style): IconInterface {
        $this->style = $style;
        return $this;
    }
}
