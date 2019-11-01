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
 * Date declenchement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDeclenchementTrait {

    /**
     * Date declenchement.
     *
     * @var DateTime|null
     */
    private $dateDeclenchement;

    /**
     * Get the date declenchement.
     *
     * @return DateTime|null Returns the date declenchement.
     */
    public function getDateDeclenchement() {
        return $this->dateDeclenchement;
    }

    /**
     * Set the date declenchement.
     *
     * @param DateTime|null $dateDeclenchement The date declenchement.
     */
    public function setDateDeclenchement(DateTime $dateDeclenchement = null) {
        $this->dateDeclenchement = $dateDeclenchement;
        return $this;
    }
}
