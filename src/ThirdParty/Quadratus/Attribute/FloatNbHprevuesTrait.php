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
 * Nb hprevues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHprevuesTrait {

    /**
     * Nb hprevues.
     *
     * @var float
     */
    private $nbHprevues;

    /**
     * Get the nb hprevues.
     *
     * @return float Returns the nb hprevues.
     */
    public function getNbHprevues() {
        return $this->nbHprevues;
    }

    /**
     * Set the nb hprevues.
     *
     * @param float $nbHprevues The nb hprevues.
     */
    public function setNbHprevues($nbHprevues) {
        $this->nbHprevues = $nbHprevues;
        return $this;
    }
}
