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
 * Nb tab amort imprimes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbTabAmortImprimesTrait {

    /**
     * Nb tab amort imprimes.
     *
     * @var int
     */
    private $nbTabAmortImprimes;

    /**
     * Get the nb tab amort imprimes.
     *
     * @return int Returns the nb tab amort imprimes.
     */
    public function getNbTabAmortImprimes() {
        return $this->nbTabAmortImprimes;
    }

    /**
     * Set the nb tab amort imprimes.
     *
     * @param int $nbTabAmortImprimes The nb tab amort imprimes.
     */
    public function setNbTabAmortImprimes($nbTabAmortImprimes) {
        $this->nbTabAmortImprimes = $nbTabAmortImprimes;
        return $this;
    }
}
