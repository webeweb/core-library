<?php

/**
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * © 2017 All rights reserved.
 */

namespace WBW\Library\Core\Sort\Tree\Alphabetical;

/**
 * Alphabetical tree sort.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Sort\Tree\Alphabetical
 * @final
 */
final class AlphabeticalTreeSort {

	/**
	 * Create a choices.
	 *
	 * @param AlphabeticalTreeSortInterface[] $choices The choices.
	 * @return array Returns the choices.
	 */
	public static function createChoices(array $choices) {

		// Initialize the output.
		$output = [];

		// Handle each node.
		foreach (self::sort($choices) as $current) {

			// Get and check the path.
			$path = self::getPath($current);
			if (!array_key_exists($path[0]->getAlphabeticalTreeSortLabel(), $output)) {
				$output[$current->getAlphabeticalTreeSortLabel()] = [];
			}
			if (count($path) === 1) {
				continue;
			}

			// Add the node.
			$output[$path[0]->getAlphabeticalTreeSortLabel()][] = $current;
		}

		// Return the output.
		return $output;
	}

	/**
	 * Compare.
	 *
	 * @param AlphabeticalTreeSortInterface $node1 The node 1.
	 * @param AlphabeticalTreeSortInterface $node2 The node 2.
	 * @return integer Returns >0 if node1 is greater than node2; 0 if they are equal and <0 if node1 is less than node2
	 */
	public static function compare(AlphabeticalTreeSortInterface $node1, AlphabeticalTreeSortInterface $node2) {

		// Get the paths.
		$path1	 = self::getPath($node1);
		$path2	 = self::getPath($node2);

		// Count the path.
		$count = count($path1);

		// Handle each path.
		for ($i = 0; $i < $count; ++$i) {

			// Get the elements.
			$elem1	 = $path1[$i];
			$elem2	 = isset($path2[$i]) ? $path2[$i] : null;

			// Compare the elements.
			if ($elem1 !== $elem2) {
				return !is_null($elem2) ? strcasecmp($elem1->getAlphabeticalTreeSortLabel(), $elem2->getAlphabeticalTreeSortLabel()) : 1;
			}
		}

		// Return egality.
		return 0;
	}

	/**
	 * Get the level.
	 *
	 * @param AlphabeticalTreeSortInterface $node The node.
	 * @return integer Returns the level.
	 */
	public static function getLevel(AlphabeticalTreeSortInterface $node) {
		return count(self::getPath($node)) - 1;
	}

	/**
	 * Get the path.
	 *
	 * @param AlphabeticalTreeSortInterface $node The node.
	 * @return array Returns the path.
	 */
	public static function getPath(AlphabeticalTreeSortInterface $node) {

		// Initialize the path.
		$path = [];

		// Save the node.
		$current = $node;

		// Handle each parent.
		do {
			array_unshift($path, $current);
			$current = $current->getAlphabeticalTreeSortParent();
		} while (!is_null($current));

		// Return the path.
		return $path;
	}

	/**
	 * Sort.
	 *
	 * @param AlphabeticalTreeSortInterface[] $nodes The nodes.
	 * @return array Returns the sorted nodes.
	 */
	public static function sort(array $nodes = []) {

		// Sort the nodes.
		usort($nodes, ["WBW\\Library\\Core\\Sort\\Tree\\Alphabetical\\AlphabeticalTreeSort", "compare"]);

		// Return the nodes.
		return $nodes;
	}

}
