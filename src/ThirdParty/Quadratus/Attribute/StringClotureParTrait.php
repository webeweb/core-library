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
 * Cloture par trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClotureParTrait {

    /**
     * Cloture par.
     *
     * @var string
     */
    private $cloturePar;

    /**
     * Get the cloture par.
     *
     * @return string Returns the cloture par.
     */
    public function getCloturePar() {
        return $this->cloturePar;
    }

    /**
     * Set the cloture par.
     *
     * @param string $cloturePar The cloture par.
     */
    public function setCloturePar($cloturePar) {
        $this->cloturePar = $cloturePar;
        return $this;
    }
}
