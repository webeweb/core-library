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
 * Cheques euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringChequesEuroTrait {

    /**
     * Cheques euro.
     *
     * @var string
     */
    private $chequesEuro;

    /**
     * Get the cheques euro.
     *
     * @return string Returns the cheques euro.
     */
    public function getChequesEuro() {
        return $this->chequesEuro;
    }

    /**
     * Set the cheques euro.
     *
     * @param string $chequesEuro The cheques euro.
     */
    public function setChequesEuro($chequesEuro) {
        $this->chequesEuro = $chequesEuro;
        return $this;
    }
}
