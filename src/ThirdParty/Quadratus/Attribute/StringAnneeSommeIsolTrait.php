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
 * Annee somme isol trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeSommeIsolTrait {

    /**
     * Annee somme isol.
     *
     * @var string
     */
    private $anneeSommeIsol;

    /**
     * Get the annee somme isol.
     *
     * @return string Returns the annee somme isol.
     */
    public function getAnneeSommeIsol() {
        return $this->anneeSommeIsol;
    }

    /**
     * Set the annee somme isol.
     *
     * @param string $anneeSommeIsol The annee somme isol.
     */
    public function setAnneeSommeIsol($anneeSommeIsol) {
        $this->anneeSommeIsol = $anneeSommeIsol;
        return $this;
    }
}
