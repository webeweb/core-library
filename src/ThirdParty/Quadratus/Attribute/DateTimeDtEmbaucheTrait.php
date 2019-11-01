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
 * Dt embauche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtEmbaucheTrait {

    /**
     * Dt embauche.
     *
     * @var DateTime|null
     */
    private $dtEmbauche;

    /**
     * Get the dt embauche.
     *
     * @return DateTime|null Returns the dt embauche.
     */
    public function getDtEmbauche() {
        return $this->dtEmbauche;
    }

    /**
     * Set the dt embauche.
     *
     * @param DateTime|null $dtEmbauche The dt embauche.
     */
    public function setDtEmbauche(DateTime $dtEmbauche = null) {
        $this->dtEmbauche = $dtEmbauche;
        return $this;
    }
}
