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
 * Embauche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeEmbaucheTrait {

    /**
     * Embauche.
     *
     * @var DateTime|null
     */
    private $embauche;

    /**
     * Get the embauche.
     *
     * @return DateTime|null Returns the embauche.
     */
    public function getEmbauche() {
        return $this->embauche;
    }

    /**
     * Set the embauche.
     *
     * @param DateTime|null $embauche The embauche.
     */
    public function setEmbauche(DateTime $embauche = null) {
        $this->embauche = $embauche;
        return $this;
    }
}
