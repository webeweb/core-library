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
 * Fin calcul immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFinCalculImmoTrait {

    /**
     * Fin calcul immo.
     *
     * @var DateTime|null
     */
    private $finCalculImmo;

    /**
     * Get the fin calcul immo.
     *
     * @return DateTime|null Returns the fin calcul immo.
     */
    public function getFinCalculImmo() {
        return $this->finCalculImmo;
    }

    /**
     * Set the fin calcul immo.
     *
     * @param DateTime|null $finCalculImmo The fin calcul immo.
     */
    public function setFinCalculImmo(DateTime $finCalculImmo = null) {
        $this->finCalculImmo = $finCalculImmo;
        return $this;
    }
}
