<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Navigation\Tree;

use WBW\Library\Core\Navigation\Node\AbstractNavigationNode;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;
use WBW\Library\Core\Navigation\Node\NavigationNode;

/**
 * Navigation tree.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Navigation\Tree
 * @final
 */
final class NavigationTree extends AbstractNavigationNode {

	/**
	 * Constructor.
	 */
	public function __construct() {
		parent::__construct("tree");
	}

	/**
	 * Get the breadcrumbs.
	 *
	 * @param AbstractNavigationNode $node The navigation node.
	 * @return AsbtractNavigationNode[] Returns the navigation nodes.
	 */
	public function getBreadcrumbs(AbstractNavigationNode $node = null) {

		// Create the breadcrumbs.
		$breadcrumbs = [];

		// Correct the parameter if necessary.
		if (is_null($node)) {
			$node = $this;
		}

		// Check the instance.
		if (($node instanceof NavigationNode || $node instanceof BreadcrumbNode) && $node->getActive()) {
			$breadcrumbs[] = $node;
		}

		// Handle each node.
		foreach ($node->getNodes() as $current) {
			$breadcrumbs = array_merge($breadcrumbs, $this->getBreadcrumbs($current));
		}

		// Return the breadcrumbs.
		return $breadcrumbs;
	}

}
