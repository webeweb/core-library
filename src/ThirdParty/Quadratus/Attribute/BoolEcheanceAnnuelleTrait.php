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
 * Echeance annuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEcheanceAnnuelleTrait {

    /**
     * Echeance annuelle.
     *
     * @var bool
     */
    private $echeanceAnnuelle;

    /**
     * Get the echeance annuelle.
     *
     * @return bool Returns the echeance annuelle.
     */
    public function getEcheanceAnnuelle() {
        return $this->echeanceAnnuelle;
    }

    /**
     * Set the echeance annuelle.
     *
     * @param bool $echeanceAnnuelle The echeance annuelle.
     */
    public function setEcheanceAnnuelle($echeanceAnnuelle) {
        $this->echeanceAnnuelle = $echeanceAnnuelle;
        return $this;
    }
}
