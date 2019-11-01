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
 * Dcr date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDcrDateLimiteTrait {

    /**
     * Dcr date limite.
     *
     * @var DateTime|null
     */
    private $dcrDateLimite;

    /**
     * Get the dcr date limite.
     *
     * @return DateTime|null Returns the dcr date limite.
     */
    public function getDcrDateLimite() {
        return $this->dcrDateLimite;
    }

    /**
     * Set the dcr date limite.
     *
     * @param DateTime|null $dcrDateLimite The dcr date limite.
     */
    public function setDcrDateLimite(DateTime $dcrDateLimite = null) {
        $this->dcrDateLimite = $dcrDateLimite;
        return $this;
    }
}
