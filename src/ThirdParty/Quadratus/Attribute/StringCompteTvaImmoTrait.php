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
 * Compte tva immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteTvaImmoTrait {

    /**
     * Compte tva immo.
     *
     * @var string
     */
    private $compteTvaImmo;

    /**
     * Get the compte tva immo.
     *
     * @return string Returns the compte tva immo.
     */
    public function getCompteTvaImmo() {
        return $this->compteTvaImmo;
    }

    /**
     * Set the compte tva immo.
     *
     * @param string $compteTvaImmo The compte tva immo.
     */
    public function setCompteTvaImmo($compteTvaImmo) {
        $this->compteTvaImmo = $compteTvaImmo;
        return $this;
    }
}
