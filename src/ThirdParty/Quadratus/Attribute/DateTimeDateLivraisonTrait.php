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
 * Date livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLivraisonTrait {

    /**
     * Date livraison.
     *
     * @var DateTime|null
     */
    private $dateLivraison;

    /**
     * Get the date livraison.
     *
     * @return DateTime|null Returns the date livraison.
     */
    public function getDateLivraison() {
        return $this->dateLivraison;
    }

    /**
     * Set the date livraison.
     *
     * @param DateTime|null $dateLivraison The date livraison.
     */
    public function setDateLivraison(DateTime $dateLivraison = null) {
        $this->dateLivraison = $dateLivraison;
        return $this;
    }
}
