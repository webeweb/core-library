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
 * Prochain numero trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumeroTrait {

    /**
     * Prochain numero.
     *
     * @var int
     */
    private $prochainNumero;

    /**
     * Get the prochain numero.
     *
     * @return int Returns the prochain numero.
     */
    public function getProchainNumero() {
        return $this->prochainNumero;
    }

    /**
     * Set the prochain numero.
     *
     * @param int $prochainNumero The prochain numero.
     */
    public function setProchainNumero($prochainNumero) {
        $this->prochainNumero = $prochainNumero;
        return $this;
    }
}
