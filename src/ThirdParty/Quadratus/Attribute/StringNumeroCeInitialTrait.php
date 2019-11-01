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
 * Numero ce initial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCeInitialTrait {

    /**
     * Numero ce initial.
     *
     * @var string
     */
    private $numeroCeInitial;

    /**
     * Get the numero ce initial.
     *
     * @return string Returns the numero ce initial.
     */
    public function getNumeroCeInitial() {
        return $this->numeroCeInitial;
    }

    /**
     * Set the numero ce initial.
     *
     * @param string $numeroCeInitial The numero ce initial.
     */
    public function setNumeroCeInitial($numeroCeInitial) {
        $this->numeroCeInitial = $numeroCeInitial;
        return $this;
    }
}
