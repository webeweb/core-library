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
 * Nb ecritures raz trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbEcrituresRazTrait {

    /**
     * Nb ecritures raz.
     *
     * @var int
     */
    private $nbEcrituresRaz;

    /**
     * Get the nb ecritures raz.
     *
     * @return int Returns the nb ecritures raz.
     */
    public function getNbEcrituresRaz() {
        return $this->nbEcrituresRaz;
    }

    /**
     * Set the nb ecritures raz.
     *
     * @param int $nbEcrituresRaz The nb ecritures raz.
     */
    public function setNbEcrituresRaz($nbEcrituresRaz) {
        $this->nbEcrituresRaz = $nbEcrituresRaz;
        return $this;
    }
}
