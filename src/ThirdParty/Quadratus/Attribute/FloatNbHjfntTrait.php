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
 * Nb hjfnt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHjfntTrait {

    /**
     * Nb hjfnt.
     *
     * @var float
     */
    private $nbHjfnt;

    /**
     * Get the nb hjfnt.
     *
     * @return float Returns the nb hjfnt.
     */
    public function getNbHjfnt() {
        return $this->nbHjfnt;
    }

    /**
     * Set the nb hjfnt.
     *
     * @param float $nbHjfnt The nb hjfnt.
     */
    public function setNbHjfnt($nbHjfnt) {
        $this->nbHjfnt = $nbHjfnt;
        return $this;
    }
}
