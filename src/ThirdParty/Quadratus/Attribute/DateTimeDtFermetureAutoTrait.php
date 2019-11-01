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
 * Dt fermeture auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFermetureAutoTrait {

    /**
     * Dt fermeture auto.
     *
     * @var DateTime|null
     */
    private $dtFermetureAuto;

    /**
     * Get the dt fermeture auto.
     *
     * @return DateTime|null Returns the dt fermeture auto.
     */
    public function getDtFermetureAuto() {
        return $this->dtFermetureAuto;
    }

    /**
     * Set the dt fermeture auto.
     *
     * @param DateTime|null $dtFermetureAuto The dt fermeture auto.
     */
    public function setDtFermetureAuto(DateTime $dtFermetureAuto = null) {
        $this->dtFermetureAuto = $dtFermetureAuto;
        return $this;
    }
}
