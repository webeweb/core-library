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
 * Date reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateReponseTrait {

    /**
     * Date reponse.
     *
     * @var DateTime|null
     */
    private $dateReponse;

    /**
     * Get the date reponse.
     *
     * @return DateTime|null Returns the date reponse.
     */
    public function getDateReponse() {
        return $this->dateReponse;
    }

    /**
     * Set the date reponse.
     *
     * @param DateTime|null $dateReponse The date reponse.
     */
    public function setDateReponse(DateTime $dateReponse = null) {
        $this->dateReponse = $dateReponse;
        return $this;
    }
}
