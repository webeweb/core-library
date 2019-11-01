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
 * Ya eu saisie manuelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolYaEuSaisieManuelleTrait {

    /**
     * Ya eu saisie manuelle.
     *
     * @var bool
     */
    private $yaEuSaisieManuelle;

    /**
     * Get the ya eu saisie manuelle.
     *
     * @return bool Returns the ya eu saisie manuelle.
     */
    public function getYaEuSaisieManuelle() {
        return $this->yaEuSaisieManuelle;
    }

    /**
     * Set the ya eu saisie manuelle.
     *
     * @param bool $yaEuSaisieManuelle The ya eu saisie manuelle.
     */
    public function setYaEuSaisieManuelle($yaEuSaisieManuelle) {
        $this->yaEuSaisieManuelle = $yaEuSaisieManuelle;
        return $this;
    }
}
