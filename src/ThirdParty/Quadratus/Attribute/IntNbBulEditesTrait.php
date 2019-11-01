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
 * Nb bul edites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBulEditesTrait {

    /**
     * Nb bul edites.
     *
     * @var int
     */
    private $nbBulEdites;

    /**
     * Get the nb bul edites.
     *
     * @return int Returns the nb bul edites.
     */
    public function getNbBulEdites() {
        return $this->nbBulEdites;
    }

    /**
     * Set the nb bul edites.
     *
     * @param int $nbBulEdites The nb bul edites.
     */
    public function setNbBulEdites($nbBulEdites) {
        $this->nbBulEdites = $nbBulEdites;
        return $this;
    }
}
