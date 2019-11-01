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
 * Nom champ trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomChampTrait {

    /**
     * Nom champ.
     *
     * @var string
     */
    private $nomChamp;

    /**
     * Get the nom champ.
     *
     * @return string Returns the nom champ.
     */
    public function getNomChamp() {
        return $this->nomChamp;
    }

    /**
     * Set the nom champ.
     *
     * @param string $nomChamp The nom champ.
     */
    public function setNomChamp($nomChamp) {
        $this->nomChamp = $nomChamp;
        return $this;
    }
}
