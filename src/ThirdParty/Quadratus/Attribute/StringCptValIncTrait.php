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
 * Cpt val inc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptValIncTrait {

    /**
     * Cpt val inc.
     *
     * @var string
     */
    private $cptValInc;

    /**
     * Get the cpt val inc.
     *
     * @return string Returns the cpt val inc.
     */
    public function getCptValInc() {
        return $this->cptValInc;
    }

    /**
     * Set the cpt val inc.
     *
     * @param string $cptValInc The cpt val inc.
     */
    public function setCptValInc($cptValInc) {
        $this->cptValInc = $cptValInc;
        return $this;
    }
}
