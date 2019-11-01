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
 * Saisie pv interdite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisiePvInterditeTrait {

    /**
     * Saisie pv interdite.
     *
     * @var bool
     */
    private $saisiePvInterdite;

    /**
     * Get the saisie pv interdite.
     *
     * @return bool Returns the saisie pv interdite.
     */
    public function getSaisiePvInterdite() {
        return $this->saisiePvInterdite;
    }

    /**
     * Set the saisie pv interdite.
     *
     * @param bool $saisiePvInterdite The saisie pv interdite.
     */
    public function setSaisiePvInterdite($saisiePvInterdite) {
        $this->saisiePvInterdite = $saisiePvInterdite;
        return $this;
    }
}
