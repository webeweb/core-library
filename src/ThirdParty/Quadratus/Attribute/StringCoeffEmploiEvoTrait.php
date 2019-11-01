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
 * Coeff emploi evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCoeffEmploiEvoTrait {

    /**
     * Coeff emploi evo.
     *
     * @var string
     */
    private $coeffEmploiEvo;

    /**
     * Get the coeff emploi evo.
     *
     * @return string Returns the coeff emploi evo.
     */
    public function getCoeffEmploiEvo() {
        return $this->coeffEmploiEvo;
    }

    /**
     * Set the coeff emploi evo.
     *
     * @param string $coeffEmploiEvo The coeff emploi evo.
     */
    public function setCoeffEmploiEvo($coeffEmploiEvo) {
        $this->coeffEmploiEvo = $coeffEmploiEvo;
        return $this;
    }
}
