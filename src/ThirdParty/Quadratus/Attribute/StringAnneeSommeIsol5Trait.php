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
 * Annee somme isol5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeSommeIsol5Trait {

    /**
     * Annee somme isol5.
     *
     * @var string
     */
    private $anneeSommeIsol5;

    /**
     * Get the annee somme isol5.
     *
     * @return string Returns the annee somme isol5.
     */
    public function getAnneeSommeIsol5() {
        return $this->anneeSommeIsol5;
    }

    /**
     * Set the annee somme isol5.
     *
     * @param string $anneeSommeIsol5 The annee somme isol5.
     */
    public function setAnneeSommeIsol5($anneeSommeIsol5) {
        $this->anneeSommeIsol5 = $anneeSommeIsol5;
        return $this;
    }
}
