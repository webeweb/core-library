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
 * Saisie fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieFactTrait {

    /**
     * Saisie fact.
     *
     * @var bool
     */
    private $saisieFact;

    /**
     * Get the saisie fact.
     *
     * @return bool Returns the saisie fact.
     */
    public function getSaisieFact() {
        return $this->saisieFact;
    }

    /**
     * Set the saisie fact.
     *
     * @param bool $saisieFact The saisie fact.
     */
    public function setSaisieFact($saisieFact) {
        $this->saisieFact = $saisieFact;
        return $this;
    }
}
