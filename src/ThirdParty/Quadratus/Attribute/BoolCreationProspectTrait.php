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
 * Creation prospect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationProspectTrait {

    /**
     * Creation prospect.
     *
     * @var bool
     */
    private $creationProspect;

    /**
     * Get the creation prospect.
     *
     * @return bool Returns the creation prospect.
     */
    public function getCreationProspect() {
        return $this->creationProspect;
    }

    /**
     * Set the creation prospect.
     *
     * @param bool $creationProspect The creation prospect.
     */
    public function setCreationProspect($creationProspect) {
        $this->creationProspect = $creationProspect;
        return $this;
    }
}
