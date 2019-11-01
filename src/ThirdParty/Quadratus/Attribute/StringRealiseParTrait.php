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
 * Realise par trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRealiseParTrait {

    /**
     * Realise par.
     *
     * @var string
     */
    private $realisePar;

    /**
     * Get the realise par.
     *
     * @return string Returns the realise par.
     */
    public function getRealisePar() {
        return $this->realisePar;
    }

    /**
     * Set the realise par.
     *
     * @param string $realisePar The realise par.
     */
    public function setRealisePar($realisePar) {
        $this->realisePar = $realisePar;
        return $this;
    }
}
