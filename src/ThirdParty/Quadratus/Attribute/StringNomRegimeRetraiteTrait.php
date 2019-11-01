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
 * Nom regime retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomRegimeRetraiteTrait {

    /**
     * Nom regime retraite.
     *
     * @var string
     */
    private $nomRegimeRetraite;

    /**
     * Get the nom regime retraite.
     *
     * @return string Returns the nom regime retraite.
     */
    public function getNomRegimeRetraite() {
        return $this->nomRegimeRetraite;
    }

    /**
     * Set the nom regime retraite.
     *
     * @param string $nomRegimeRetraite The nom regime retraite.
     */
    public function setNomRegimeRetraite($nomRegimeRetraite) {
        $this->nomRegimeRetraite = $nomRegimeRetraite;
        return $this;
    }
}
