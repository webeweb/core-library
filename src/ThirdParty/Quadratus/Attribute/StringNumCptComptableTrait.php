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
 * Num cpt comptable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptComptableTrait {

    /**
     * Num cpt comptable.
     *
     * @var string
     */
    private $numCptComptable;

    /**
     * Get the num cpt comptable.
     *
     * @return string Returns the num cpt comptable.
     */
    public function getNumCptComptable() {
        return $this->numCptComptable;
    }

    /**
     * Set the num cpt comptable.
     *
     * @param string $numCptComptable The num cpt comptable.
     */
    public function setNumCptComptable($numCptComptable) {
        $this->numCptComptable = $numCptComptable;
        return $this;
    }
}
