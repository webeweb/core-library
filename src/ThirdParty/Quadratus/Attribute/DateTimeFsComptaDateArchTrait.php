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
 * Fs compta date arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsComptaDateArchTrait {

    /**
     * Fs compta date arch.
     *
     * @var DateTime|null
     */
    private $fsComptaDateArch;

    /**
     * Get the fs compta date arch.
     *
     * @return DateTime|null Returns the fs compta date arch.
     */
    public function getFsComptaDateArch() {
        return $this->fsComptaDateArch;
    }

    /**
     * Set the fs compta date arch.
     *
     * @param DateTime|null $fsComptaDateArch The fs compta date arch.
     */
    public function setFsComptaDateArch(DateTime $fsComptaDateArch = null) {
        $this->fsComptaDateArch = $fsComptaDateArch;
        return $this;
    }
}
