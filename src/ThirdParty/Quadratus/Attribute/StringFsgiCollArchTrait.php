<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Fsgi coll arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsgiCollArchTrait {

    /**
     * Fsgi coll arch.
     *
     * @var string
     */
    private $fsgiCollArch;

    /**
     * Get the fsgi coll arch.
     *
     * @return string Returns the fsgi coll arch.
     */
    public function getFsgiCollArch() {
        return $this->fsgiCollArch;
    }

    /**
     * Set the fsgi coll arch.
     *
     * @param string $fsgiCollArch The fsgi coll arch.
     */
    public function setFsgiCollArch($fsgiCollArch) {
        $this->fsgiCollArch = $fsgiCollArch;
        return $this;
    }
}
