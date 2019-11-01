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
 * Annee somme isol2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeSommeIsol2Trait {

    /**
     * Annee somme isol2.
     *
     * @var string
     */
    private $anneeSommeIsol2;

    /**
     * Get the annee somme isol2.
     *
     * @return string Returns the annee somme isol2.
     */
    public function getAnneeSommeIsol2() {
        return $this->anneeSommeIsol2;
    }

    /**
     * Set the annee somme isol2.
     *
     * @param string $anneeSommeIsol2 The annee somme isol2.
     */
    public function setAnneeSommeIsol2($anneeSommeIsol2) {
        $this->anneeSommeIsol2 = $anneeSommeIsol2;
        return $this;
    }
}
