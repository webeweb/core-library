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
 * Resultat ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolResultatDucsTrait {

    /**
     * Resultat ducs.
     *
     * @var bool
     */
    private $resultatDucs;

    /**
     * Get the resultat ducs.
     *
     * @return bool Returns the resultat ducs.
     */
    public function getResultatDucs() {
        return $this->resultatDucs;
    }

    /**
     * Set the resultat ducs.
     *
     * @param bool $resultatDucs The resultat ducs.
     */
    public function setResultatDucs($resultatDucs) {
        $this->resultatDucs = $resultatDucs;
        return $this;
    }
}
