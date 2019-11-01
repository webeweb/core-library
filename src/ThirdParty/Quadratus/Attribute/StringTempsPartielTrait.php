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
 * Temps partiel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTempsPartielTrait {

    /**
     * Temps partiel.
     *
     * @var string
     */
    private $tempsPartiel;

    /**
     * Get the temps partiel.
     *
     * @return string Returns the temps partiel.
     */
    public function getTempsPartiel() {
        return $this->tempsPartiel;
    }

    /**
     * Set the temps partiel.
     *
     * @param string $tempsPartiel The temps partiel.
     */
    public function setTempsPartiel($tempsPartiel) {
        $this->tempsPartiel = $tempsPartiel;
        return $this;
    }
}
