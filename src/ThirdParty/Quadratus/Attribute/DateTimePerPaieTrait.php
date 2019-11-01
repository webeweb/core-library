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

use DateTime;

/**
 * Per paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerPaieTrait {

    /**
     * Per paie.
     *
     * @var DateTime|null
     */
    private $perPaie;

    /**
     * Get the per paie.
     *
     * @return DateTime|null Returns the per paie.
     */
    public function getPerPaie() {
        return $this->perPaie;
    }

    /**
     * Set the per paie.
     *
     * @param DateTime|null $perPaie The per paie.
     */
    public function setPerPaie(DateTime $perPaie = null) {
        $this->perPaie = $perPaie;
        return $this;
    }
}
