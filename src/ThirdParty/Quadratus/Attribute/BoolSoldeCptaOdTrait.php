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

/**
 * Solde cpta od trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoldeCptaOdTrait {

    /**
     * Solde cpta od.
     *
     * @var bool
     */
    private $soldeCptaOd;

    /**
     * Get the solde cpta od.
     *
     * @return bool Returns the solde cpta od.
     */
    public function getSoldeCptaOd() {
        return $this->soldeCptaOd;
    }

    /**
     * Set the solde cpta od.
     *
     * @param bool $soldeCptaOd The solde cpta od.
     */
    public function setSoldeCptaOd($soldeCptaOd) {
        $this->soldeCptaOd = $soldeCptaOd;
        return $this;
    }
}
