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
 * Periodicite modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPeriodiciteModifieTrait {

    /**
     * Periodicite modifie.
     *
     * @var bool
     */
    private $periodiciteModifie;

    /**
     * Get the periodicite modifie.
     *
     * @return bool Returns the periodicite modifie.
     */
    public function getPeriodiciteModifie() {
        return $this->periodiciteModifie;
    }

    /**
     * Set the periodicite modifie.
     *
     * @param bool $periodiciteModifie The periodicite modifie.
     */
    public function setPeriodiciteModifie($periodiciteModifie) {
        $this->periodiciteModifie = $periodiciteModifie;
        return $this;
    }
}
