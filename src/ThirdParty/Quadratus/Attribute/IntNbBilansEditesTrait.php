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
 * Nb bilans edites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBilansEditesTrait {

    /**
     * Nb bilans edites.
     *
     * @var int
     */
    private $nbBilansEdites;

    /**
     * Get the nb bilans edites.
     *
     * @return int Returns the nb bilans edites.
     */
    public function getNbBilansEdites() {
        return $this->nbBilansEdites;
    }

    /**
     * Set the nb bilans edites.
     *
     * @param int $nbBilansEdites The nb bilans edites.
     */
    public function setNbBilansEdites($nbBilansEdites) {
        $this->nbBilansEdites = $nbBilansEdites;
        return $this;
    }
}
