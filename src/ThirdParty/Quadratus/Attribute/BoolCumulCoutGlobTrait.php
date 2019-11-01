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
 * Cumul cout glob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCumulCoutGlobTrait {

    /**
     * Cumul cout glob.
     *
     * @var bool
     */
    private $cumulCoutGlob;

    /**
     * Get the cumul cout glob.
     *
     * @return bool Returns the cumul cout glob.
     */
    public function getCumulCoutGlob() {
        return $this->cumulCoutGlob;
    }

    /**
     * Set the cumul cout glob.
     *
     * @param bool $cumulCoutGlob The cumul cout glob.
     */
    public function setCumulCoutGlob($cumulCoutGlob) {
        $this->cumulCoutGlob = $cumulCoutGlob;
        return $this;
    }
}
