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
 * Num cpt origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptOrigineTrait {

    /**
     * Num cpt origine.
     *
     * @var string
     */
    private $numCptOrigine;

    /**
     * Get the num cpt origine.
     *
     * @return string Returns the num cpt origine.
     */
    public function getNumCptOrigine() {
        return $this->numCptOrigine;
    }

    /**
     * Set the num cpt origine.
     *
     * @param string $numCptOrigine The num cpt origine.
     */
    public function setNumCptOrigine($numCptOrigine) {
        $this->numCptOrigine = $numCptOrigine;
        return $this;
    }
}
