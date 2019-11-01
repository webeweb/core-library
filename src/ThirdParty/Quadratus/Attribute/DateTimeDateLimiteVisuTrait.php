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

use DateTime;

/**
 * Date limite visu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLimiteVisuTrait {

    /**
     * Date limite visu.
     *
     * @var DateTime|null
     */
    private $dateLimiteVisu;

    /**
     * Get the date limite visu.
     *
     * @return DateTime|null Returns the date limite visu.
     */
    public function getDateLimiteVisu() {
        return $this->dateLimiteVisu;
    }

    /**
     * Set the date limite visu.
     *
     * @param DateTime|null $dateLimiteVisu The date limite visu.
     */
    public function setDateLimiteVisu(DateTime $dateLimiteVisu = null) {
        $this->dateLimiteVisu = $dateLimiteVisu;
        return $this;
    }
}
