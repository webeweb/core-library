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
 * Nb jours2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJours2Trait {

    /**
     * Nb jours2.
     *
     * @var int
     */
    private $nbJours2;

    /**
     * Get the nb jours2.
     *
     * @return int Returns the nb jours2.
     */
    public function getNbJours2() {
        return $this->nbJours2;
    }

    /**
     * Set the nb jours2.
     *
     * @param int $nbJours2 The nb jours2.
     */
    public function setNbJours2($nbJours2) {
        $this->nbJours2 = $nbJours2;
        return $this;
    }
}
