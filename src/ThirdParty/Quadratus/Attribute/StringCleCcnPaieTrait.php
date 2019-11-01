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
 * Cle ccn paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleCcnPaieTrait {

    /**
     * Cle ccn paie.
     *
     * @var string
     */
    private $cleCcnPaie;

    /**
     * Get the cle ccn paie.
     *
     * @return string Returns the cle ccn paie.
     */
    public function getCleCcnPaie() {
        return $this->cleCcnPaie;
    }

    /**
     * Set the cle ccn paie.
     *
     * @param string $cleCcnPaie The cle ccn paie.
     */
    public function setCleCcnPaie($cleCcnPaie) {
        $this->cleCcnPaie = $cleCcnPaie;
        return $this;
    }
}
