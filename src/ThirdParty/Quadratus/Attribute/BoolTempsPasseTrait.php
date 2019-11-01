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
 * Temps passe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTempsPasseTrait {

    /**
     * Temps passe.
     *
     * @var bool
     */
    private $tempsPasse;

    /**
     * Get the temps passe.
     *
     * @return bool Returns the temps passe.
     */
    public function getTempsPasse() {
        return $this->tempsPasse;
    }

    /**
     * Set the temps passe.
     *
     * @param bool $tempsPasse The temps passe.
     */
    public function setTempsPasse($tempsPasse) {
        $this->tempsPasse = $tempsPasse;
        return $this;
    }
}
