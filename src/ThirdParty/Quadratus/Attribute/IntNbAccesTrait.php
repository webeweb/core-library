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
 * Nb acces trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAccesTrait {

    /**
     * Nb acces.
     *
     * @var int
     */
    private $nbAcces;

    /**
     * Get the nb acces.
     *
     * @return int Returns the nb acces.
     */
    public function getNbAcces() {
        return $this->nbAcces;
    }

    /**
     * Set the nb acces.
     *
     * @param int $nbAcces The nb acces.
     */
    public function setNbAcces($nbAcces) {
        $this->nbAcces = $nbAcces;
        return $this;
    }
}
