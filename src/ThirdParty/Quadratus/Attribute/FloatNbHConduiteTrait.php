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
 * Nb h conduite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHConduiteTrait {

    /**
     * Nb h conduite.
     *
     * @var float
     */
    private $nbHConduite;

    /**
     * Get the nb h conduite.
     *
     * @return float Returns the nb h conduite.
     */
    public function getNbHConduite() {
        return $this->nbHConduite;
    }

    /**
     * Set the nb h conduite.
     *
     * @param float $nbHConduite The nb h conduite.
     */
    public function setNbHConduite($nbHConduite) {
        $this->nbHConduite = $nbHConduite;
        return $this;
    }
}
