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
 * Dt fin saisie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinSaisieTrait {

    /**
     * Dt fin saisie.
     *
     * @var DateTime|null
     */
    private $dtFinSaisie;

    /**
     * Get the dt fin saisie.
     *
     * @return DateTime|null Returns the dt fin saisie.
     */
    public function getDtFinSaisie() {
        return $this->dtFinSaisie;
    }

    /**
     * Set the dt fin saisie.
     *
     * @param DateTime|null $dtFinSaisie The dt fin saisie.
     */
    public function setDtFinSaisie(DateTime $dtFinSaisie = null) {
        $this->dtFinSaisie = $dtFinSaisie;
        return $this;
    }
}
