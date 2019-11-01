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
 * Cum h repos remplace trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumHReposRemplaceTrait {

    /**
     * Cum h repos remplace.
     *
     * @var float
     */
    private $cumHReposRemplace;

    /**
     * Get the cum h repos remplace.
     *
     * @return float Returns the cum h repos remplace.
     */
    public function getCumHReposRemplace() {
        return $this->cumHReposRemplace;
    }

    /**
     * Set the cum h repos remplace.
     *
     * @param float $cumHReposRemplace The cum h repos remplace.
     */
    public function setCumHReposRemplace($cumHReposRemplace) {
        $this->cumHReposRemplace = $cumHReposRemplace;
        return $this;
    }
}
