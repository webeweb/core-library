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
 * Operationnelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOperationnelleTrait {

    /**
     * Operationnelle.
     *
     * @var bool
     */
    private $operationnelle;

    /**
     * Get the operationnelle.
     *
     * @return bool Returns the operationnelle.
     */
    public function getOperationnelle() {
        return $this->operationnelle;
    }

    /**
     * Set the operationnelle.
     *
     * @param bool $operationnelle The operationnelle.
     */
    public function setOperationnelle($operationnelle) {
        $this->operationnelle = $operationnelle;
        return $this;
    }
}
