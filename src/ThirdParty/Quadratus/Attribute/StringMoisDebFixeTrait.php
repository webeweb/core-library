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
 * Mois deb fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisDebFixeTrait {

    /**
     * Mois deb fixe.
     *
     * @var string
     */
    private $moisDebFixe;

    /**
     * Get the mois deb fixe.
     *
     * @return string Returns the mois deb fixe.
     */
    public function getMoisDebFixe() {
        return $this->moisDebFixe;
    }

    /**
     * Set the mois deb fixe.
     *
     * @param string $moisDebFixe The mois deb fixe.
     */
    public function setMoisDebFixe($moisDebFixe) {
        $this->moisDebFixe = $moisDebFixe;
        return $this;
    }
}
