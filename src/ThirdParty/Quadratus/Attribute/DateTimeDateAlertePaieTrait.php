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
 * Date alerte paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAlertePaieTrait {

    /**
     * Date alerte paie.
     *
     * @var DateTime|null
     */
    private $dateAlertePaie;

    /**
     * Get the date alerte paie.
     *
     * @return DateTime|null Returns the date alerte paie.
     */
    public function getDateAlertePaie() {
        return $this->dateAlertePaie;
    }

    /**
     * Set the date alerte paie.
     *
     * @param DateTime|null $dateAlertePaie The date alerte paie.
     */
    public function setDateAlertePaie(DateTime $dateAlertePaie = null) {
        $this->dateAlertePaie = $dateAlertePaie;
        return $this;
    }
}
