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
 * Frp recette trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFrpRecetteTrait {

    /**
     * Frp recette.
     *
     * @var string
     */
    private $frpRecette;

    /**
     * Get the frp recette.
     *
     * @return string Returns the frp recette.
     */
    public function getFrpRecette() {
        return $this->frpRecette;
    }

    /**
     * Set the frp recette.
     *
     * @param string $frpRecette The frp recette.
     */
    public function setFrpRecette($frpRecette) {
        $this->frpRecette = $frpRecette;
        return $this;
    }
}
