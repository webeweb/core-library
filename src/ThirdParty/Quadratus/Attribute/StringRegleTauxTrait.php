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
 * Regle taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleTauxTrait {

    /**
     * Regle taux.
     *
     * @var string
     */
    private $regleTaux;

    /**
     * Get the regle taux.
     *
     * @return string Returns the regle taux.
     */
    public function getRegleTaux() {
        return $this->regleTaux;
    }

    /**
     * Set the regle taux.
     *
     * @param string $regleTaux The regle taux.
     */
    public function setRegleTaux($regleTaux) {
        $this->regleTaux = $regleTaux;
        return $this;
    }
}
