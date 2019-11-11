<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Boolean enabled trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model\Attribute
 */
trait BooleanEnabledTrait {

    /**
     * Enabled.
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Get the enabled.
     *
     * @return bool Returns the enabled.
     */
    public function getEnabled() {
        return $this->enabled;
    }

    /**
     * Set the enabled.
     *
     * @param bool $enabled The enabled.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }
}
