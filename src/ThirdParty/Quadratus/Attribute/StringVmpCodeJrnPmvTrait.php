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
 * Vmp code jrn pmv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVmpCodeJrnPmvTrait {

    /**
     * Vmp code jrn pmv.
     *
     * @var string
     */
    private $vmpCodeJrnPmv;

    /**
     * Get the vmp code jrn pmv.
     *
     * @return string Returns the vmp code jrn pmv.
     */
    public function getVmpCodeJrnPmv() {
        return $this->vmpCodeJrnPmv;
    }

    /**
     * Set the vmp code jrn pmv.
     *
     * @param string $vmpCodeJrnPmv The vmp code jrn pmv.
     */
    public function setVmpCodeJrnPmv($vmpCodeJrnPmv) {
        $this->vmpCodeJrnPmv = $vmpCodeJrnPmv;
        return $this;
    }
}
