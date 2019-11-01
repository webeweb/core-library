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
 * Libelle interne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleInterneTrait {

    /**
     * Libelle interne.
     *
     * @var string
     */
    private $libelleInterne;

    /**
     * Get the libelle interne.
     *
     * @return string Returns the libelle interne.
     */
    public function getLibelleInterne() {
        return $this->libelleInterne;
    }

    /**
     * Set the libelle interne.
     *
     * @param string $libelleInterne The libelle interne.
     */
    public function setLibelleInterne($libelleInterne) {
        $this->libelleInterne = $libelleInterne;
        return $this;
    }
}
