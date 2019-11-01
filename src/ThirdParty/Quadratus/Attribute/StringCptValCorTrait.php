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
 * Cpt val cor trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptValCorTrait {

    /**
     * Cpt val cor.
     *
     * @var string
     */
    private $cptValCor;

    /**
     * Get the cpt val cor.
     *
     * @return string Returns the cpt val cor.
     */
    public function getCptValCor() {
        return $this->cptValCor;
    }

    /**
     * Set the cpt val cor.
     *
     * @param string $cptValCor The cpt val cor.
     */
    public function setCptValCor($cptValCor) {
        $this->cptValCor = $cptValCor;
        return $this;
    }
}
