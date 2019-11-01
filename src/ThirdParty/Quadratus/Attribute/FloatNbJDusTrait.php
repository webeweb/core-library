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
 * Nb j dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJDusTrait {

    /**
     * Nb j dus.
     *
     * @var float
     */
    private $nbJDus;

    /**
     * Get the nb j dus.
     *
     * @return float Returns the nb j dus.
     */
    public function getNbJDus() {
        return $this->nbJDus;
    }

    /**
     * Set the nb j dus.
     *
     * @param float $nbJDus The nb j dus.
     */
    public function setNbJDus($nbJDus) {
        $this->nbJDus = $nbJDus;
        return $this;
    }
}
