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
 * Lien doc doss cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLienDocDossCptaTrait {

    /**
     * Lien doc doss cpta.
     *
     * @var string
     */
    private $lienDocDossCpta;

    /**
     * Get the lien doc doss cpta.
     *
     * @return string Returns the lien doc doss cpta.
     */
    public function getLienDocDossCpta() {
        return $this->lienDocDossCpta;
    }

    /**
     * Set the lien doc doss cpta.
     *
     * @param string $lienDocDossCpta The lien doc doss cpta.
     */
    public function setLienDocDossCpta($lienDocDossCpta) {
        $this->lienDocDossCpta = $lienDocDossCpta;
        return $this;
    }
}
