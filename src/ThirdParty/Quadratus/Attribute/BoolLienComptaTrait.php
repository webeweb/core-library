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
 * Lien compta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLienComptaTrait {

    /**
     * Lien compta.
     *
     * @var bool
     */
    private $lienCompta;

    /**
     * Get the lien compta.
     *
     * @return bool Returns the lien compta.
     */
    public function getLienCompta() {
        return $this->lienCompta;
    }

    /**
     * Set the lien compta.
     *
     * @param bool $lienCompta The lien compta.
     */
    public function setLienCompta($lienCompta) {
        $this->lienCompta = $lienCompta;
        return $this;
    }
}
