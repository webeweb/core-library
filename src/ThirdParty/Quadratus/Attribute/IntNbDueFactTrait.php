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
 * Nb due fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDueFactTrait {

    /**
     * Nb due fact.
     *
     * @var int
     */
    private $nbDueFact;

    /**
     * Get the nb due fact.
     *
     * @return int Returns the nb due fact.
     */
    public function getNbDueFact() {
        return $this->nbDueFact;
    }

    /**
     * Set the nb due fact.
     *
     * @param int $nbDueFact The nb due fact.
     */
    public function setNbDueFact($nbDueFact) {
        $this->nbDueFact = $nbDueFact;
        return $this;
    }
}
