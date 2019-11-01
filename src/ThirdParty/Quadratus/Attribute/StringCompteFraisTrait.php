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
 * Compte frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteFraisTrait {

    /**
     * Compte frais.
     *
     * @var string
     */
    private $compteFrais;

    /**
     * Get the compte frais.
     *
     * @return string Returns the compte frais.
     */
    public function getCompteFrais() {
        return $this->compteFrais;
    }

    /**
     * Set the compte frais.
     *
     * @param string $compteFrais The compte frais.
     */
    public function setCompteFrais($compteFrais) {
        $this->compteFrais = $compteFrais;
        return $this;
    }
}
