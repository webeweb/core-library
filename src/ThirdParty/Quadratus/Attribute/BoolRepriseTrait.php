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
 * Reprise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRepriseTrait {

    /**
     * Reprise.
     *
     * @var bool
     */
    private $reprise;

    /**
     * Get the reprise.
     *
     * @return bool Returns the reprise.
     */
    public function getReprise() {
        return $this->reprise;
    }

    /**
     * Set the reprise.
     *
     * @param bool $reprise The reprise.
     */
    public function setReprise($reprise) {
        $this->reprise = $reprise;
        return $this;
    }
}
