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
 * Paie euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaieEuroTrait {

    /**
     * Paie euro.
     *
     * @var bool
     */
    private $paieEuro;

    /**
     * Get the paie euro.
     *
     * @return bool Returns the paie euro.
     */
    public function getPaieEuro() {
        return $this->paieEuro;
    }

    /**
     * Set the paie euro.
     *
     * @param bool $paieEuro The paie euro.
     */
    public function setPaieEuro($paieEuro) {
        $this->paieEuro = $paieEuro;
        return $this;
    }
}
