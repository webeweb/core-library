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
 * Numero ensemble trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroEnsembleTrait {

    /**
     * Numero ensemble.
     *
     * @var int
     */
    private $numeroEnsemble;

    /**
     * Get the numero ensemble.
     *
     * @return int Returns the numero ensemble.
     */
    public function getNumeroEnsemble() {
        return $this->numeroEnsemble;
    }

    /**
     * Set the numero ensemble.
     *
     * @param int $numeroEnsemble The numero ensemble.
     */
    public function setNumeroEnsemble($numeroEnsemble) {
        $this->numeroEnsemble = $numeroEnsemble;
        return $this;
    }
}
