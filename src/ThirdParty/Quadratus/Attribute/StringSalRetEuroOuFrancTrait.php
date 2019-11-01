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
 * Sal ret euro ou franc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSalRetEuroOuFrancTrait {

    /**
     * Sal ret euro ou franc.
     *
     * @var string
     */
    private $salRetEuroOuFranc;

    /**
     * Get the sal ret euro ou franc.
     *
     * @return string Returns the sal ret euro ou franc.
     */
    public function getSalRetEuroOuFranc() {
        return $this->salRetEuroOuFranc;
    }

    /**
     * Set the sal ret euro ou franc.
     *
     * @param string $salRetEuroOuFranc The sal ret euro ou franc.
     */
    public function setSalRetEuroOuFranc($salRetEuroOuFranc) {
        $this->salRetEuroOuFranc = $salRetEuroOuFranc;
        return $this;
    }
}
