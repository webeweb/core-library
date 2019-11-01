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
 * Mensualisation tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMensualisationTacheTrait {

    /**
     * Mensualisation tache.
     *
     * @var bool
     */
    private $mensualisationTache;

    /**
     * Get the mensualisation tache.
     *
     * @return bool Returns the mensualisation tache.
     */
    public function getMensualisationTache() {
        return $this->mensualisationTache;
    }

    /**
     * Set the mensualisation tache.
     *
     * @param bool $mensualisationTache The mensualisation tache.
     */
    public function setMensualisationTache($mensualisationTache) {
        $this->mensualisationTache = $mensualisationTache;
        return $this;
    }
}
