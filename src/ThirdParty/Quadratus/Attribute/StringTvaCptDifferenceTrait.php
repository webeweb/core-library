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
 * Tva cpt difference trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptDifferenceTrait {

    /**
     * Tva cpt difference.
     *
     * @var string
     */
    private $tvaCptDifference;

    /**
     * Get the tva cpt difference.
     *
     * @return string Returns the tva cpt difference.
     */
    public function getTvaCptDifference() {
        return $this->tvaCptDifference;
    }

    /**
     * Set the tva cpt difference.
     *
     * @param string $tvaCptDifference The tva cpt difference.
     */
    public function setTvaCptDifference($tvaCptDifference) {
        $this->tvaCptDifference = $tvaCptDifference;
        return $this;
    }
}
