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
 * Fs social date alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsSocialDateAlerteTrait {

    /**
     * Fs social date alerte.
     *
     * @var DateTime|null
     */
    private $fsSocialDateAlerte;

    /**
     * Get the fs social date alerte.
     *
     * @return DateTime|null Returns the fs social date alerte.
     */
    public function getFsSocialDateAlerte() {
        return $this->fsSocialDateAlerte;
    }

    /**
     * Set the fs social date alerte.
     *
     * @param DateTime|null $fsSocialDateAlerte The fs social date alerte.
     */
    public function setFsSocialDateAlerte(DateTime $fsSocialDateAlerte = null) {
        $this->fsSocialDateAlerte = $fsSocialDateAlerte;
        return $this;
    }
}
