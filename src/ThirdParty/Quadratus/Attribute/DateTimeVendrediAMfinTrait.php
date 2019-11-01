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
 * Vendredi a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeVendrediAMfinTrait {

    /**
     * Vendredi a mfin.
     *
     * @var DateTime|null
     */
    private $vendrediAMfin;

    /**
     * Get the vendredi a mfin.
     *
     * @return DateTime|null Returns the vendredi a mfin.
     */
    public function getVendrediAMfin() {
        return $this->vendrediAMfin;
    }

    /**
     * Set the vendredi a mfin.
     *
     * @param DateTime|null $vendrediAMfin The vendredi a mfin.
     */
    public function setVendrediAMfin(DateTime $vendrediAMfin = null) {
        $this->vendrediAMfin = $vendrediAMfin;
        return $this;
    }
}
