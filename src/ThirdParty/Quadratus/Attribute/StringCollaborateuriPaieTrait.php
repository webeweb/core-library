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
 * Collaborateuri paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollaborateuriPaieTrait {

    /**
     * Collaborateuri paie.
     *
     * @var string
     */
    private $collaborateuriPaie;

    /**
     * Get the collaborateuri paie.
     *
     * @return string Returns the collaborateuri paie.
     */
    public function getCollaborateuriPaie() {
        return $this->collaborateuriPaie;
    }

    /**
     * Set the collaborateuri paie.
     *
     * @param string $collaborateuriPaie The collaborateuri paie.
     */
    public function setCollaborateuriPaie($collaborateuriPaie) {
        $this->collaborateuriPaie = $collaborateuriPaie;
        return $this;
    }
}
