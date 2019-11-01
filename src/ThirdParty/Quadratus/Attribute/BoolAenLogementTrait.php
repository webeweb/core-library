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
 * Aen logement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAenLogementTrait {

    /**
     * Aen logement.
     *
     * @var bool
     */
    private $aenLogement;

    /**
     * Get the aen logement.
     *
     * @return bool Returns the aen logement.
     */
    public function getAenLogement() {
        return $this->aenLogement;
    }

    /**
     * Set the aen logement.
     *
     * @param bool $aenLogement The aen logement.
     */
    public function setAenLogement($aenLogement) {
        $this->aenLogement = $aenLogement;
        return $this;
    }
}
