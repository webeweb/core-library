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
 * Fs fiscal date arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsFiscalDateArchTrait {

    /**
     * Fs fiscal date arch.
     *
     * @var DateTime|null
     */
    private $fsFiscalDateArch;

    /**
     * Get the fs fiscal date arch.
     *
     * @return DateTime|null Returns the fs fiscal date arch.
     */
    public function getFsFiscalDateArch() {
        return $this->fsFiscalDateArch;
    }

    /**
     * Set the fs fiscal date arch.
     *
     * @param DateTime|null $fsFiscalDateArch The fs fiscal date arch.
     */
    public function setFsFiscalDateArch(DateTime $fsFiscalDateArch = null) {
        $this->fsFiscalDateArch = $fsFiscalDateArch;
        return $this;
    }
}
