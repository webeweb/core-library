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
 * Num ensemble trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumEnsembleTrait {

    /**
     * Num ensemble.
     *
     * @var int
     */
    private $numEnsemble;

    /**
     * Get the num ensemble.
     *
     * @return int Returns the num ensemble.
     */
    public function getNumEnsemble() {
        return $this->numEnsemble;
    }

    /**
     * Set the num ensemble.
     *
     * @param int $numEnsemble The num ensemble.
     */
    public function setNumEnsemble($numEnsemble) {
        $this->numEnsemble = $numEnsemble;
        return $this;
    }
}
