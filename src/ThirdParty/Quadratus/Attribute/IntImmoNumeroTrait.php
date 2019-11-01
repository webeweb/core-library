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
 * Immo numero trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntImmoNumeroTrait {

    /**
     * Immo numero.
     *
     * @var int
     */
    private $immoNumero;

    /**
     * Get the immo numero.
     *
     * @return int Returns the immo numero.
     */
    public function getImmoNumero() {
        return $this->immoNumero;
    }

    /**
     * Set the immo numero.
     *
     * @param int $immoNumero The immo numero.
     */
    public function setImmoNumero($immoNumero) {
        $this->immoNumero = $immoNumero;
        return $this;
    }
}
