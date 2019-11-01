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
 * Nb bul edites fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBulEditesFactTrait {

    /**
     * Nb bul edites fact.
     *
     * @var int
     */
    private $nbBulEditesFact;

    /**
     * Get the nb bul edites fact.
     *
     * @return int Returns the nb bul edites fact.
     */
    public function getNbBulEditesFact() {
        return $this->nbBulEditesFact;
    }

    /**
     * Set the nb bul edites fact.
     *
     * @param int $nbBulEditesFact The nb bul edites fact.
     */
    public function setNbBulEditesFact($nbBulEditesFact) {
        $this->nbBulEditesFact = $nbBulEditesFact;
        return $this;
    }
}
