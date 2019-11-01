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
 * Tds euro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTdsEuroTrait {

    /**
     * Tds euro.
     *
     * @var bool
     */
    private $tdsEuro;

    /**
     * Get the tds euro.
     *
     * @return bool Returns the tds euro.
     */
    public function getTdsEuro() {
        return $this->tdsEuro;
    }

    /**
     * Set the tds euro.
     *
     * @param bool $tdsEuro The tds euro.
     */
    public function setTdsEuro($tdsEuro) {
        $this->tdsEuro = $tdsEuro;
        return $this;
    }
}
