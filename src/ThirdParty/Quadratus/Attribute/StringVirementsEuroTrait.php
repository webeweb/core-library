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
 * Virements euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVirementsEuroTrait {

    /**
     * Virements euro.
     *
     * @var string
     */
    private $virementsEuro;

    /**
     * Get the virements euro.
     *
     * @return string Returns the virements euro.
     */
    public function getVirementsEuro() {
        return $this->virementsEuro;
    }

    /**
     * Set the virements euro.
     *
     * @param string $virementsEuro The virements euro.
     */
    public function setVirementsEuro($virementsEuro) {
        $this->virementsEuro = $virementsEuro;
        return $this;
    }
}
