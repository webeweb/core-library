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
 * Rac data paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRacDataPaieTrait {

    /**
     * Rac data paie.
     *
     * @var string
     */
    private $racDataPaie;

    /**
     * Get the rac data paie.
     *
     * @return string Returns the rac data paie.
     */
    public function getRacDataPaie() {
        return $this->racDataPaie;
    }

    /**
     * Set the rac data paie.
     *
     * @param string $racDataPaie The rac data paie.
     */
    public function setRacDataPaie($racDataPaie) {
        $this->racDataPaie = $racDataPaie;
        return $this;
    }
}
