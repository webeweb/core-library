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
 * Compter samedi tf cp paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCompterSamediTfCpPaieTrait {

    /**
     * Compter samedi tf cp paie.
     *
     * @var bool
     */
    private $compterSamediTfCpPaie;

    /**
     * Get the compter samedi tf cp paie.
     *
     * @return bool Returns the compter samedi tf cp paie.
     */
    public function getCompterSamediTfCpPaie() {
        return $this->compterSamediTfCpPaie;
    }

    /**
     * Set the compter samedi tf cp paie.
     *
     * @param bool $compterSamediTfCpPaie The compter samedi tf cp paie.
     */
    public function setCompterSamediTfCpPaie($compterSamediTfCpPaie) {
        $this->compterSamediTfCpPaie = $compterSamediTfCpPaie;
        return $this;
    }
}
