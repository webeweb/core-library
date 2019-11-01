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
 * Fs compta date alerte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFsComptaDateAlerteTrait {

    /**
     * Fs compta date alerte.
     *
     * @var DateTime|null
     */
    private $fsComptaDateAlerte;

    /**
     * Get the fs compta date alerte.
     *
     * @return DateTime|null Returns the fs compta date alerte.
     */
    public function getFsComptaDateAlerte() {
        return $this->fsComptaDateAlerte;
    }

    /**
     * Set the fs compta date alerte.
     *
     * @param DateTime|null $fsComptaDateAlerte The fs compta date alerte.
     */
    public function setFsComptaDateAlerte(DateTime $fsComptaDateAlerte = null) {
        $this->fsComptaDateAlerte = $fsComptaDateAlerte;
        return $this;
    }
}
