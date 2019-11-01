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
 * Nb bilans edites fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBilansEditesFactTrait {

    /**
     * Nb bilans edites fact.
     *
     * @var int
     */
    private $nbBilansEditesFact;

    /**
     * Get the nb bilans edites fact.
     *
     * @return int Returns the nb bilans edites fact.
     */
    public function getNbBilansEditesFact() {
        return $this->nbBilansEditesFact;
    }

    /**
     * Set the nb bilans edites fact.
     *
     * @param int $nbBilansEditesFact The nb bilans edites fact.
     */
    public function setNbBilansEditesFact($nbBilansEditesFact) {
        $this->nbBilansEditesFact = $nbBilansEditesFact;
        return $this;
    }
}
