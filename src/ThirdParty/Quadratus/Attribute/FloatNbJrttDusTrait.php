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
 * Nb jrtt dus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJrttDusTrait {

    /**
     * Nb jrtt dus.
     *
     * @var float
     */
    private $nbJrttDus;

    /**
     * Get the nb jrtt dus.
     *
     * @return float Returns the nb jrtt dus.
     */
    public function getNbJrttDus() {
        return $this->nbJrttDus;
    }

    /**
     * Set the nb jrtt dus.
     *
     * @param float $nbJrttDus The nb jrtt dus.
     */
    public function setNbJrttDus($nbJrttDus) {
        $this->nbJrttDus = $nbJrttDus;
        return $this;
    }
}
