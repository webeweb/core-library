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
 * Valeur cotis initiale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatValeurCotisInitialeTrait {

    /**
     * Valeur cotis initiale.
     *
     * @var float
     */
    private $valeurCotisInitiale;

    /**
     * Get the valeur cotis initiale.
     *
     * @return float Returns the valeur cotis initiale.
     */
    public function getValeurCotisInitiale() {
        return $this->valeurCotisInitiale;
    }

    /**
     * Set the valeur cotis initiale.
     *
     * @param float $valeurCotisInitiale The valeur cotis initiale.
     */
    public function setValeurCotisInitiale($valeurCotisInitiale) {
        $this->valeurCotisInitiale = $valeurCotisInitiale;
        return $this;
    }
}
