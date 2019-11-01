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
 * Nb h remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHRemplaceTrait {

    /**
     * Nb h remplace.
     *
     * @var float
     */
    private $nbHRemplace;

    /**
     * Get the nb h remplace.
     *
     * @return float Returns the nb h remplace.
     */
    public function getNbHRemplace() {
        return $this->nbHRemplace;
    }

    /**
     * Set the nb h remplace.
     *
     * @param float $nbHRemplace The nb h remplace.
     */
    public function setNbHRemplace($nbHRemplace) {
        $this->nbHRemplace = $nbHRemplace;
        return $this;
    }
}
