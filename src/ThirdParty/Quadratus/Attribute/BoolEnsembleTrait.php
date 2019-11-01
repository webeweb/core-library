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
 * Ensemble trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEnsembleTrait {

    /**
     * Ensemble.
     *
     * @var bool
     */
    private $ensemble;

    /**
     * Get the ensemble.
     *
     * @return bool Returns the ensemble.
     */
    public function getEnsemble() {
        return $this->ensemble;
    }

    /**
     * Set the ensemble.
     *
     * @param bool $ensemble The ensemble.
     */
    public function setEnsemble($ensemble) {
        $this->ensemble = $ensemble;
        return $this;
    }
}
