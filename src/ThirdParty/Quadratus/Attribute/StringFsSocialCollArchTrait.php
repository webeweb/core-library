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
 * Fs social coll arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsSocialCollArchTrait {

    /**
     * Fs social coll arch.
     *
     * @var string
     */
    private $fsSocialCollArch;

    /**
     * Get the fs social coll arch.
     *
     * @return string Returns the fs social coll arch.
     */
    public function getFsSocialCollArch() {
        return $this->fsSocialCollArch;
    }

    /**
     * Set the fs social coll arch.
     *
     * @param string $fsSocialCollArch The fs social coll arch.
     */
    public function setFsSocialCollArch($fsSocialCollArch) {
        $this->fsSocialCollArch = $fsSocialCollArch;
        return $this;
    }
}
