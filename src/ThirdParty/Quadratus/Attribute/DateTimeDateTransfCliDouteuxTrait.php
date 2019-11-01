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
 * Date transf cli douteux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfCliDouteuxTrait {

    /**
     * Date transf cli douteux.
     *
     * @var DateTime|null
     */
    private $dateTransfCliDouteux;

    /**
     * Get the date transf cli douteux.
     *
     * @return DateTime|null Returns the date transf cli douteux.
     */
    public function getDateTransfCliDouteux() {
        return $this->dateTransfCliDouteux;
    }

    /**
     * Set the date transf cli douteux.
     *
     * @param DateTime|null $dateTransfCliDouteux The date transf cli douteux.
     */
    public function setDateTransfCliDouteux(DateTime $dateTransfCliDouteux = null) {
        $this->dateTransfCliDouteux = $dateTransfCliDouteux;
        return $this;
    }
}
