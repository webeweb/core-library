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
 * Nb h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSupTrait {

    /**
     * Nb h sup.
     *
     * @var float
     */
    private $nbHSup;

    /**
     * Get the nb h sup.
     *
     * @return float Returns the nb h sup.
     */
    public function getNbHSup() {
        return $this->nbHSup;
    }

    /**
     * Set the nb h sup.
     *
     * @param float $nbHSup The nb h sup.
     */
    public function setNbHSup($nbHSup) {
        $this->nbHSup = $nbHSup;
        return $this;
    }
}
