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
 * Creation societe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeCreationSocieteTrait {

    /**
     * Creation societe.
     *
     * @var DateTime|null
     */
    private $creationSociete;

    /**
     * Get the creation societe.
     *
     * @return DateTime|null Returns the creation societe.
     */
    public function getCreationSociete() {
        return $this->creationSociete;
    }

    /**
     * Set the creation societe.
     *
     * @param DateTime|null $creationSociete The creation societe.
     */
    public function setCreationSociete(DateTime $creationSociete = null) {
        $this->creationSociete = $creationSociete;
        return $this;
    }
}
