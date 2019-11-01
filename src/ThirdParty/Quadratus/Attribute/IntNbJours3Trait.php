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
 * Nb jours3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJours3Trait {

    /**
     * Nb jours3.
     *
     * @var int
     */
    private $nbJours3;

    /**
     * Get the nb jours3.
     *
     * @return int Returns the nb jours3.
     */
    public function getNbJours3() {
        return $this->nbJours3;
    }

    /**
     * Set the nb jours3.
     *
     * @param int $nbJours3 The nb jours3.
     */
    public function setNbJours3($nbJours3) {
        $this->nbJours3 = $nbJours3;
        return $this;
    }
}
