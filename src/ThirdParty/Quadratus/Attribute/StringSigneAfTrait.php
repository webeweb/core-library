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
 * Signe af trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSigneAfTrait {

    /**
     * Signe af.
     *
     * @var string
     */
    private $signeAf;

    /**
     * Get the signe af.
     *
     * @return string Returns the signe af.
     */
    public function getSigneAf() {
        return $this->signeAf;
    }

    /**
     * Set the signe af.
     *
     * @param string $signeAf The signe af.
     */
    public function setSigneAf($signeAf) {
        $this->signeAf = $signeAf;
        return $this;
    }
}
