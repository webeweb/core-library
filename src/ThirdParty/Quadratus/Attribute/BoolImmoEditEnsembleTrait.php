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
 * Immo edit ensemble trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoEditEnsembleTrait {

    /**
     * Immo edit ensemble.
     *
     * @var bool
     */
    private $immoEditEnsemble;

    /**
     * Get the immo edit ensemble.
     *
     * @return bool Returns the immo edit ensemble.
     */
    public function getImmoEditEnsemble() {
        return $this->immoEditEnsemble;
    }

    /**
     * Set the immo edit ensemble.
     *
     * @param bool $immoEditEnsemble The immo edit ensemble.
     */
    public function setImmoEditEnsemble($immoEditEnsemble) {
        $this->immoEditEnsemble = $immoEditEnsemble;
        return $this;
    }
}
