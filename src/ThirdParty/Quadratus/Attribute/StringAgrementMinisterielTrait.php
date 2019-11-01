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
 * Agrement ministeriel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAgrementMinisterielTrait {

    /**
     * Agrement ministeriel.
     *
     * @var string
     */
    private $agrementMinisteriel;

    /**
     * Get the agrement ministeriel.
     *
     * @return string Returns the agrement ministeriel.
     */
    public function getAgrementMinisteriel() {
        return $this->agrementMinisteriel;
    }

    /**
     * Set the agrement ministeriel.
     *
     * @param string $agrementMinisteriel The agrement ministeriel.
     */
    public function setAgrementMinisteriel($agrementMinisteriel) {
        $this->agrementMinisteriel = $agrementMinisteriel;
        return $this;
    }
}
