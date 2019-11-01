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
 * Tvarib vir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaribVirTrait {

    /**
     * Tvarib vir.
     *
     * @var string
     */
    private $tvaribVir;

    /**
     * Get the tvarib vir.
     *
     * @return string Returns the tvarib vir.
     */
    public function getTvaribVir() {
        return $this->tvaribVir;
    }

    /**
     * Set the tvarib vir.
     *
     * @param string $tvaribVir The tvarib vir.
     */
    public function setTvaribVir($tvaribVir) {
        $this->tvaribVir = $tvaribVir;
        return $this;
    }
}
