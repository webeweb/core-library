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
 * Nb doc attache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDocAttacheTrait {

    /**
     * Nb doc attache.
     *
     * @var int
     */
    private $nbDocAttache;

    /**
     * Get the nb doc attache.
     *
     * @return int Returns the nb doc attache.
     */
    public function getNbDocAttache() {
        return $this->nbDocAttache;
    }

    /**
     * Set the nb doc attache.
     *
     * @param int $nbDocAttache The nb doc attache.
     */
    public function setNbDocAttache($nbDocAttache) {
        $this->nbDocAttache = $nbDocAttache;
        return $this;
    }
}
