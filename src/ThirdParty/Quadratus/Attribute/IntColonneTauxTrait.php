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
 * Colonne taux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntColonneTauxTrait {

    /**
     * Colonne taux.
     *
     * @var int
     */
    private $colonneTaux;

    /**
     * Get the colonne taux.
     *
     * @return int Returns the colonne taux.
     */
    public function getColonneTaux() {
        return $this->colonneTaux;
    }

    /**
     * Set the colonne taux.
     *
     * @param int $colonneTaux The colonne taux.
     */
    public function setColonneTaux($colonneTaux) {
        $this->colonneTaux = $colonneTaux;
        return $this;
    }
}
