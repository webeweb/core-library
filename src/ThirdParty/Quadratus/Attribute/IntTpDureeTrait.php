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
 * Tp duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTpDureeTrait {

    /**
     * Tp duree.
     *
     * @var int
     */
    private $tpDuree;

    /**
     * Get the tp duree.
     *
     * @return int Returns the tp duree.
     */
    public function getTpDuree() {
        return $this->tpDuree;
    }

    /**
     * Set the tp duree.
     *
     * @param int $tpDuree The tp duree.
     */
    public function setTpDuree($tpDuree) {
        $this->tpDuree = $tpDuree;
        return $this;
    }
}
