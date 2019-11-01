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
 * Niveau analytique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNiveauAnalytiqueTrait {

    /**
     * Niveau analytique.
     *
     * @var int
     */
    private $niveauAnalytique;

    /**
     * Get the niveau analytique.
     *
     * @return int Returns the niveau analytique.
     */
    public function getNiveauAnalytique() {
        return $this->niveauAnalytique;
    }

    /**
     * Set the niveau analytique.
     *
     * @param int $niveauAnalytique The niveau analytique.
     */
    public function setNiveauAnalytique($niveauAnalytique) {
        $this->niveauAnalytique = $niveauAnalytique;
        return $this;
    }
}
