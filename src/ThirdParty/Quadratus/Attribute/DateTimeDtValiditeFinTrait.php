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
 * Dt validite fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtValiditeFinTrait {

    /**
     * Dt validite fin.
     *
     * @var DateTime|null
     */
    private $dtValiditeFin;

    /**
     * Get the dt validite fin.
     *
     * @return DateTime|null Returns the dt validite fin.
     */
    public function getDtValiditeFin() {
        return $this->dtValiditeFin;
    }

    /**
     * Set the dt validite fin.
     *
     * @param DateTime|null $dtValiditeFin The dt validite fin.
     */
    public function setDtValiditeFin(DateTime $dtValiditeFin = null) {
        $this->dtValiditeFin = $dtValiditeFin;
        return $this;
    }
}
