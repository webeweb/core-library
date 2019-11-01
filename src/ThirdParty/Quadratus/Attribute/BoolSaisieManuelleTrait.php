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
 * Saisie manuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieManuelleTrait {

    /**
     * Saisie manuelle.
     *
     * @var bool
     */
    private $saisieManuelle;

    /**
     * Get the saisie manuelle.
     *
     * @return bool Returns the saisie manuelle.
     */
    public function getSaisieManuelle() {
        return $this->saisieManuelle;
    }

    /**
     * Set the saisie manuelle.
     *
     * @param bool $saisieManuelle The saisie manuelle.
     */
    public function setSaisieManuelle($saisieManuelle) {
        $this->saisieManuelle = $saisieManuelle;
        return $this;
    }
}
