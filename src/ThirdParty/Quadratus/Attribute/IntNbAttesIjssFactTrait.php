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
 * Nb attes ijss fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAttesIjssFactTrait {

    /**
     * Nb attes ijss fact.
     *
     * @var int
     */
    private $nbAttesIjssFact;

    /**
     * Get the nb attes ijss fact.
     *
     * @return int Returns the nb attes ijss fact.
     */
    public function getNbAttesIjssFact() {
        return $this->nbAttesIjssFact;
    }

    /**
     * Set the nb attes ijss fact.
     *
     * @param int $nbAttesIjssFact The nb attes ijss fact.
     */
    public function setNbAttesIjssFact($nbAttesIjssFact) {
        $this->nbAttesIjssFact = $nbAttesIjssFact;
        return $this;
    }
}
