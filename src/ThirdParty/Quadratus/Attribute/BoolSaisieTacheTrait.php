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
 * Saisie tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTacheTrait {

    /**
     * Saisie tache.
     *
     * @var bool
     */
    private $saisieTache;

    /**
     * Get the saisie tache.
     *
     * @return bool Returns the saisie tache.
     */
    public function getSaisieTache() {
        return $this->saisieTache;
    }

    /**
     * Set the saisie tache.
     *
     * @param bool $saisieTache The saisie tache.
     */
    public function setSaisieTache($saisieTache) {
        $this->saisieTache = $saisieTache;
        return $this;
    }
}
