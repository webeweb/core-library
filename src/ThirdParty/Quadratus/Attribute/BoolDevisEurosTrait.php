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
 * Devis euros trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDevisEurosTrait {

    /**
     * Devis euros.
     *
     * @var bool
     */
    private $devisEuros;

    /**
     * Get the devis euros.
     *
     * @return bool Returns the devis euros.
     */
    public function getDevisEuros() {
        return $this->devisEuros;
    }

    /**
     * Set the devis euros.
     *
     * @param bool $devisEuros The devis euros.
     */
    public function setDevisEuros($devisEuros) {
        $this->devisEuros = $devisEuros;
        return $this;
    }
}
