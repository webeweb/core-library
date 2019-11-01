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
 * Nom retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomRetraiteTrait {

    /**
     * Nom retraite.
     *
     * @var string
     */
    private $nomRetraite;

    /**
     * Get the nom retraite.
     *
     * @return string Returns the nom retraite.
     */
    public function getNomRetraite() {
        return $this->nomRetraite;
    }

    /**
     * Set the nom retraite.
     *
     * @param string $nomRetraite The nom retraite.
     */
    public function setNomRetraite($nomRetraite) {
        $this->nomRetraite = $nomRetraite;
        return $this;
    }
}
