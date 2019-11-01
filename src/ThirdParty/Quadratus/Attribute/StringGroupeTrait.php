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
 * Groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeTrait {

    /**
     * Groupe.
     *
     * @var string
     */
    private $groupe;

    /**
     * Get the groupe.
     *
     * @return string Returns the groupe.
     */
    public function getGroupe() {
        return $this->groupe;
    }

    /**
     * Set the groupe.
     *
     * @param string $groupe The groupe.
     */
    public function setGroupe($groupe) {
        $this->groupe = $groupe;
        return $this;
    }
}
