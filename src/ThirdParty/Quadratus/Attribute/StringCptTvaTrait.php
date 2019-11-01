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
 * Cpt tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptTvaTrait {

    /**
     * Cpt tva.
     *
     * @var string
     */
    private $cptTva;

    /**
     * Get the cpt tva.
     *
     * @return string Returns the cpt tva.
     */
    public function getCptTva() {
        return $this->cptTva;
    }

    /**
     * Set the cpt tva.
     *
     * @param string $cptTva The cpt tva.
     */
    public function setCptTva($cptTva) {
        $this->cptTva = $cptTva;
        return $this;
    }
}
