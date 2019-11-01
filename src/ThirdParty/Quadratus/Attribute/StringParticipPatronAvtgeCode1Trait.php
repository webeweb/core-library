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
 * Particip patron avtge code1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringParticipPatronAvtgeCode1Trait {

    /**
     * Particip patron avtge code1.
     *
     * @var string
     */
    private $participPatronAvtgeCode1;

    /**
     * Get the particip patron avtge code1.
     *
     * @return string Returns the particip patron avtge code1.
     */
    public function getParticipPatronAvtgeCode1() {
        return $this->participPatronAvtgeCode1;
    }

    /**
     * Set the particip patron avtge code1.
     *
     * @param string $participPatronAvtgeCode1 The particip patron avtge code1.
     */
    public function setParticipPatronAvtgeCode1($participPatronAvtgeCode1) {
        $this->participPatronAvtgeCode1 = $participPatronAvtgeCode1;
        return $this;
    }
}
