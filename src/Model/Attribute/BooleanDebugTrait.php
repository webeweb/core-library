<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * Boolean debug trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model\Attribute
 */
trait BooleanDebugTrait {

    /**
     * Debug.
     *
     * @var bool|null
     */
    protected $debug;

    /**
     * Get the debug.
     *
     * @return bool|null Returns the debug.
     */
    public function getDebug(): ?bool {
        return $this->debug;
    }

    /**
     * Set the debug.
     *
     * @param bool|null $debug The debug.
     */
    public function setDebug(?bool $debug): self {
        $this->debug = $debug;
        return $this;
    }
}
