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
 * Cpt dot fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDotFinTrait {

    /**
     * Cpt dot fin.
     *
     * @var string
     */
    private $cptDotFin;

    /**
     * Get the cpt dot fin.
     *
     * @return string Returns the cpt dot fin.
     */
    public function getCptDotFin() {
        return $this->cptDotFin;
    }

    /**
     * Set the cpt dot fin.
     *
     * @param string $cptDotFin The cpt dot fin.
     */
    public function setCptDotFin($cptDotFin) {
        $this->cptDotFin = $cptDotFin;
        return $this;
    }
}
