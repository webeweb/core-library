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
 * Imprimer dans pied trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImprimerDansPiedTrait {

    /**
     * Imprimer dans pied.
     *
     * @var bool
     */
    private $imprimerDansPied;

    /**
     * Get the imprimer dans pied.
     *
     * @return bool Returns the imprimer dans pied.
     */
    public function getImprimerDansPied() {
        return $this->imprimerDansPied;
    }

    /**
     * Set the imprimer dans pied.
     *
     * @param bool $imprimerDansPied The imprimer dans pied.
     */
    public function setImprimerDansPied($imprimerDansPied) {
        $this->imprimerDansPied = $imprimerDansPied;
        return $this;
    }
}
