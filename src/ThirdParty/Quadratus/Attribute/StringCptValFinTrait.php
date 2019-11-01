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
 * Cpt val fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptValFinTrait {

    /**
     * Cpt val fin.
     *
     * @var string
     */
    private $cptValFin;

    /**
     * Get the cpt val fin.
     *
     * @return string Returns the cpt val fin.
     */
    public function getCptValFin() {
        return $this->cptValFin;
    }

    /**
     * Set the cpt val fin.
     *
     * @param string $cptValFin The cpt val fin.
     */
    public function setCptValFin($cptValFin) {
        $this->cptValFin = $cptValFin;
        return $this;
    }
}
