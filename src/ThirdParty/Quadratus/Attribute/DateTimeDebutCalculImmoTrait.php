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
 * Debut calcul immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutCalculImmoTrait {

    /**
     * Debut calcul immo.
     *
     * @var DateTime|null
     */
    private $debutCalculImmo;

    /**
     * Get the debut calcul immo.
     *
     * @return DateTime|null Returns the debut calcul immo.
     */
    public function getDebutCalculImmo() {
        return $this->debutCalculImmo;
    }

    /**
     * Set the debut calcul immo.
     *
     * @param DateTime|null $debutCalculImmo The debut calcul immo.
     */
    public function setDebutCalculImmo(DateTime $debutCalculImmo = null) {
        $this->debutCalculImmo = $debutCalculImmo;
        return $this;
    }
}
