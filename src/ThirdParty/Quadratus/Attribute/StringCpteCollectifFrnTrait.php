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
 * Cpte collectif frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCpteCollectifFrnTrait {

    /**
     * Cpte collectif frn.
     *
     * @var string
     */
    private $cpteCollectifFrn;

    /**
     * Get the cpte collectif frn.
     *
     * @return string Returns the cpte collectif frn.
     */
    public function getCpteCollectifFrn() {
        return $this->cpteCollectifFrn;
    }

    /**
     * Set the cpte collectif frn.
     *
     * @param string $cpteCollectifFrn The cpte collectif frn.
     */
    public function setCpteCollectifFrn($cpteCollectifFrn) {
        $this->cpteCollectifFrn = $cpteCollectifFrn;
        return $this;
    }
}
