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
 * Cpt origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptOrigineTrait {

    /**
     * Cpt origine.
     *
     * @var string
     */
    private $cptOrigine;

    /**
     * Get the cpt origine.
     *
     * @return string Returns the cpt origine.
     */
    public function getCptOrigine() {
        return $this->cptOrigine;
    }

    /**
     * Set the cpt origine.
     *
     * @param string $cptOrigine The cpt origine.
     */
    public function setCptOrigine($cptOrigine) {
        $this->cptOrigine = $cptOrigine;
        return $this;
    }
}
