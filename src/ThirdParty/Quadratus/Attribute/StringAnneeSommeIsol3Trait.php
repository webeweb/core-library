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
 * Annee somme isol3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeSommeIsol3Trait {

    /**
     * Annee somme isol3.
     *
     * @var string
     */
    private $anneeSommeIsol3;

    /**
     * Get the annee somme isol3.
     *
     * @return string Returns the annee somme isol3.
     */
    public function getAnneeSommeIsol3() {
        return $this->anneeSommeIsol3;
    }

    /**
     * Set the annee somme isol3.
     *
     * @param string $anneeSommeIsol3 The annee somme isol3.
     */
    public function setAnneeSommeIsol3($anneeSommeIsol3) {
        $this->anneeSommeIsol3 = $anneeSommeIsol3;
        return $this;
    }
}
