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
 * Nomenclature ensemble trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNomenclatureEnsembleTrait {

    /**
     * Nomenclature ensemble.
     *
     * @var bool
     */
    private $nomenclatureEnsemble;

    /**
     * Get the nomenclature ensemble.
     *
     * @return bool Returns the nomenclature ensemble.
     */
    public function getNomenclatureEnsemble() {
        return $this->nomenclatureEnsemble;
    }

    /**
     * Set the nomenclature ensemble.
     *
     * @param bool $nomenclatureEnsemble The nomenclature ensemble.
     */
    public function setNomenclatureEnsemble($nomenclatureEnsemble) {
        $this->nomenclatureEnsemble = $nomenclatureEnsemble;
        return $this;
    }
}
