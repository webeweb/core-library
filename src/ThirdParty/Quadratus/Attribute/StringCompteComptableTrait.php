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
 * Compte comptable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteComptableTrait {

    /**
     * Compte comptable.
     *
     * @var string
     */
    private $compteComptable;

    /**
     * Get the compte comptable.
     *
     * @return string Returns the compte comptable.
     */
    public function getCompteComptable() {
        return $this->compteComptable;
    }

    /**
     * Set the compte comptable.
     *
     * @param string $compteComptable The compte comptable.
     */
    public function setCompteComptable($compteComptable) {
        $this->compteComptable = $compteComptable;
        return $this;
    }
}
