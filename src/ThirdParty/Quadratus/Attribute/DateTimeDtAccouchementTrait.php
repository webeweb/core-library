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
 * Dt accouchement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtAccouchementTrait {

    /**
     * Dt accouchement.
     *
     * @var DateTime|null
     */
    private $dtAccouchement;

    /**
     * Get the dt accouchement.
     *
     * @return DateTime|null Returns the dt accouchement.
     */
    public function getDtAccouchement() {
        return $this->dtAccouchement;
    }

    /**
     * Set the dt accouchement.
     *
     * @param DateTime|null $dtAccouchement The dt accouchement.
     */
    public function setDtAccouchement(DateTime $dtAccouchement = null) {
        $this->dtAccouchement = $dtAccouchement;
        return $this;
    }
}
