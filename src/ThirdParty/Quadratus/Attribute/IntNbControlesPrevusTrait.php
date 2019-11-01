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
 * Nb controles prevus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbControlesPrevusTrait {

    /**
     * Nb controles prevus.
     *
     * @var int
     */
    private $nbControlesPrevus;

    /**
     * Get the nb controles prevus.
     *
     * @return int Returns the nb controles prevus.
     */
    public function getNbControlesPrevus() {
        return $this->nbControlesPrevus;
    }

    /**
     * Set the nb controles prevus.
     *
     * @param int $nbControlesPrevus The nb controles prevus.
     */
    public function setNbControlesPrevus($nbControlesPrevus) {
        $this->nbControlesPrevus = $nbControlesPrevus;
        return $this;
    }
}
