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

use DateTime;

/**
 * Fsgi date arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsgiDateArchTrait {

    /**
     * Fsgi date arch.
     *
     * @var DateTime|null
     */
    private $fsgiDateArch;

    /**
     * Get the fsgi date arch.
     *
     * @return DateTime|null Returns the fsgi date arch.
     */
    public function getFsgiDateArch() {
        return $this->fsgiDateArch;
    }

    /**
     * Set the fsgi date arch.
     *
     * @param DateTime|null $fsgiDateArch The fsgi date arch.
     */
    public function setFsgiDateArch(DateTime $fsgiDateArch = null) {
        $this->fsgiDateArch = $fsgiDateArch;
        return $this;
    }
}
