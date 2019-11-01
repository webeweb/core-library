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
 * Non travaillee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonTravailleeTrait {

    /**
     * Non travaillee.
     *
     * @var bool
     */
    private $nonTravaillee;

    /**
     * Get the non travaillee.
     *
     * @return bool Returns the non travaillee.
     */
    public function getNonTravaillee() {
        return $this->nonTravaillee;
    }

    /**
     * Set the non travaillee.
     *
     * @param bool $nonTravaillee The non travaillee.
     */
    public function setNonTravaillee($nonTravaillee) {
        $this->nonTravaillee = $nonTravaillee;
        return $this;
    }
}
