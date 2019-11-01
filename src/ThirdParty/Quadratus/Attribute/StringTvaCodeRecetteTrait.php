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
 * Tva code recette trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCodeRecetteTrait {

    /**
     * Tva code recette.
     *
     * @var string
     */
    private $tvaCodeRecette;

    /**
     * Get the tva code recette.
     *
     * @return string Returns the tva code recette.
     */
    public function getTvaCodeRecette() {
        return $this->tvaCodeRecette;
    }

    /**
     * Set the tva code recette.
     *
     * @param string $tvaCodeRecette The tva code recette.
     */
    public function setTvaCodeRecette($tvaCodeRecette) {
        $this->tvaCodeRecette = $tvaCodeRecette;
        return $this;
    }
}
