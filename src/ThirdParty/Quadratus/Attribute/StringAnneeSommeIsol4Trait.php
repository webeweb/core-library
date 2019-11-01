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
 * Annee somme isol4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAnneeSommeIsol4Trait {

    /**
     * Annee somme isol4.
     *
     * @var string
     */
    private $anneeSommeIsol4;

    /**
     * Get the annee somme isol4.
     *
     * @return string Returns the annee somme isol4.
     */
    public function getAnneeSommeIsol4() {
        return $this->anneeSommeIsol4;
    }

    /**
     * Set the annee somme isol4.
     *
     * @param string $anneeSommeIsol4 The annee somme isol4.
     */
    public function setAnneeSommeIsol4($anneeSommeIsol4) {
        $this->anneeSommeIsol4 = $anneeSommeIsol4;
        return $this;
    }
}
