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
 * Annee ded trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneeDedTrait {

    /**
     * Annee ded.
     *
     * @var int
     */
    private $anneeDed;

    /**
     * Get the annee ded.
     *
     * @return int Returns the annee ded.
     */
    public function getAnneeDed() {
        return $this->anneeDed;
    }

    /**
     * Set the annee ded.
     *
     * @param int $anneeDed The annee ded.
     */
    public function setAnneeDed($anneeDed) {
        $this->anneeDed = $anneeDed;
        return $this;
    }
}
