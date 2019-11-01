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
 * Frais professionnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFraisProfessionnelTrait {

    /**
     * Frais professionnel.
     *
     * @var bool
     */
    private $fraisProfessionnel;

    /**
     * Get the frais professionnel.
     *
     * @return bool Returns the frais professionnel.
     */
    public function getFraisProfessionnel() {
        return $this->fraisProfessionnel;
    }

    /**
     * Set the frais professionnel.
     *
     * @param bool $fraisProfessionnel The frais professionnel.
     */
    public function setFraisProfessionnel($fraisProfessionnel) {
        $this->fraisProfessionnel = $fraisProfessionnel;
        return $this;
    }
}
