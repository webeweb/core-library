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
 * Nb attes ijss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesIjssTrait {

    /**
     * Nb attes ijss.
     *
     * @var int
     */
    private $nbAttesIjss;

    /**
     * Get the nb attes ijss.
     *
     * @return int Returns the nb attes ijss.
     */
    public function getNbAttesIjss() {
        return $this->nbAttesIjss;
    }

    /**
     * Set the nb attes ijss.
     *
     * @param int $nbAttesIjss The nb attes ijss.
     */
    public function setNbAttesIjss($nbAttesIjss) {
        $this->nbAttesIjss = $nbAttesIjss;
        return $this;
    }
}
