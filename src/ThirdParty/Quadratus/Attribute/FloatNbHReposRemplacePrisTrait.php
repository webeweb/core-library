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
 * Nb h repos remplace pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHReposRemplacePrisTrait {

    /**
     * Nb h repos remplace pris.
     *
     * @var float
     */
    private $nbHReposRemplacePris;

    /**
     * Get the nb h repos remplace pris.
     *
     * @return float Returns the nb h repos remplace pris.
     */
    public function getNbHReposRemplacePris() {
        return $this->nbHReposRemplacePris;
    }

    /**
     * Set the nb h repos remplace pris.
     *
     * @param float $nbHReposRemplacePris The nb h repos remplace pris.
     */
    public function setNbHReposRemplacePris($nbHReposRemplacePris) {
        $this->nbHReposRemplacePris = $nbHReposRemplacePris;
        return $this;
    }
}
