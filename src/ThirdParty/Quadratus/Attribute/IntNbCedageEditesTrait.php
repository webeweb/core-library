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
 * Nb cedage edites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCedageEditesTrait {

    /**
     * Nb cedage edites.
     *
     * @var int
     */
    private $nbCedageEdites;

    /**
     * Get the nb cedage edites.
     *
     * @return int Returns the nb cedage edites.
     */
    public function getNbCedageEdites() {
        return $this->nbCedageEdites;
    }

    /**
     * Set the nb cedage edites.
     *
     * @param int $nbCedageEdites The nb cedage edites.
     */
    public function setNbCedageEdites($nbCedageEdites) {
        $this->nbCedageEdites = $nbCedageEdites;
        return $this;
    }
}
