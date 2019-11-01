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
 * Saisie bordereau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieBordereauTrait {

    /**
     * Saisie bordereau.
     *
     * @var bool
     */
    private $saisieBordereau;

    /**
     * Get the saisie bordereau.
     *
     * @return bool Returns the saisie bordereau.
     */
    public function getSaisieBordereau() {
        return $this->saisieBordereau;
    }

    /**
     * Set the saisie bordereau.
     *
     * @param bool $saisieBordereau The saisie bordereau.
     */
    public function setSaisieBordereau($saisieBordereau) {
        $this->saisieBordereau = $saisieBordereau;
        return $this;
    }
}
