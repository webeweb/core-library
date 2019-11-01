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
 * Compte perte euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComptePerteEuroTrait {

    /**
     * Compte perte euro.
     *
     * @var string
     */
    private $comptePerteEuro;

    /**
     * Get the compte perte euro.
     *
     * @return string Returns the compte perte euro.
     */
    public function getComptePerteEuro() {
        return $this->comptePerteEuro;
    }

    /**
     * Set the compte perte euro.
     *
     * @param string $comptePerteEuro The compte perte euro.
     */
    public function setComptePerteEuro($comptePerteEuro) {
        $this->comptePerteEuro = $comptePerteEuro;
        return $this;
    }
}
