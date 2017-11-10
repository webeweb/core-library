<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Navigation\Node;

/**
 * BreadcrumbNode
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Navigation\Node
 */
class BreadcrumbNode extends AbstractNavigationNode {

	/**
	 * Constructor.
	 *
	 * @param string $name The name.
	 * @param string $icon The icon.
	 * @param string $route The route.
	 */
	public final function __construct($name, $icon = null, $route = null) {
		parent::__construct($name, $icon, $route);
		$this->setVisible(false);
	}

}
