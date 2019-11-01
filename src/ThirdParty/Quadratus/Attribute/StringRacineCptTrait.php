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
 * Racine cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRacineCptTrait {

    /**
     * Racine cpt.
     *
     * @var string
     */
    private $racineCpt;

    /**
     * Get the racine cpt.
     *
     * @return string Returns the racine cpt.
     */
    public function getRacineCpt() {
        return $this->racineCpt;
    }

    /**
     * Set the racine cpt.
     *
     * @param string $racineCpt The racine cpt.
     */
    public function setRacineCpt($racineCpt) {
        $this->racineCpt = $racineCpt;
        return $this;
    }
}
