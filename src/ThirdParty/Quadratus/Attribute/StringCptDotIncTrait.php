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
 * Cpt dot inc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDotIncTrait {

    /**
     * Cpt dot inc.
     *
     * @var string
     */
    private $cptDotInc;

    /**
     * Get the cpt dot inc.
     *
     * @return string Returns the cpt dot inc.
     */
    public function getCptDotInc() {
        return $this->cptDotInc;
    }

    /**
     * Set the cpt dot inc.
     *
     * @param string $cptDotInc The cpt dot inc.
     */
    public function setCptDotInc($cptDotInc) {
        $this->cptDotInc = $cptDotInc;
        return $this;
    }
}
