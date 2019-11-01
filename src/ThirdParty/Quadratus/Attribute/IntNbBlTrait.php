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
 * Nb bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBlTrait {

    /**
     * Nb bl.
     *
     * @var int
     */
    private $nbBl;

    /**
     * Get the nb bl.
     *
     * @return int Returns the nb bl.
     */
    public function getNbBl() {
        return $this->nbBl;
    }

    /**
     * Set the nb bl.
     *
     * @param int $nbBl The nb bl.
     */
    public function setNbBl($nbBl) {
        $this->nbBl = $nbBl;
        return $this;
    }
}
