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
 * Echeance fin quinzaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEcheanceFinQuinzaineTrait {

    /**
     * Echeance fin quinzaine.
     *
     * @var bool
     */
    private $echeanceFinQuinzaine;

    /**
     * Get the echeance fin quinzaine.
     *
     * @return bool Returns the echeance fin quinzaine.
     */
    public function getEcheanceFinQuinzaine() {
        return $this->echeanceFinQuinzaine;
    }

    /**
     * Set the echeance fin quinzaine.
     *
     * @param bool $echeanceFinQuinzaine The echeance fin quinzaine.
     */
    public function setEcheanceFinQuinzaine($echeanceFinQuinzaine) {
        $this->echeanceFinQuinzaine = $echeanceFinQuinzaine;
        return $this;
    }
}
