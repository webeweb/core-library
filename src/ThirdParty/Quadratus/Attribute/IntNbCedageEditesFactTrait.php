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
 * Nb cedage edites fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbCedageEditesFactTrait {

    /**
     * Nb cedage edites fact.
     *
     * @var int
     */
    private $nbCedageEditesFact;

    /**
     * Get the nb cedage edites fact.
     *
     * @return int Returns the nb cedage edites fact.
     */
    public function getNbCedageEditesFact() {
        return $this->nbCedageEditesFact;
    }

    /**
     * Set the nb cedage edites fact.
     *
     * @param int $nbCedageEditesFact The nb cedage edites fact.
     */
    public function setNbCedageEditesFact($nbCedageEditesFact) {
        $this->nbCedageEditesFact = $nbCedageEditesFact;
        return $this;
    }
}
