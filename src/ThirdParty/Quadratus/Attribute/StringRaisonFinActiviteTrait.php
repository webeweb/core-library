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
 * Raison fin activite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRaisonFinActiviteTrait {

    /**
     * Raison fin activite.
     *
     * @var string
     */
    private $raisonFinActivite;

    /**
     * Get the raison fin activite.
     *
     * @return string Returns the raison fin activite.
     */
    public function getRaisonFinActivite() {
        return $this->raisonFinActivite;
    }

    /**
     * Set the raison fin activite.
     *
     * @param string $raisonFinActivite The raison fin activite.
     */
    public function setRaisonFinActivite($raisonFinActivite) {
        $this->raisonFinActivite = $raisonFinActivite;
        return $this;
    }
}
