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
 * Date reeval trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateReevalTrait {

    /**
     * Date reeval.
     *
     * @var DateTime|null
     */
    private $dateReeval;

    /**
     * Get the date reeval.
     *
     * @return DateTime|null Returns the date reeval.
     */
    public function getDateReeval() {
        return $this->dateReeval;
    }

    /**
     * Set the date reeval.
     *
     * @param DateTime|null $dateReeval The date reeval.
     */
    public function setDateReeval(DateTime $dateReeval = null) {
        $this->dateReeval = $dateReeval;
        return $this;
    }
}
