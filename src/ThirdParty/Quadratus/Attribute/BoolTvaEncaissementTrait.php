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
 * Tva encaissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaEncaissementTrait {

    /**
     * Tva encaissement.
     *
     * @var bool
     */
    private $tvaEncaissement;

    /**
     * Get the tva encaissement.
     *
     * @return bool Returns the tva encaissement.
     */
    public function getTvaEncaissement() {
        return $this->tvaEncaissement;
    }

    /**
     * Set the tva encaissement.
     *
     * @param bool $tvaEncaissement The tva encaissement.
     */
    public function setTvaEncaissement($tvaEncaissement) {
        $this->tvaEncaissement = $tvaEncaissement;
        return $this;
    }
}
