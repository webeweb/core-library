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
 * Nb attes ijss at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesIjssAtTrait {

    /**
     * Nb attes ijss at.
     *
     * @var int
     */
    private $nbAttesIjssAt;

    /**
     * Get the nb attes ijss at.
     *
     * @return int Returns the nb attes ijss at.
     */
    public function getNbAttesIjssAt() {
        return $this->nbAttesIjssAt;
    }

    /**
     * Set the nb attes ijss at.
     *
     * @param int $nbAttesIjssAt The nb attes ijss at.
     */
    public function setNbAttesIjssAt($nbAttesIjssAt) {
        $this->nbAttesIjssAt = $nbAttesIjssAt;
        return $this;
    }
}
