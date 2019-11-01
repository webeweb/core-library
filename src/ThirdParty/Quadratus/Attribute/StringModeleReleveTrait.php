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
 * Modele releve trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleReleveTrait {

    /**
     * Modele releve.
     *
     * @var string
     */
    private $modeleReleve;

    /**
     * Get the modele releve.
     *
     * @return string Returns the modele releve.
     */
    public function getModeleReleve() {
        return $this->modeleReleve;
    }

    /**
     * Set the modele releve.
     *
     * @param string $modeleReleve The modele releve.
     */
    public function setModeleReleve($modeleReleve) {
        $this->modeleReleve = $modeleReleve;
        return $this;
    }
}
