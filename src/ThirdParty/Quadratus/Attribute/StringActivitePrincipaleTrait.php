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
 * Activite principale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringActivitePrincipaleTrait {

    /**
     * Activite principale.
     *
     * @var string
     */
    private $activitePrincipale;

    /**
     * Get the activite principale.
     *
     * @return string Returns the activite principale.
     */
    public function getActivitePrincipale() {
        return $this->activitePrincipale;
    }

    /**
     * Set the activite principale.
     *
     * @param string $activitePrincipale The activite principale.
     */
    public function setActivitePrincipale($activitePrincipale) {
        $this->activitePrincipale = $activitePrincipale;
        return $this;
    }
}
