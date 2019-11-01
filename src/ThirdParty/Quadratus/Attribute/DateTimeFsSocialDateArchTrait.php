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
 * Fs social date arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsSocialDateArchTrait {

    /**
     * Fs social date arch.
     *
     * @var DateTime|null
     */
    private $fsSocialDateArch;

    /**
     * Get the fs social date arch.
     *
     * @return DateTime|null Returns the fs social date arch.
     */
    public function getFsSocialDateArch() {
        return $this->fsSocialDateArch;
    }

    /**
     * Set the fs social date arch.
     *
     * @param DateTime|null $fsSocialDateArch The fs social date arch.
     */
    public function setFsSocialDateArch(DateTime $fsSocialDateArch = null) {
        $this->fsSocialDateArch = $fsSocialDateArch;
        return $this;
    }
}
