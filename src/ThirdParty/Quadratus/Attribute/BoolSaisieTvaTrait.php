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
 * Saisie tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTvaTrait {

    /**
     * Saisie tva.
     *
     * @var bool
     */
    private $saisieTva;

    /**
     * Get the saisie tva.
     *
     * @return bool Returns the saisie tva.
     */
    public function getSaisieTva() {
        return $this->saisieTva;
    }

    /**
     * Set the saisie tva.
     *
     * @param bool $saisieTva The saisie tva.
     */
    public function setSaisieTva($saisieTva) {
        $this->saisieTva = $saisieTva;
        return $this;
    }
}
