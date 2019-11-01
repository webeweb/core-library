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
 * Fct saisie banques trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctSaisieBanquesTrait {

    /**
     * Fct saisie banques.
     *
     * @var bool
     */
    private $fctSaisieBanques;

    /**
     * Get the fct saisie banques.
     *
     * @return bool Returns the fct saisie banques.
     */
    public function getFctSaisieBanques() {
        return $this->fctSaisieBanques;
    }

    /**
     * Set the fct saisie banques.
     *
     * @param bool $fctSaisieBanques The fct saisie banques.
     */
    public function setFctSaisieBanques($fctSaisieBanques) {
        $this->fctSaisieBanques = $fctSaisieBanques;
        return $this;
    }
}
