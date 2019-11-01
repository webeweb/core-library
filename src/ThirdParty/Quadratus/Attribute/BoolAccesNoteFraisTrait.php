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
 * Acces note frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesNoteFraisTrait {

    /**
     * Acces note frais.
     *
     * @var bool
     */
    private $accesNoteFrais;

    /**
     * Get the acces note frais.
     *
     * @return bool Returns the acces note frais.
     */
    public function getAccesNoteFrais() {
        return $this->accesNoteFrais;
    }

    /**
     * Set the acces note frais.
     *
     * @param bool $accesNoteFrais The acces note frais.
     */
    public function setAccesNoteFrais($accesNoteFrais) {
        $this->accesNoteFrais = $accesNoteFrais;
        return $this;
    }
}
