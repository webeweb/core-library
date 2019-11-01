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
 * Compte gain euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteGainEuroTrait {

    /**
     * Compte gain euro.
     *
     * @var string
     */
    private $compteGainEuro;

    /**
     * Get the compte gain euro.
     *
     * @return string Returns the compte gain euro.
     */
    public function getCompteGainEuro() {
        return $this->compteGainEuro;
    }

    /**
     * Set the compte gain euro.
     *
     * @param string $compteGainEuro The compte gain euro.
     */
    public function setCompteGainEuro($compteGainEuro) {
        $this->compteGainEuro = $compteGainEuro;
        return $this;
    }
}
