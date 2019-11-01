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
 * Nomenclature europe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomenclatureEuropeTrait {

    /**
     * Nomenclature europe.
     *
     * @var string
     */
    private $nomenclatureEurope;

    /**
     * Get the nomenclature europe.
     *
     * @return string Returns the nomenclature europe.
     */
    public function getNomenclatureEurope() {
        return $this->nomenclatureEurope;
    }

    /**
     * Set the nomenclature europe.
     *
     * @param string $nomenclatureEurope The nomenclature europe.
     */
    public function setNomenclatureEurope($nomenclatureEurope) {
        $this->nomenclatureEurope = $nomenclatureEurope;
        return $this;
    }
}
