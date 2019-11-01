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
 * Numero semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroSemaineTrait {

    /**
     * Numero semaine.
     *
     * @var string
     */
    private $numeroSemaine;

    /**
     * Get the numero semaine.
     *
     * @return string Returns the numero semaine.
     */
    public function getNumeroSemaine() {
        return $this->numeroSemaine;
    }

    /**
     * Set the numero semaine.
     *
     * @param string $numeroSemaine The numero semaine.
     */
    public function setNumeroSemaine($numeroSemaine) {
        $this->numeroSemaine = $numeroSemaine;
        return $this;
    }
}
