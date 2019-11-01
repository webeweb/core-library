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
 * Temps partiel evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTempsPartielEvoTrait {

    /**
     * Temps partiel evo.
     *
     * @var string
     */
    private $tempsPartielEvo;

    /**
     * Get the temps partiel evo.
     *
     * @return string Returns the temps partiel evo.
     */
    public function getTempsPartielEvo() {
        return $this->tempsPartielEvo;
    }

    /**
     * Set the temps partiel evo.
     *
     * @param string $tempsPartielEvo The temps partiel evo.
     */
    public function setTempsPartielEvo($tempsPartielEvo) {
        $this->tempsPartielEvo = $tempsPartielEvo;
        return $this;
    }
}
