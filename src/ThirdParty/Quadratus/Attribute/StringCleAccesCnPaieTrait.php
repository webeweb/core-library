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
 * Cle acces cn paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesCnPaieTrait {

    /**
     * Cle acces cn paie.
     *
     * @var string
     */
    private $cleAccesCnPaie;

    /**
     * Get the cle acces cn paie.
     *
     * @return string Returns the cle acces cn paie.
     */
    public function getCleAccesCnPaie() {
        return $this->cleAccesCnPaie;
    }

    /**
     * Set the cle acces cn paie.
     *
     * @param string $cleAccesCnPaie The cle acces cn paie.
     */
    public function setCleAccesCnPaie($cleAccesCnPaie) {
        $this->cleAccesCnPaie = $cleAccesCnPaie;
        return $this;
    }
}
