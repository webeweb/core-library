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
 * Nb jour interval trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJourIntervalTrait {

    /**
     * Nb jour interval.
     *
     * @var int
     */
    private $nbJourInterval;

    /**
     * Get the nb jour interval.
     *
     * @return int Returns the nb jour interval.
     */
    public function getNbJourInterval() {
        return $this->nbJourInterval;
    }

    /**
     * Set the nb jour interval.
     *
     * @param int $nbJourInterval The nb jour interval.
     */
    public function setNbJourInterval($nbJourInterval) {
        $this->nbJourInterval = $nbJourInterval;
        return $this;
    }
}
