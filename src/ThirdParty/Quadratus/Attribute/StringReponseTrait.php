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
 * Reponse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReponseTrait {

    /**
     * Reponse.
     *
     * @var string
     */
    private $reponse;

    /**
     * Get the reponse.
     *
     * @return string Returns the reponse.
     */
    public function getReponse() {
        return $this->reponse;
    }

    /**
     * Set the reponse.
     *
     * @param string $reponse The reponse.
     */
    public function setReponse($reponse) {
        $this->reponse = $reponse;
        return $this;
    }
}
