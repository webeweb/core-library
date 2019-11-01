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
 * Fs juridique date arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsJuridiqueDateArchTrait {

    /**
     * Fs juridique date arch.
     *
     * @var DateTime|null
     */
    private $fsJuridiqueDateArch;

    /**
     * Get the fs juridique date arch.
     *
     * @return DateTime|null Returns the fs juridique date arch.
     */
    public function getFsJuridiqueDateArch() {
        return $this->fsJuridiqueDateArch;
    }

    /**
     * Set the fs juridique date arch.
     *
     * @param DateTime|null $fsJuridiqueDateArch The fs juridique date arch.
     */
    public function setFsJuridiqueDateArch(DateTime $fsJuridiqueDateArch = null) {
        $this->fsJuridiqueDateArch = $fsJuridiqueDateArch;
        return $this;
    }
}
