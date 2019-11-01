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
 * Nb h repos comp pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHReposCompPrisTrait {

    /**
     * Nb h repos comp pris.
     *
     * @var float
     */
    private $nbHReposCompPris;

    /**
     * Get the nb h repos comp pris.
     *
     * @return float Returns the nb h repos comp pris.
     */
    public function getNbHReposCompPris() {
        return $this->nbHReposCompPris;
    }

    /**
     * Set the nb h repos comp pris.
     *
     * @param float $nbHReposCompPris The nb h repos comp pris.
     */
    public function setNbHReposCompPris($nbHReposCompPris) {
        $this->nbHReposCompPris = $nbHReposCompPris;
        return $this;
    }
}
