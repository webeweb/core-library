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
 * Soumis crds100 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSoumisCrds100Trait {

    /**
     * Soumis crds100.
     *
     * @var string
     */
    private $soumisCrds100;

    /**
     * Get the soumis crds100.
     *
     * @return string Returns the soumis crds100.
     */
    public function getSoumisCrds100() {
        return $this->soumisCrds100;
    }

    /**
     * Set the soumis crds100.
     *
     * @param string $soumisCrds100 The soumis crds100.
     */
    public function setSoumisCrds100($soumisCrds100) {
        $this->soumisCrds100 = $soumisCrds100;
        return $this;
    }
}
