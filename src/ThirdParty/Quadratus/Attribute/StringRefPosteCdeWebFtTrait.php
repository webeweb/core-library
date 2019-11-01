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
 * Ref poste cde web ft trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefPosteCdeWebFtTrait {

    /**
     * Ref poste cde web ft.
     *
     * @var string
     */
    private $refPosteCdeWebFt;

    /**
     * Get the ref poste cde web ft.
     *
     * @return string Returns the ref poste cde web ft.
     */
    public function getRefPosteCdeWebFt() {
        return $this->refPosteCdeWebFt;
    }

    /**
     * Set the ref poste cde web ft.
     *
     * @param string $refPosteCdeWebFt The ref poste cde web ft.
     */
    public function setRefPosteCdeWebFt($refPosteCdeWebFt) {
        $this->refPosteCdeWebFt = $refPosteCdeWebFt;
        return $this;
    }
}
