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
 * Nb due trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDueTrait {

    /**
     * Nb due.
     *
     * @var int
     */
    private $nbDue;

    /**
     * Get the nb due.
     *
     * @return int Returns the nb due.
     */
    public function getNbDue() {
        return $this->nbDue;
    }

    /**
     * Set the nb due.
     *
     * @param int $nbDue The nb due.
     */
    public function setNbDue($nbDue) {
        $this->nbDue = $nbDue;
        return $this;
    }
}
