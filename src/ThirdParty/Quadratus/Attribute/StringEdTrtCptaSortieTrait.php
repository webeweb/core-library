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
 * Ed trt cpta sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdTrtCptaSortieTrait {

    /**
     * Ed trt cpta sortie.
     *
     * @var string
     */
    private $edTrtCptaSortie;

    /**
     * Get the ed trt cpta sortie.
     *
     * @return string Returns the ed trt cpta sortie.
     */
    public function getEdTrtCptaSortie() {
        return $this->edTrtCptaSortie;
    }

    /**
     * Set the ed trt cpta sortie.
     *
     * @param string $edTrtCptaSortie The ed trt cpta sortie.
     */
    public function setEdTrtCptaSortie($edTrtCptaSortie) {
        $this->edTrtCptaSortie = $edTrtCptaSortie;
        return $this;
    }
}
