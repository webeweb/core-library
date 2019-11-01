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
 * Nb jours1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJours1Trait {

    /**
     * Nb jours1.
     *
     * @var int
     */
    private $nbJours1;

    /**
     * Get the nb jours1.
     *
     * @return int Returns the nb jours1.
     */
    public function getNbJours1() {
        return $this->nbJours1;
    }

    /**
     * Set the nb jours1.
     *
     * @param int $nbJours1 The nb jours1.
     */
    public function setNbJours1($nbJours1) {
        $this->nbJours1 = $nbJours1;
        return $this;
    }
}
