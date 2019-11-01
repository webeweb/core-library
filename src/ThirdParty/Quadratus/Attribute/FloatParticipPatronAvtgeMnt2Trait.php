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
 * Particip patron avtge mnt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatParticipPatronAvtgeMnt2Trait {

    /**
     * Particip patron avtge mnt2.
     *
     * @var float
     */
    private $participPatronAvtgeMnt2;

    /**
     * Get the particip patron avtge mnt2.
     *
     * @return float Returns the particip patron avtge mnt2.
     */
    public function getParticipPatronAvtgeMnt2() {
        return $this->participPatronAvtgeMnt2;
    }

    /**
     * Set the particip patron avtge mnt2.
     *
     * @param float $participPatronAvtgeMnt2 The particip patron avtge mnt2.
     */
    public function setParticipPatronAvtgeMnt2($participPatronAvtgeMnt2) {
        $this->participPatronAvtgeMnt2 = $participPatronAvtgeMnt2;
        return $this;
    }
}
