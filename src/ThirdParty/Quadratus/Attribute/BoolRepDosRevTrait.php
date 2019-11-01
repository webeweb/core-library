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
 * Rep dos rev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepDosRevTrait {

    /**
     * Rep dos rev.
     *
     * @var bool
     */
    private $repDosRev;

    /**
     * Get the rep dos rev.
     *
     * @return bool Returns the rep dos rev.
     */
    public function getRepDosRev() {
        return $this->repDosRev;
    }

    /**
     * Set the rep dos rev.
     *
     * @param bool $repDosRev The rep dos rev.
     */
    public function setRepDosRev($repDosRev) {
        $this->repDosRev = $repDosRev;
        return $this;
    }
}
