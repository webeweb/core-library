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
 * Vue devis droit suppr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVueDevisDroitSupprTrait {

    /**
     * Vue devis droit suppr.
     *
     * @var bool
     */
    private $vueDevisDroitSuppr;

    /**
     * Get the vue devis droit suppr.
     *
     * @return bool Returns the vue devis droit suppr.
     */
    public function getVueDevisDroitSuppr() {
        return $this->vueDevisDroitSuppr;
    }

    /**
     * Set the vue devis droit suppr.
     *
     * @param bool $vueDevisDroitSuppr The vue devis droit suppr.
     */
    public function setVueDevisDroitSuppr($vueDevisDroitSuppr) {
        $this->vueDevisDroitSuppr = $vueDevisDroitSuppr;
        return $this;
    }
}
